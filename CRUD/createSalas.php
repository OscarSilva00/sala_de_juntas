<?php
    include "conexion.php";

    $con = new conexion();
    $conexion1 = $con->conectar();
    $sql = "INSERT INTO users(
                name,
                email,
                password)
                VALUES (?,?,?,?,?,?,?,?)";

$query = $conexion1->prepare($sql);
$query->bind_param("ssssss",  $datos['name'],
                                 $datos['email'],
                                 $datos['password']);
$respuesta = $query->execute();
$query->close();
$respuesta = mysqli_query($conexion1, $sql) or die(mysqli_error($conexion1));

?>