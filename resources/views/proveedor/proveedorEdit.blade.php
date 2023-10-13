<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores: Editar</title>
</head>
<body>
    <h1>Editar proveedor: {{$proveedor->nombre}}</h1>
    <form action="{{route('proveedor.update', $proveedor)}}" method="post">
        @csrf
        @method('PATCH')
        <fieldset>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" value="{{$proveedor->nombre}}" required>
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset>
            <label for="correo">Correo: </label>
            <input type="email" name="correo" value="{{$proveedor->correo}}" required>
            @error('correo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset>
            <label for="telefono">Telefono: </label>
            <input type="text" name="telefono" value="{{$proveedor->telefono}}" required>
            @error('telefono')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </fieldset>
        <fieldset>
        <label for="">Tipo de Proveedor:</label>
            <select name="tipo">
                <option value="Empresa" @selected($proveedor->tipo=='Empresa')>Empresa</option>
                <option value="Persona" @selected($proveedor->tipo=='Persona')>Persona</option>
                <option value="Distribuidora" @selected($proveedor->tipo=='Distribuidora')>Distribuidora</option>
            </select>
        </fieldset>
        <input type="submit">
    </form>
</body>
</html>