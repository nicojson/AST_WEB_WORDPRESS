<?php get_header(); ?>

<main>
    <section id="inicio" class="home-hero py-5">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <span class="home-kicker">Seguridad sin demoras</span>
                    <h1 class="display-3 fw-bold mt-3 mb-4">AST digital</h1>
                    <p class="lead text-secondary mb-4">Analiza cada tarea, identifica los riesgos y protege a tu equipo desde un solo lugar.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#contacto" class="btn btn-primary btn-lg px-4">Crear un AST</a>
                        <a href="#servicios" class="btn btn-outline-dark btn-lg px-4">Conocer más</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div id="homeCarousel" class="carousel slide home-carousel shadow-lg" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Imagen 1"></button>
                            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Imagen 2"></button>
                            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Imagen 3"></button>
                        </div>
                        <div class="carousel-inner rounded-4">
                            <?php foreach ( array( 'industria_seguridad_higiene.jpg' => 'Seguridad e higiene industrial', 'industria_seguridad_higiene_2.jpg' => 'Equipo de seguridad industrial', 'industria_seguridad_higiene_3.jpg' => 'Trabajo seguro en la industria' ) as $image => $alt ) : ?>
                                <div class="carousel-item <?php echo 'industria_seguridad_higiene.jpg' === $image ? 'active' : ''; ?>">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/imagenes/' . $image ); ?>" class="d-block w-100" alt="<?php echo esc_attr( $alt ); ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Anterior</span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Siguiente</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="py-5 bg-white">
        <div class="container py-lg-4">
            <div class="row align-items-end mb-4">
                <div class="col-lg-7"><span class="home-kicker">Todo en un mismo lugar</span><h2 class="display-6 fw-bold mt-2 mb-0">Herramientas para trabajar seguro</h2></div>
                <div class="col-lg-5"><p class="text-secondary mb-0 mt-3 mt-lg-0">Simplifica la gestión preventiva y convierte cada análisis en una decisión clara.</p></div>
            </div>
            <div class="row g-4">
                <div class="col-md-4"><article class="service-item h-100 p-4"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/add.svg' ); ?>" alt="" class="service-icon mb-4"><h3 class="h5 fw-bold">Crea análisis</h3><p class="text-secondary mb-0">Registra actividades, peligros y controles paso a paso.</p></article></div>
                <div class="col-md-4"><article class="service-item h-100 p-4"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/schedule.svg' ); ?>" alt="" class="service-icon mb-4"><h3 class="h5 fw-bold">Consulta historial</h3><p class="text-secondary mb-0">Encuentra tus AST y da seguimiento a cada proceso.</p></article></div>
                <div class="col-md-4"><article class="service-item h-100 p-4"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/icon/chart.svg' ); ?>" alt="" class="service-icon mb-4"><h3 class="h5 fw-bold">Mide resultados</h3><p class="text-secondary mb-0">Obtén reportes para fortalecer la prevención.</p></article></div>
            </div>
        </div>
    </section>

    <section id="nosotros" class="home-promise py-5">
        <div class="container py-lg-4"><div class="row align-items-center g-4"><div class="col-lg-7"><span class="home-kicker">Nuestra promesa</span><h2 class="display-6 fw-bold mt-2">La prevención comienza antes de la tarea.</h2></div><div class="col-lg-5"><p class="lead text-secondary mb-0">AST digital conecta a las personas con la información que necesitan para volver a casa seguras.</p></div></div></div>
    </section>
</main>

<?php get_footer(); ?>