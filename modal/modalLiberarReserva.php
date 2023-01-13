<!-- Modal -->
<form action="CRUD/deleteReservas.php" method="POST">
<div class="modal fade" id="modalLiberarReserva<?php echo $mostrar['idR']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"> Reserva</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <input type="hidden" name="idR" value="<?php echo $mostrar['idR']; ?>">
            <h3 class="modal-title fs-5" id="exampleModalLabel">Liberar Reserva de <?php echo $mostrar['Solicita']; ?> ?</h3>            
            </div>
            <div class="modal-footer">                
                <button type="submit" class="btn btn-primary">Liberar</button>
            </div>

        </div>
    </div>
</div>

</div>

</div>
</form>
</div>
</div>
</form>