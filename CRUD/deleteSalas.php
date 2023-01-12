<?php

include "conexion.php";
$id = $_REQUEST['id'];

$sql = ("DELETE FROM users WHERE id='" . $id . "' ");

$respuesta = mysqli_query($conexion, $sql);

echo"<script type='text/javascript'>window.location='Salas.php';</script>"

?>