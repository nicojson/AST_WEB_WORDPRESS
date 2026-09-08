<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'home-shell' ); ?>>
<?php wp_body_open(); ?>
<header class="home-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark container py-3" aria-label="Navegación principal">
        <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <a class="navbar-brand d-flex align-items-center gap-2" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/imagenes/logo_2.png' ); ?>" alt="AST digital" class="home-logo-icon">
                <span class="fw-bold lh-1">AST<br><small>digital</small></span>
            </a>
        <?php endif; ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homeNav" aria-controls="homeNav" aria-expanded="false" aria-label="Abrir navegación">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="homeNav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'navbar-nav ms-auto align-items-lg-center gap-lg-4',
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
    </nav>
</header>