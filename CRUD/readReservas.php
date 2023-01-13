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
    $sql = "SELECT * FROM reservas ORDER BY idR DESC LIMIT $start_from, $record_per_page";
    $respuesta = mysqli_query($conexion1, $sql);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script src="js/usuarios.js"></script>
</head>


<div class="table-responsive-sm">
<table class="table table-striped table-sm" style="margin: auto; width: fit-content;">

    <thead class="thead-dark" style="text-align: center;">    
        <th scope="col">Reserva</th>
        <th scope="col">Sala</th>                        
        <th scope="col">Solicitante</th>
        <th scope="col">Hora Inicio</th>
        <th scope="col">Hora Final</th>                                
        <th scope="col">Estado</th>
        <th scope="col">Opciones</th>

    
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
<div style="text-align: center;">
<?php
    $page_query = "SELECT * FROM reservas ORDER BY idR";
    $page_result = mysqli_query($conexion1, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);    

    for($i=1; $i<=$total_pages; $i++)
    {    
     echo "<a href='reservas.php?page=".$i."'> <button >".$i."</button> </a>";
     
    }
    
    
    ?>
</div>

</html>