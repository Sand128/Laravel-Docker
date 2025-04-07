<!-- resources/views/personal/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personal</title>
</head>
<body>
    <h1>Listado de Personal</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personal as $persona)
            <tr>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->cargo }}</td>
                <td>
                    <a href="{{ route('personal.edit', $persona->id) }}">Editar</a>
                    <form action="{{ route('personal.destroy', $persona->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('personal.create') }}">Añadir Nuevo</a>
</body>
</html>
