<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenidos a la Página de Inicio</h1>
    <nav>
        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ route('quienes-somos') }}">Quienes Somos</a></li>
            <li><a href="{{ route('nuestros-productos') }}">Nuestros Productos</a></li>
            <li><a href="{{ route('donde-estamos') }}">Donde Estamos</a></li>
            <li><a href="{{ route('nuestros-clientes') }}">Nuestros Clientes</a></li>
        </ul>
    </nav>
</body>
</html>
