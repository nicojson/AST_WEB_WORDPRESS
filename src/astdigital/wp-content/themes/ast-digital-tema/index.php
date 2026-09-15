<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mi Tema</title>
    <?php wp_head(); ?> <!-- Gancho esencial de WordPress -->
</head>
<body>
    <h1>Bienvenido a mi tema personalizado</h1>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            echo '<h2>' . get_the_title() . '</h2>';
            the_content();
        endwhile;
    endif;
    ?>
    <?php wp_footer(); ?> <!-- Gancho esencial de WordPress -->
</body>
</html>