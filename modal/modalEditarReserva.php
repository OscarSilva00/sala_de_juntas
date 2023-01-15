<?php
$horaI = strtotime($mostrar['HoraInicio']);
$HoraF = strtotime($mostrar['HoraFinal']);
$diferencia = ($HoraF - $horaI) / 60;
?>

<form action="CRUD/updateReservas.php" method="POST">

    <div class="modal fade" id="modalEditarReserva<?php echo $mostrar['idR']; ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true" data-toggle="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Reserva de <?php echo $mostrar['Solicita']; ?>"</h1>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="idR" value="<?php echo $mostrar['idR']; ?>">
                    <div class="mb-3 row">
                        <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Quien solicita</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="Solicita"
                                value="<?php echo $mostrar['Solicita']; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Día a reservar</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" name="Fecha"
                                value="<?php echo $mostrar['Fecha']; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Horario de
                            Inicio</label>
                        <div class="col-sm-5">
                            <input type="time" class="form-control" name="HoraInicio"
                                value="<?php echo $mostrar['HoraInicio']; ?>" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Ingresa tiempo a
                            reservar en minutos</label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" name="horaMax" value="<?php echo $diferencia ?>" max="120" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Reservar</button>
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