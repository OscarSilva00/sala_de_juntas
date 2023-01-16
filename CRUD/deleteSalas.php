<?php

include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

//eliminar salas
$id = $_POST['id'];
$sql = ("DELETE FROM salas WHERE id= $id");

//eliminar reservas de la sala eliminada
$sql2 = ("DELETE FROM reservas WHERE idSala= $id");

$respuesta = mysqli_query($conexion1, $sql);
$respuesta2 = mysqli_query($conexion1, $sql2);


if($respuesta){
    Header("Location: ../Salas.php");
}else{
    Header("Location: ../Salas.php");
}

?>