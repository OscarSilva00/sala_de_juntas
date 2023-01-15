<div style="width: fit-content;">
<form action="CRUD/createSalas.php" method="POST">
    <div class="mb-3 row">
        <label for="exampleFormControlInput1" class="col-sm-5 col-form-label">NombreSala</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="NombreSala" placeholder="hola" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="exampleFormControlInput1" class="col-sm-5 col-form-label">Capacidad</label>
        <div class="col-sm-4">
            <input type="number" class="form-control" name="Capacidad" required>
        </div>
    </div>
    <div style="width: 450px;">
    <input type="submit" class="form-control " value="Agregar">
    </div>
    </form>

</div>
