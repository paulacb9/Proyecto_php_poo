<h1>Crear nueva categoria</h1>

<form action="<?=base_url?>categoria/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="nombre" name="nombre" required/>

    <input type="submit" value="Guardar" />
</form>