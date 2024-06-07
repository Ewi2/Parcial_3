<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/IMAGENES/Sig_interrogacion.jpg">
    <link rel="stylesheet" href="/ESTILOS/sesionCSS.css">
</head>
<body>
    <button class="btnPrincipal" onclick="RegresarPrincipal()">Regresar</button>
    <div class="contenedor_sesion">
    <h1>Registro</h1>
    <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Usuario</label>
            <input id="name" type="text" name="name" required>
            <br>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
            <br>
            <label for="password">Contraseña</label>
            <input id="password" type="password" name="password" required>
            <br>
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        <button type="submit">Registrarse</button>
    </form>
    </div>
    <script src="/JAVASCRIPT/pasar_pagina.js"> </script>
</body>
</html>
