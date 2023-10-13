<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores: Indice</title>
</head>
<body>
    <h1>Indice de Proveedores</h1>
    <ul>
        @foreach($proveedores as $proveedor)
            <li>
                <a href="{{route('proveedor.show', $proveedor->id)}}">
                    {{ $proveedor->nombre }}
                </a>
                <a href="{{route('proveedor.edit', $proveedor->id)}}"> | Editar | </a>
                <form action="{{route('proveedor.destroy', $proveedor)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="" id="" value="Borrar">
                </form>
            </li>
        @endforeach
        
    </ul>
</body>
</html>