<?php

include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

$idR = $_POST['idR'];

$sql = ("DELETE FROM reservas WHERE idR= $idR");

$respuesta = mysqli_query($conexion1, $sql);


if($respuesta){
    Header("Location: ../Reservas.php");
}else{
    Header("Location: ../Salas.php");
}

?>