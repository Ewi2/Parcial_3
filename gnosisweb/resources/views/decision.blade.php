<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ESTILOS/decisionCSS.css">
    <title>Document</title>
</head>
<body>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="cerrarSesion">Cerrar Sesión</button>
        </form>
    <div class="seleccionar">
        <button class="desarrollador" onclick="Cambiar_de_desarrollador()">Datos de desarrollador</button>
        <button class="proyecto" onclick="Cambiar_de_proyecto()">Datos de proyecto</button>
    </div>
</body>
<script src="/JAVASCRIPT/pasar_pagina.js"> </script>
</html>