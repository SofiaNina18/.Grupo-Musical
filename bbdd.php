<?php
    function conectarBBDD() {
        $mysqli = new mysqli("localhost", "", "", "grupomusical");
        if ($mysqli->connect_error) {
            echo "Fallo al conectar: ". $mysqli->connect_error;
        }
        return $mysqli;
    }
    function get_categorias(){
        $mysqli = conectarBBDD();
        $categorias = $mysqli->query("SELECT * FROM categorias");
        if (!$categorias) {
            echo "Fallo en la preparacion de la sentencia: ". $mysqli->errno;
        }
        return $categorias;
    }