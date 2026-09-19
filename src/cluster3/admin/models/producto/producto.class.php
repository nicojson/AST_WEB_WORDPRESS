<?php 
require_once __DIR__ . '/sistema.class.php';
class Producto extends Sistema {
    // Clase para representar un producto
    function __create($data) {
        // Constructor de la clase Producto
        function getOne($id){
            // logica para obtener un producto de la base de datos

        }

        function getAll(){
            // logica para obtener todos los productos de la base de datos
            return "hola mundo";
        }

        function update($id, $data){
            // logica para actualizar un producto en la base de datos

        }

        function delete($id){
            // logica para eliminar un producto de la base de datos

        }

    }
}

?>