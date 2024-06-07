<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
    <link rel="stylesheet" href="ESTILOS/mundoCSS.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="/infoGeneral"><img src="https://cdn.pixabay.com/photo/2023/09/06/22/26/ai-generated-8237981_640.png" alt="Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="/infoGeneral">Inicio</a></li>
                <li><a href="#personajes">Personajes</a></li>
                <li><a href="#descarga">Descarga</a></li>
                <li><select onchange="redirectToPage(this)">
                    <option value="">Nosotros</option>
                    <option value="/proyectos">desarrollador 1</option>
                    <option value="pagina2.html">Página 2</option>
                    <option value="pagina3.html">Página 3</option>
                    <option value="pagina4.html">Página 4</option>
                </select></li>
            </ul>   
        </nav>
    </header>
 
    <h1 class="titulo1">Creacion del mundo</h1>

    <div style="text-align: center;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi3es0wwQpBT8OIog2wvjp_I_-tSOAeeB93w&s" alt="Imagen centrada" />
    </div>
    <p class="ParrafosMu">La creacion del mundo se muestra de manera en la que el mundo y todos los sucesos del juego se realizan dentro de un garaje comun y normal, cada nivel se mostrara en miniatura
        en el que el personaje se encogera y podra recorer largo caminos y peleas a lo largo del nivel ademas de que cada nivel tendra escenarios estaticos en los que el usurio podra luchar sin tener
        que preocuparse por mucha movilidad, cada mundo tendra multiples niveles que contaran con una tematica especifica por mundo en la que tocara temas importantes y educativos.</p>
<br>
    <p class="ParrafosMu">En el primer nivel de prueba que hicimos podemos ver el garaje de fondo desde la perspectiva de el personaje principal en miniatura desde una maceta en la que tendra
        que enfrentearse a mobs con tematicas de plantas e insectos que habran mutado y seran mucho mas agresivos de lo que se muestran en la vida real.
    </p>
    <footer>
        <div class="footer-logo">
            <a href="/infoGeneral"><img src="https://cdn.pixabay.com/photo/2023/09/06/22/26/ai-generated-8237981_640.png" alt="Logo"></a>
        </div>
        <div class="footer-info">
            <p>&copy; 2024 Gnosis. Videojuego en Creacion.</p>
            <p>Contacto: <a href="mailto:info@empresa.com">No hay aun</a></p>
            <br>
        </div>
        <div class="footer-social">
            <a href="#inicio" class="back-to-top">Volver arriba</a>
          
        </div>
    </footer>
</body>
</html>