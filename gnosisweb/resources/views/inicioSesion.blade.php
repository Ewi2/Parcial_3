<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesión</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/IMAGENES/Sig_interrogacion.jpg">
    <link rel="stylesheet" href="/ESTILOS/sesionCSS.css">
</head>
<body>
<button class="btnPrincipal" onclick="RegresarPrincipal()">Regresar</button>
    <div class="contenedor_sesion">
    <h1>Inicio de Sesión</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required>
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
    </div>
    <script src="/JAVASCRIPT/pasar_pagina.js"> </script>
</body>
</html>
