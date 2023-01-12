<form action="CRUD/createSalas.php" method="POST">
    <div class="mb-3 row">
        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">NombreSala</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="NombreSala" placeholder="hola">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Capacidad</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="Capacidad">
        </div>
    </div>
    <input type="submit" class="form-control" value="Agregar">
    </form>
