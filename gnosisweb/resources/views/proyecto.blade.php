<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ESTILOS/datos_entrada.css">
    <link rel="icon" type="image/png" href="/IMAGENES/Logo.png">
    <title>Agregar</title>
</head>
<body>
    <button class="btnReg" onclick="Mostrar_datos_proyectos()">Mostrar datos</button>
    <button class="btnPrincipal" onclick="RegresarDecision()">Regresar</button>
    <div>
        <form action="" method="post">
            @csrf
            <label for="tarea">Tipo de tarea</label>
            <input type="text" name="tipo_tarea" id="tipo_tarea" required>
            
            <br>
            <label for="des">Desarrollador/es en cargados</label>
            <input type="text" name="desc_encargados" id="desc_encargados" required>
            
            <br>
            <label for="herramientas">Herramientas utilizadas</label>
            <input type="text" name="herramientas_utilizadas" id="herramientas_utilizadas" required>
            
            <br>
            <label for="descripcion">Descripcion</label>
            <textarea type="text" name="descripcion" id="descripcion" cols="30" rows="10" maxlength="255" required></textarea>
            
            <br>
            <label for="horas">Horas trabajadas</label>
            <input type="text" name="tiempo_empleado" id="tiempo_empleado" required>

            <br>
            <label for="imagen">Ingrese una imagen</label>
            <input type="text" id="imagen" name="imagen" accept="image/*">
            
            <br>
            <button type="submit" >SUBIR</button>
        </form>
    </div>
<script src="/JAVASCRIPT/pasar_pagina.js"></script>
</body>
</html>