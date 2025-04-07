<!-- resources/views/personal/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personal</title>
</head>
<body>
    <h1>Agregar Nuevo Personal</h1>
    <form action="{{ route('personal.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" required><br>

        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('personal.index') }}">Volver al listado</a>
</body>
</html>
