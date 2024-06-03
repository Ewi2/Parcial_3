<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/IMAGENES/Logo.png">
    <link rel="stylesheet" href="/ESTILOS/estilo_mostrar_tablas.css">
    <link rel="stylesheet" href="/ESTILOS/estilos.css">
    <title>EQUIPOS</title>
</head>
<body>
<button class="btnReg" onclick="Mostrar_equipo()">Ingresar datos</button>
<button class="btnPrincipal" onclick="RegresarDecision()">Regresar</button>
    <h1>Lista de Equipo</h1>
    <table>
        <thead>
            <tr> 
                <th>Area</th>
                <th>Rol</th>
                <th>Desarrollador</th>
                <th>Información Personal</th>
                <th>Proyectos Trabajados</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->area }}</td>
                    <td>{{ $equipo->rol }}</td>
                    <td>{{ $equipo->nomb_desarrollador }}</td>
                    <td>{{ $equipo->info_personal }}</td>
                    <td>{{ $equipo->proyecto_trabajado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="/JAVASCRIPT/pasar_pagina.js"></script>
</body>
</html>