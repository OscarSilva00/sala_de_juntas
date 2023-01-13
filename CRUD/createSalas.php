<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

$id = null;
$nombre = $_POST['NombreSala'];
$capacidad = $_POST['Capacidad'];

                

$sql = "INSERT INTO salas(NombreSala, Capacidad) VALUES ('$nombre', '$capacidad')";
$respuesta = mysqli_query($conexion1, $sql);

if($respuesta){
    Header("Location: ../Salas.php");
}else{
    Header("Location: ../Salas.php");
}

?>
