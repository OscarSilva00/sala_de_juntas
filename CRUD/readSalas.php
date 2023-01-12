<?php
    include "conexion.php";
    $con = new conexion();
    $conexion1 = $con->conectar();
    $sql = "SELECT 
                id,
                name,
                email,
                password
            FROM
                users";
    $respuesta = mysqli_query($conexion1, $sql);
?>

<table class="table table-sm dt-responsive nowrap" id="tablaUsuariosDataTable" style="width:100%">

    <thead>

        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>Opciones<th>
    
    </thead>

    <tbody>
        
        <?php
            while($mostrar = mysqli_fetch_array($respuesta)){
        ?>

        <tr>

            <td><?php echo $mostrar['id']; ?></td>
            <td><?php echo $mostrar['name']; ?></td>
            <td><?php echo $mostrar['email']; ?></td>
            <td><?php echo $mostrar['password']; ?></td>            
            <td><button class="btn btn-primary" data-toggle="modal" data-target="#modalEditarSala<?php echo $mostrar['id']; ?>"
            <?php echo $mostrar['id']; ?>>
          Editar
        </button>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalEliminarSala<?php echo $mostrar['id']; ?>"
        <?php echo $mostrar['id']; ?> > 
          Borrar
        </button></td>
        
        </tr>
        <?php
        include "modal/modalEditar.php";
        ?>
        <?php
        include "modal/modalEliminar.php";
        ?>
    
        <?php
        }
        ?>
        

    </tbody>

</table>