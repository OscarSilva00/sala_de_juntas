<!-- Modal -->
<form action="CRUD/deleteSalas.php" method="POST">
    <div class="modal fade" id="modalEliminarSala<?php echo $mostrar['id']; ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true" data-toggle="modal">>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Borrar Sala</h1>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">Eliminar a <?php echo $mostrar['NombreSala']; ?>
                        ?</h3>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Borrar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>


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