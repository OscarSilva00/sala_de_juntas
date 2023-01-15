<?php
    include "conexion.php";
    $con = new conexion();
    $conexion1 = $con->conectar();
    
    $record_per_page = 5;
    $page = '';
    if(isset($_GET["page"]))
    {
     $page = $_GET["page"];
    }
    else
    {
     $page = 1;
    }
    
    $start_from = ($page-1)*$record_per_page;    
    $sql = "SELECT * FROM salas ORDER BY id DESC LIMIT $start_from, $record_per_page" ;
    $respuesta = mysqli_query($conexion1, $sql);
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/usuarios.js"></script>
</head>


<div class="table-responsive-sm">
<table class="table table-striped table-sm" style="margin: auto; width: fit-content;">

    <thead class="thead-dark" style="text-align: center;">    
        <th scope="col">Sala</th>
        <th scope="col">Capacidad</th>                        
        <th scope="col">Opciones</th>
            
    </thead>

    <tbody>
        
        <?php
            while($mostrar = mysqli_fetch_array($respuesta)){
        ?>

        <tr>
            
            <th scope="row"><?php echo $mostrar['NombreSala']; ?></th>
            <td><?php echo $mostrar['Capacidad']; ?></td>                     
            
            <td>              
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
    <div>
    
</div>
</table>
<div style="text-align: center;">

</div>
      </div>
</html>