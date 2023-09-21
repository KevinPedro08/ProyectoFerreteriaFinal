<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Index</title>
</head>
<body>
    <h1>Listado de Productos</h1>
    <ul>
        @foreach($productos as $producto)
        <li>
            <a href="{{route('producto.show', $producto->id)}}">
            {{ $producto->nombre }}
            </a>
        </li>
        @endforeach
    </ul>
</body>
</html>