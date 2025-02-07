<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Modelos Demos</title>
</head>
<body>
    <h1>Modelos Demos</h1>
    <ul>
        @foreach ($modelo_demos as $usuario)
            <li>Nombre: {{ $usuario->nombre }}</li>
        @endforeach
    </ul>
</body>
</html>
