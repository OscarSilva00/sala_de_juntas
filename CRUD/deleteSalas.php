<?php

include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

$id = $_POST['id'];

$sql = ("DELETE FROM salas WHERE id= $id");

$respuesta = mysqli_query($conexion1, $sql);


if($respuesta){
    Header("Location: ../Salas.php");
}else{
    Header("Location: ../Salas.php");
}

?>