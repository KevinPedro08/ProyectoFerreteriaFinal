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
                {{ $producto->nombre }} |
            </a>

            <a href="{{route('producto.edit', $producto->id)}}">
                Editar
            </a>
            |
            <form action=" {{ route('producto.destroy', $producto) }} " method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Borrar">
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>