<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar mensaje</title>
</head>
<body>
    <h1>Edita tu mensaje</h1>
    <form action="{{ route('edicion.procesar', $mensaje->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="text" value="{{ $mensaje->text }}" required>
        <input type="text" name="subrayado" value="{{ $mensaje->negrita }}" required>
        <input type="text" name="negrita" value="{{ $mensaje->subrayado }}" required>
        <button type="submit">
            Editar
        </button>
    </form>
</body>
</html>