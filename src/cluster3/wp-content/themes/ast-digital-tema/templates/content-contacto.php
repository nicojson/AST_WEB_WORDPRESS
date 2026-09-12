<?php
/**
 * Plantilla para la página de contacto.
 */
?>
<main class="page-shell">
    <section class="page-hero page-hero--light">
        <div class="container py-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="home-kicker">Contacto</span>
                    <h1 class="display-4 fw-bold mt-3 mb-3">Hablemos sobre la seguridad de tu operación</h1>
                    <p class="lead text-secondary mb-0">Queremos entender tus necesidades, tu contexto y la forma en que puedes mejorar la gestión preventiva de tu equipo.</p>
                </div>
                <div class="col-lg-6">
                    <div class="page-panel page-panel--accent">
                        <h2 class="h4 text-white mb-3">Información de contacto</h2>
                        <ul class="page-list text-white-80 mb-0">
                            <li><strong>Email:</strong> contacto@astdigital.com</li>
                            <li><strong>Teléfono:</strong> +52 (55) 1234 5678</li>
                            <li><strong>Horario:</strong> Lunes a viernes, 9:00 a 18:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row g-4 align-items-start">
            <div class="col-lg-7">
                <div class="page-form-box">
                    <h2 class="h3 fw-bold mb-4">Envíanos un mensaje</h2>
                    <form action="#" method="post" class="row g-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Tu nombre" />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="tu@email.com" />
                        </div>
                        <div class="col-md-6">
                            <label for="empresa" class="form-label">Empresa</label>
                            <input id="empresa" name="empresa" type="text" class="form-control" placeholder="Nombre de la empresa" />
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input id="telefono" name="telefono" type="tel" class="form-control" placeholder="(55) 0000 0000" />
                        </div>
                        <div class="col-12">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" class="form-control" rows="5" placeholder="Cuéntanos cómo podemos ayudarte"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-4">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="page-form-box page-form-box--muted">
                    <h3 class="h4 fw-bold mb-3">¿Por qué contactarnos?</h3>
                    <ul class="page-list mb-0">
                        <li>Necesitas mejorar tu proceso de análisis de riesgos.</li>
                        <li>Quieres centralizar la seguridad y documentación operativa.</li>
                        <li>Buscas acompañamiento para modernizar tu gestión preventiva.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
