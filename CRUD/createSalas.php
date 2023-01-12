<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

$id = null;
$nombre = $_POST['NombreSala'];
$hi = null;
$hf = null;
$estado = 'Libre';
$hr = null;
$solicita = null;
$capacidad = $_POST['Capacidad'];


$sql = "INSERT INTO salas(NombreSala, Capacidad, Estado) VALUES ('$nombre', '$capacidad', '$estado')";
$respuesta = mysqli_query($conexion1, $sql);

if($respuesta){
    Header("Location: ../Salas.php");
}else{
    Header("Location: ../Salas.php");
}

?>
