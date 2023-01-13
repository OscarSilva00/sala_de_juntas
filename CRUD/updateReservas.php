<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

date_default_timezone_set("America/Mexico_City");
$horaActual = date("H:i");

$idR = $_POST['idR'];
$Estado = 'Reservado';
$HoraReserva = $horaActual;
$Solicita = $_POST['Solicita'];
$HoraInicio = $_POST['HoraInicio'];
$HoraFinal = $_POST['HoraFinal'];

$sql = ("UPDATE reservas SET
Solicita='$Solicita', 
HoraInicio='$HoraInicio',
HoraFinal='$HoraFinal',
Estado='$Estado'
WHERE idR = $idR");


$respuesta = mysqli_query($conexion1, $sql);

if($respuesta){
    Header("Location: ../reservas.php");
}else{
    Header("Location: ../header.php");
}
    ?>