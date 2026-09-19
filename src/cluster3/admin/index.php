<?php
    require_once __DIR__ . '/models/producto/producto.class.php';
    $producto = new Producto();
    echo $producto->getAll();

    include_once __DIR__ . '/templates/admin/producto/index.html';
?>