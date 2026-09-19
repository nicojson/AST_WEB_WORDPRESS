<?php
iinclude __DIR__ . '/config.php';
class Sistema {
    // Clase para representar el sistema
    function __construct() {
        // Constructor de la clase Sistema
        //DSN
       $this -> db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
}
?>