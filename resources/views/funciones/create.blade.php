<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
    <h1>Crear registro</h1>
    <a href="{{ route('funciones.index') }}">Regresar</a>
    <form action="{{ route('funciones.store') }}" method="post">
        @csrf
        <label>Pelicula</label>
        <input type="text" name="pelicula">
        <br/>
        <label for="">Fecha</label>
        <input type="text" name="fecha">
        <br/>
        <label for="">Hora</label>
        <input type="text" name="hora">
        <br/>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>