<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

$id = $_POST['id'];;
$nombre = $_POST['NombreSala'];
$capacidad = $_POST['Capacidad'];


$sql = ("UPDATE salas SET NombreSala = '$nombre',                
                Capacidad = $capacidad                
                WHERE id = $id");

$respuesta = mysqli_query($conexion1, $sql);

if($respuesta){
    Header("Location: ../Salas.php");
}else{
    Header("Location: ../Salas.php");
}
    ?>