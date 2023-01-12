<?php

    class conexion
    {
        public function conectar() 
        {
            $servidor = "localhost:3307";
            $usuario = "root";
            $password = "";
            $port = 3307;
            $db = "saladejuntas";
            $conexion = mysqli_connect($servidor,$usuario,$password,$db,$port);
            

            return $conexion;
        }
    }
?>