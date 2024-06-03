<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/IMAGENES/Logo.png">
    <link rel="stylesheet" href="/ESTILOS/datos_entrada.css">
    <title>Document</title>
</head>
<body>
<button class="btnReg" onclick="Mostrar_datos_equipo()">Mostrar datos</button>
<button class="btnPrincipal" onclick="RegresarDecision()">Regresar</button>
    <div>
        <form action="" method="post">
        @csrf
        <label for="area">Ingrese el Area </label>
        <input type="text" id="area" name="area" required>

        <br>
        <label for="rol">Rol desempeñado</label>
        <input type="text" id="rol" name="rol" required>

        <br>
        <label for="nombdesarrollador">Nombre del desarrollador</label>
        <input type="text" id="nomb_desarrollador" name="nomb_desarrollador" required>
        
        <br>
        <label for="info">Información personal</label>
        <textarea type="text" id="info_personal" name="info_personal" cols="30" rows="10" maxlength="255" required></textarea>

        <br>
        <label for="proyecto">Proyecto trabajado</label>
        <input type="text" id="proyecto_trabajado" name="proyecto_trabajado" required>

        <br>
        <button type="submit">SUBIR</button>
    </div>
    <script src="JAVASCRIPT/pasar_pagina.js"></script>
</body>
</html>