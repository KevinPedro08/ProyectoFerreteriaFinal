<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="{{ route('producto.update', $producto) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="nombre">Ingresa el nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required><br><br>

        <label for="cantidad">Ingresa la cantidad:</label>
        <input type="text" name="cantidad" id="cantidad" value="{{ $producto->cantidad }}" required><br><br>

        <label for="precio">Ingresa el precio:</label>
        <input type="text" name="precio" id="precio" value="{{ $producto->precio }}" required><br><br>

        <label for="marca">Ingresa la marca:</label>
        <input type="text" name="marca" id="marca" value="{{ $producto->marca }}" required><br><br>
        
        <label for="descripcion">Ingresa una descripcion:</label><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" required>{{ $producto->descripcion }}</textarea><br><br>
        <input type="submit"> 
    </form>
</body>
</html>