<?php
    include "conexion.php";
    $con = new conexion();
    $conexion1 = $con->conectar();
    $sql = "SELECT * FROM salas";
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
        <th>Sala</th>
        <th>Capacidad<th>                        
        <th>Opciones<th>
    
    </thead>

    <tbody>
        
        <?php
            while($mostrar = mysqli_fetch_array($respuesta)){
        ?>

        <tr>
            
            <td><?php echo $mostrar['NombreSala']; ?></td>
            <td><?php echo $mostrar['Capacidad']; ?></td>         
            
            
            <td>
              <div class="mb-3 row">
              <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditarSala<?php echo $mostrar['id']; ?>"
            <?php echo $mostrar['id']; ?>>
          Editar
        </button>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalEliminarSala<?php echo $mostrar['id']; ?>"
        <?php echo $mostrar['id']; ?> > 
          Borrar
        </button>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalReservarSala<?php echo $mostrar['id']; ?>"
        <?php echo $mostrar['id']; ?> > 
          Reservar
        </button>        
        </div>
      </td>
        
        </tr>
        <?php
        include "modal/modalEditar.php";
        ?>
        <?php
        include "modal/modalEliminar.php";
        ?>
        <?php
        include "modal/modalReservar.php";
        ?>
        
    
        <?php
        }
        ?>
        
    </tbody>

</table>
</html>