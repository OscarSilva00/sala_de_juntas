<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

$id = null;
$name = $_POST['namee'];
$textt = $_POST['textt'];

$sql = "INSERT INTO comment(namee, textt) VALUES ('$name', '$textt')";
$respuesta = mysqli_query($conexion1, $sql);

if($respuesta){
    Header("Location: ../Salas.php");
}else{
    Header("Location: ../Salas.php");
}

?>