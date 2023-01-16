<?php
include "../conexion.php";
$con = new conexion();
$conexion1 = $con->conectar();

//obtener hora actual
date_default_timezone_set("America/Mexico_City");
$horaActual = date("H:i");


$id = $_POST['id'];
$Fecha = $_POST['Fecha'];
$HoraReserva = $horaActual;
$Solicita = $_POST['Solicita'];
$HoraInicio = $_POST['HoraInicio'];
//variable obtener minutos
$horaMax = $_POST['horaMax'];
$sumaHora = strtotime('+' . $horaMax . ' minute', strtotime($HoraInicio));
$sumaHora = date('H:i', $sumaHora);
$HoraFinal = $sumaHora;

$sql = "SELECT * FROM reservas WHERE idSala= $id
AND ('$HoraInicio'>=HoraInicio AND '$HoraInicio'<= HoraFinal 
OR '$HoraFinal'>=HoraInicio AND '$HoraFinal'<= HoraFinal)";
$respuesta = mysqli_query($conexion1, $sql);

$total_records = mysqli_num_rows($respuesta);

if ($total_records!=0) {
    echo '<script type="text/javascript">';
    echo 'alert ("Ingresa fecha y hora disponibles, verifica las reservas actuales");';
    echo 'window.location = "../reservas.php";';
    echo '</script>';
} else {
    $sql2 = "INSERT INTO reservas(idSala, Solicita, HoraInicio,HoraFinal, HoraReserva,Fecha) 
VALUES ($id,'$Solicita', '$HoraInicio', '$HoraFinal','$HoraReserva','$Fecha')";
    $respuesta2 = mysqli_query($conexion1, $sql2);

    if ($respuesta2) {
        Header("Location: ../reservas.php");
    } else {
        echo "<script>alert ('ingresa otro horario')</script>";
        Header("Location: ../header.php");
    }
}



?>