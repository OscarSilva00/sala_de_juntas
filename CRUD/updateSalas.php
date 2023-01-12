<?php
include "conexion.php";
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


$sql = ("UPDATE users SET 
                name='" . $nombre . "',
                email='" . $email . "',
                password='" . $password . "' 
                WHERE id='" . $id . "' ");

$respuesta = mysqli_query($conexion, $sql);

echo"<script type='text/javascript'>window.location='Salas.php';</script>"

    ?>