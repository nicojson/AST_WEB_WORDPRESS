(function () {
    'use strict';

    const sessionKey = 'diprozeza.session';
    const currentPage = window.location.pathname.split('/').pop() || 'inicio.html';
    const isLogin = currentPage === 'login.html' || currentPage === '';
    const isHome = currentPage === 'inicio.html' || currentPage === '';
    const session = JSON.parse(localStorage.getItem(sessionKey) || 'null');

    if (!isLogin && !isHome && !session) {
        window.location.replace('login.html');
        return;
    }

    document.addEventListener('DOMContentLoaded', function () {
        if (isLogin) {
            setupLogin();
            return;
        }

        if (isHome) return;

        setupSessionUI(session);
        renderDashboard();
        renderHistory();
        setupLogout();
    });

    function setupLogin() {
        const form = document.querySelector('#loginForm');
        const error = document.querySelector('#loginError');
        if (!form) return;

        const createSession = function (user) {
            localStorage.setItem(sessionKey, JSON.stringify(user));
            window.location.replace('dashboard.html');
        };

        const registeredUsers = JSON.parse(localStorage.getItem('diprozeza.users') || '[]');

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            const email = document.querySelector('#email').value.trim().toLowerCase();
            const password = document.querySelector('#password').value;
            const registeredUser = registeredUsers.find(function (user) {
                return user.email === email && user.password === password;
            });

            if (email === 'admin' && password === 'admin123') {
                createSession({
                    name: 'Hector Martinez',
                    role: 'Supervisor de HSE',
                    email: email
                });
                return;
            }

            if (registeredUser) {
                createSession({ name: registeredUser.name, role: 'Usuario registrado', email: registeredUser.email });
                return;
            }

            error.textContent = 'El correo o la contraseña no son correctos.';
            error.classList.remove('d-none');
        });

        document.querySelector('#guestLogin').addEventListener('click', function () {
            createSession({ name: 'Invitado', role: 'Consulta limitada', email: 'guest@astdigital.local', guest: true });
        });

        document.querySelector('#googleLogin').addEventListener('click', function () {
            createSession({ name: 'Usuario Google', role: 'Usuario registrado', email: 'google@astdigital.local' });
        });

        const registerForm = document.querySelector('#registerForm');
        registerForm.addEventListener('submit', function (event) {
            event.preventDefault();
            if (!registerForm.checkValidity()) {
                registerForm.classList.add('was-validated');
                return;
            }

            const name = document.querySelector('#registerName').value.trim();
            const email = document.querySelector('#registerEmail').value.trim().toLowerCase();
            const password = document.querySelector('#registerPassword').value;
            const message = document.querySelector('#registerMessage');

            if (registeredUsers.some(function (user) { return user.email === email; })) {
                message.className = 'small mt-3 text-danger';
                message.textContent = 'Ya existe una cuenta con ese correo.';
                return;
            }

            registeredUsers.push({ name: name, email: email, password: password });
            localStorage.setItem('diprozeza.users', JSON.stringify(registeredUsers));
            message.className = 'small mt-3 text-success';
            message.textContent = 'Cuenta creada. Ya puedes iniciar sesión.';
            document.querySelector('#email').value = email;
            bootstrap.Modal.getInstance(document.querySelector('#registerModal')).hide();
        });
    }

    function setupSessionUI(user) {
        const names = document.querySelectorAll('[data-session-name], .text-end .fw-bold');
        names.forEach(function (element) {
            element.textContent = user.name;
        });
        const roles = document.querySelectorAll('[data-session-role], .text-end small');
        roles.forEach(function (element) {
            element.textContent = user.role;
        });

        const topbar = document.querySelector('header .d-flex.align-items-center.gap-3');
        if (topbar && !topbar.querySelector('[data-logout]')) {
            const logout = document.createElement('button');
            logout.type = 'button';
            logout.className = 'btn btn-sm btn-outline-danger';
            logout.dataset.logout = 'true';
            logout.textContent = 'Salir';
            topbar.appendChild(logout);
        }
    }

    function setupLogout() {
        document.querySelectorAll('[data-logout]').forEach(function (button) {
            button.addEventListener('click', function () {
                localStorage.removeItem(sessionKey);
                window.location.replace('login.html');
            });
        });
    }

    function statusClass(status) {
        return status === 'aprobado' ? 'success' : status === 'pendiente' ? 'warning' : 'secondary';
    }

    function renderDashboard() {
        const body = document.querySelector('[data-dashboard-list]');
        if (!body || !window.astData) return;
        body.innerHTML = window.astData.map(function (item) {
            return '<tr><td><div class="fw-bold">' + item.title + '</div><small class="text-muted">Folio ' + item.id + '</small></td>' +
                '<td>' + item.area + '</td><td>' + item.responsible + '</td><td>' + item.date + '</td>' +
                '<td><span class="badge bg-' + statusClass(item.status) + '">' + item.statusLabel + '</span></td>' +
                '<td><button class="btn btn-sm btn-outline-secondary" type="button" title="Ver">Ver</button></td></tr>';
        }).join('');

        const counts = window.astData.reduce(function (result, item) {
            result[item.status] = (result[item.status] || 0) + 1;
            return result;
        }, {});
        const values = document.querySelectorAll('[data-stat]');
        values.forEach(function (element) {
            const stat = element.dataset.stat;
            element.textContent = stat === 'total' ? window.astData.length : counts[stat] || 0;
        });
    }

    function renderHistory() {
        const body = document.querySelector('[data-history-list]');
        if (!body || !window.astData) return;

        const filters = ['#filterArea', '#filterStatus', '#searchBox'].map(function (selector) {
            return document.querySelector(selector);
        });
        const paint = function () {
            const area = filters[0] ? filters[0].value.toLowerCase().replace(/\s/g, '') : '';
            const statusValue = filters[1] ? filters[1].value.toLowerCase() : '';
            const status = statusValue === 'completed' ? 'aprobado' : statusValue === 'pending' ? 'pendiente' : statusValue === 'rejected' ? 'rechazado' : statusValue;
            const search = filters[2] ? filters[2].value.toLowerCase() : '';
            const rows = window.astData.filter(function (item) {
                return (!area || item.area.toLowerCase().replace(/\s/g, '').includes(area)) &&
                    (!status || item.status === status) &&
                    (!search || (item.title + item.area + item.responsible).toLowerCase().includes(search));
            });
            body.innerHTML = rows.map(function (item) {
                return '<tr><td><strong>' + item.id + '</strong></td><td>' + item.title + '</td><td>' + item.area + '</td>' +
                    '<td>' + item.responsible + '</td><td>' + item.date + '</td><td><span class="badge bg-' + statusClass(item.status) + '">' + item.statusLabel + '</span></td>' +
                    '<td><span class="badge bg-' + (item.risk >= 16 ? 'danger' : item.risk >= 12 ? 'warning' : 'success') + '">' + item.risk + ' (' + item.riskLabel + ')</span></td>' +
                    '<td><button class="btn btn-sm btn-outline-primary" type="button">Ver</button></td></tr>';
            }).join('');
        };
        filters.forEach(function (filter) { if (filter) filter.addEventListener('input', paint); });
        paint();
    }
}());
