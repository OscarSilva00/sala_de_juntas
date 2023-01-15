<?php
date_default_timezone_set("America/Mexico_City");
$horaActual = date("H:i");

$horaMax = 120;
$sumaHora = strtotime ( '+'.$horaMax.' minute' , strtotime ( $horaActual ) ) ;
$sumaHora = date ( 'H:i', $sumaHora );
$HoraFinal = $sumaHora;

$horaI = strtotime($horaActual);
$HoraF = strtotime($HoraFinal);
$diferencia = ($HoraF - $horaI) / 60;
echo $diferencia;

?>