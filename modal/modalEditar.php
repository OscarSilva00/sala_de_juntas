<!-- Modal -->
<div class="modal fade" id="modalEditarSala<?php echo $mostrar['id']; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Sala</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="updateSalas.php">
                <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                <div class="modal-body">

                    <div class="mb-3 row">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">nombre</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name= "nombre" value="<?php echo $mostrar['name']; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">correo</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name= "email" value="<?php echo $mostrar['email']; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name= "password" value="<?php echo $mostrar['password']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

</div>
</form>
</div>
</div>