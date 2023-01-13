<!-- Modal -->
<form action="CRUD/updateSalas.php" method="POST">
<div class="modal fade" id="modalEditarSala<?php echo $mostrar['id']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true" data-toggle="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Sala</h1>                
            </div>                            
                <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                    <div class="mb-3 row">
                        <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Nombre de la Sala</label>
                        <div class="col-sm-5">
                        <input type="text" class="form-control" name="NombreSala" value="<?php echo $mostrar['NombreSala']; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-5 col-form-label">Capacidad</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="Capacidad" value="<?php echo $mostrar['Capacidad']; ?>" required>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">                                  
                <button type="submit" class="btn btn-primary">Editar</button>
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
    
    