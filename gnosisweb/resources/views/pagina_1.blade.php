<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/IMAGENES/Logo.png">
    <link rel="stylesheet" href="/ESTILOS/estilo_mostrar_tablas.css">
    <title>pagina1</title>
</head>
<body>
    <button class="btnReg" onclick="Mostrar_proyectos()">Ingresar datos</button>
    <button class="btnPrincipal" onclick="RegresarDecision()">Regresar</button>
<h1>Lista de Proyectos</h1>
    <table>
        <thead>
            <tr>
                <th>Actividad</th>
                <th>Encargado</th>
                <th>Herramientas</th>
                <th>Descripción</th>
                <th>Imágen</th>
                <th>Horas Utilizadas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->tipo_tarea }}</td>
                    <td>{{ $proyecto->desc_encargados }}</td>
                    <td>{{ $proyecto->herramientas_utilizadas }}</td>
                    <td>{{ $proyecto->descripcion }}</td>
                    <td>{{ $proyecto->imagen }}</td>
                    <td>{{ $proyecto->tiempo_empleado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
    <script src="/JAVASCRIPT/pasar_pagina.js"></script>
</body>
</html>