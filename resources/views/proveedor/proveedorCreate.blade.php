<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores: Crear</title>
</head>
<body>
    <h1>Agregar proveedor</h1>
    <form action="{{route('proveedor.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" required>
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset>
            <label for="correo">Correo: </label>
            <input type="email" name="correo" required>
            @error('correo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset>
            <label for="telefono">Telefono: </label>
            <input type="text" name="telefono" required>
            @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset>
        <label for="">Tipo de Proveedor:</label>
            <select name="tipo">
                <option value="Empresa">Empresa</option>
                <option value="Persona">Persona</option>
                <option value="Distribuidora">Distribuidora</option>
            </select>
        </fieldset>
        <input type="submit">
    </form>
</body>
</html>