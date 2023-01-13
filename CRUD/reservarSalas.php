<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

date_default_timezone_set("America/Mexico_City");
$horaActual = date("H:i");

$id = $_POST['id'];
$Estado = 'Reservado';
$HoraReserva = $horaActual;
$Solicita = $_POST['Solicita'];
$HoraInicio = $_POST['HoraInicio'];
$HoraFinal = $_POST['HoraFinal'];

$sql = "INSERT INTO reservas(idSala, Solicita, HoraInicio,HoraFinal, HoraReserva,Estado) 
VALUES ($id,'$Solicita', '$HoraInicio', '$HoraFinal','$HoraReserva','$Estado')";
$respuesta = mysqli_query($conexion1, $sql);

if($respuesta){
    Header("Location: ../reservas.php");
}else{
    Header("Location: ../header.php");
}
    ?>