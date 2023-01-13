<?php
    include "conexion.php";
    $con = new conexion();
    $conexion1 = $con->conectar();
    $sql = "SELECT * FROM reservas";
    $respuesta = mysqli_query($conexion1, $sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/usuarios.js"></script>
</head>


<table class="table table-sm dt-responsive nowrap" id="tablaUsuariosDataTable" style="width:100%">

    <thead>    
        <th>Reserva</th>
        <th>Sala<th>                        
        <th>Solicitante<th>
        <th>Hora Inicio</th>
        <th>Hora Final<th>                        
        <th>Hora Reserva<th>
        <th>Estado<th>
        <th>Opciones<th>

    
    </thead>

    <tbody>
        
        <?php
            while($mostrar = mysqli_fetch_array($respuesta)){
        ?>

        <tr>           
            <td><?php echo $mostrar['idR']; ?></td>
            <td><?php echo $mostrar['idSala']; ?></td>         
            <td><?php echo $mostrar['Solicita']; ?></td>         
            <td><?php echo $mostrar['HoraInicio']; ?></td>         
            <td><?php echo $mostrar['HoraFinal']; ?></td>         
            <td><?php echo $mostrar['HoraReserva']; ?></td>         
            <td><?php echo $mostrar['Estado']; ?></td>                    
            
            <td>                      
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditarReserva<?php echo $mostrar['idR']; ?>"
        <?php echo $mostrar['idR']; ?> > 
          Editar
        </button>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalLiberarReserva<?php echo $mostrar['idR']; ?>"
        <?php echo $mostrar['idR']; ?> > 
          Liberar
        </button>
        
      </td>
        
        </tr>
                
        <?php
        include "modal/modalEditarReserva.php";
        ?>
        <?php
        include "modal/modalLiberarReserva.php";
        ?>
        
    
        <?php
        }
        ?>
        
    </tbody>

</table>
</html>