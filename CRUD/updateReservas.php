<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

date_default_timezone_set("America/Mexico_City");
$horaActual = date("H:i");

$idR = $_POST['idR'];
$Fecha = $_POST['Fecha'];
$HoraReserva = $horaActual;
$Solicita = $_POST['Solicita'];
$HoraInicio = $_POST['HoraInicio'];
//variable obtener minutos
$horaMax = $_POST['horaMax'];
$sumaHora = strtotime ( '+'.$horaMax.' minute' , strtotime ( $HoraInicio ) ) ;
$sumaHora = date ( 'H:i', $sumaHora );
$HoraFinal = $sumaHora;

$sql = ("UPDATE reservas SET
Solicita='$Solicita', 
HoraInicio='$HoraInicio',
HoraFinal='$HoraFinal',
Fecha='$Fecha'
WHERE idR = $idR");


$respuesta = mysqli_query($conexion1, $sql);

if($respuesta){
    Header("Location: ../reservas.php");
}else{
    Header("Location: ../header.php");
}
    ?>