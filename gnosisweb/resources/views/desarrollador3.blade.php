<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ESTILOS/estilosDevsCSS.css">
    <title>Document</title>
</head>
<body>
    <div >
        <img src="\IMAGENES\angrybird3.jpg" class="imagen">
        @foreach ($equipos as $equipo)
            @if ($equipo->id == 6)
                <tr>
                    <td>Nombre: {{ $equipo->nomb_desarrollador }}</td>
                    <br>
                    <td>Rol: {{ $equipo->rol }}</td>
                    <br>
                    <td>informacion personal: {{ $equipo->info_personal }}</td>
                    <br>
                    <td>Ha parcitipado en: {{ $equipo->proyecto_trabajado }}</td>
                </tr>
            @endif
        @endforeach
    </div>
        <div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum nulla aliquam ducimus pariatur magni libero recusandae molestiae? Sed dolore, illum deleniti qui aperiam eveniet, alias, cumque mollitia unde obcaecati assumenda!</p>
        <br>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium delectus laborum, repudiandae minus assumenda sequi exercitationem mollitia? Porro laudantium molestiae ad dolor ex explicabo ipsum modi quisquam, repellat quae ipsa?</p>
    </div>
</body>
</html>