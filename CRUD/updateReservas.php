<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

//obtener hora actual
date_default_timezone_set("America/Mexico_City");
$horaActual = date("H:i");


$idR = $_POST['idR'];
$idSala = $_POST['idSala'];
$Fecha = $_POST['Fecha'];
$HoraReserva = $horaActual;
$Solicita = $_POST['Solicita'];
$HoraInicio = $_POST['HoraInicio'];
//variable obtener minutos
$horaMax = $_POST['horaMax'];
$sumaHora = strtotime('+' . $horaMax . ' minute', strtotime($HoraInicio));
$sumaHora = date('H:i', $sumaHora);
$HoraFinal = $sumaHora;

$sql = "SELECT * FROM reservas WHERE idSala= $idSala
AND ('$HoraInicio'>=HoraInicio AND '$HoraInicio'<= HoraFinal 
OR '$HoraFinal'>=HoraInicio AND '$HoraFinal'<= HoraFinal)";
$respuesta = mysqli_query($conexion1, $sql);


$total_records = mysqli_num_rows($respuesta);

if ($total_records != 0) {
    echo '<script type="text/javascript">';
    echo 'alert ("Ingresa fecha y hora disponibles, verifica las reservas actuales");';
    echo 'window.location = "../reservas.php";';
    echo '</script>';
} else {
    $sql2 = ("UPDATE reservas SET
Solicita='$Solicita', 
HoraInicio='$HoraInicio',
HoraFinal='$HoraFinal',
Fecha='$Fecha'
WHERE idR = $idR");

    $respuesta = mysqli_query($conexion1, $sql2);

    if ($respuesta) {
        Header("Location: ../reservas.php");
    } else {
        Header("Location: ../header.php");
    }
}


?>