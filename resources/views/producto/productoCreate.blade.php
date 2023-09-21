<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Agregar Producto</h1>
    <form action="{{ route('producto.store')}}" method="post">
        @csrf
        <label for="nombre">Ingresa el nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="cantidad">Ingresa la cantidad:</label>
        <input type="text" name="cantidad" id="cantidad" required><br><br>
        <label for="precio">Ingresa el precio:</label>
        <input type="text" name="precio" id="precio" required><br><br>
        <label for="marca">Ingresa la marca:</label>
        <input type="text" name="marca" id="marca" required><br><br>
        <label for="descripcion">Ingresa una descripcion:</label><br>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea><br><br>
        <input type="submit">
    </form>
</body>
</html>