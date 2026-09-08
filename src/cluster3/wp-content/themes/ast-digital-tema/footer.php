<footer id="contacto" class="home-footer text-white py-5">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-4">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/imagenes/logo.png' ); ?>" alt="AST digital" class="footer-logo mb-3">
                <p class="mb-0 text-white-50">Seguridad sin demoras.</p>
            </div>
            <div class="col-lg-8">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => 'nav',
                    'container_class'=> 'footer-navigation',
                    'menu_class'     => 'footer-menu list-unstyled d-flex flex-wrap gap-3 mb-0',
                    'fallback_cb'    => false,
                ) );
                ?>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="small text-white-50">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> AST digital. Todos los derechos reservados.</div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>