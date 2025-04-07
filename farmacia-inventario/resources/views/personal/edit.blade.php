<!-- resources/views/personal/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Personal</title>
</head>
<body>
    <h1>Editar Personal</h1>
    <form action="{{ route('personal.update', $persona->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $persona->nombre }}" required><br>
        
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" value="{{ $persona->cargo }}" required><br>

        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('personal.index') }}">Volver al listado</a>
</body>
</html>
