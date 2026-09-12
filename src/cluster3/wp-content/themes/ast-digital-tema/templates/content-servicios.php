<?php
/**
 * Plantilla para la página de servicios.
 */
?>
<main class="page-shell">
    <section class="page-hero page-hero--light">
        <div class="container py-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <span class="home-kicker">Servicios</span>
                    <h1 class="display-4 fw-bold mt-3 mb-3">Soluciones para operar con seguridad y claridad</h1>
                    <p class="lead text-secondary mb-0">Diseñamos procesos para que cada tarea, riesgo y control esté documentado, visible y accionable.</p>
                </div>
                <div class="col-lg-5">
                    <div class="page-panel page-panel--accent">
                        <p class="mb-2 small text-uppercase fw-bold text-white-50">Cobertura</p>
                        <h2 class="h4 text-white mb-3">AST, riesgos y prevención</h2>
                        <p class="mb-0 text-white-50">Analizamos cada actividad para reducir incidentes, fortalecer la cultura preventiva y apoyar decisiones con evidencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="text-center mb-5">
            <span class="home-kicker">Qué ofrecemos</span>
            <h2 class="display-6 fw-bold mt-3 mb-0">Servicios diseñados para fortalecer la seguridad en cada operación</h2>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-xl-4">
                <article class="service-card h-100">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/security.svg' ); ?>" alt="Seguridad" />
                    </div>
                    <span class="service-card__tag">Seguridad</span>
                    <h3 class="h4 fw-bold mt-3">Análisis de riesgos</h3>
                    <p class="text-secondary mb-0">Evaluamos actividades, peligros y controles para reducir incidentes y fortalecer la prevención dentro de la operación.</p>
                </article>
            </div>

            <div class="col-md-6 col-xl-4">
                <article class="service-card h-100">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/assignment.svg' ); ?>" alt="AST" />
                    </div>
                    <span class="service-card__tag">Gestión</span>
                    <h3 class="h4 fw-bold mt-3">Elaboración de AST</h3>
                    <p class="text-secondary mb-0">Creamos y administramos Análisis de Seguridad del Trabajo para documentar tareas, riesgos y medidas correctivas.</p>
                </article>
            </div>

            <div class="col-md-6 col-xl-4">
                <article class="service-card h-100">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/chart_data.svg' ); ?>" alt="Indicadores" />
                    </div>
                    <span class="service-card__tag">Monitoreo</span>
                    <h3 class="h4 fw-bold mt-3">Indicadores y reportes</h3>
                    <p class="text-secondary mb-0">Generamos reportes claros para medir avances, detectar oportunidades y apoyar la toma de decisiones.</p>
                </article>
            </div>

            <div class="col-md-6 col-xl-4">
                <article class="service-card h-100">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/person_apron.svg' ); ?>" alt="Capacitación" />
                    </div>
                    <span class="service-card__tag">Capacitación</span>
                    <h3 class="h4 fw-bold mt-3">Capacitación preventiva</h3>
                    <p class="text-secondary mb-0">Acompañamos a tus equipos para que la seguridad se entienda, se aplique y se fortalezca de forma constante.</p>
                </article>
            </div>

            <div class="col-md-6 col-xl-4">
                <article class="service-card h-100">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/check_circle.svg' ); ?>" alt="Control" />
                    </div>
                    <span class="service-card__tag">Control</span>
                    <h3 class="h4 fw-bold mt-3">Seguimiento de controles</h3>
                    <p class="text-secondary mb-0">Verificamos que las medidas preventivas se ejecuten, se actualicen y se mantengan vigentes con el tiempo.</p>
                </article>
            </div>

            <div class="col-md-6 col-xl-4">
                <article class="service-card h-100">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/description.svg' ); ?>" alt="Documentación" />
                    </div>
                    <span class="service-card__tag">Documentación</span>
                    <h3 class="h4 fw-bold mt-3">Control documental</h3>
                    <p class="text-secondary mb-0">Centralizamos la información clave para evitar duplicidad, mejorar trazabilidad y mantener registros seguros.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="page-cta">
        <div class="container">
            <div class="cta-panel">
                <div>
                    <span class="home-kicker">¿Listo para comenzar?</span>
                    <h2 class="mt-2 mb-2">Convierte la seguridad en un proceso ordenado</h2>
                </div>
                <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="btn btn-primary btn-lg px-4">Solicitar información</a>
            </div>
        </div>
    </section>
</main>
