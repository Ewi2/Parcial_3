<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información General</title>
    <link rel="stylesheet" href="ESTILOS/infoGeneralCSS.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="/"><img src="https://cdn.pixabay.com/photo/2023/09/06/22/26/ai-generated-8237981_640.png" alt="Logo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="/infoGeneral">Inicio</a></li>
                <li><a href="/personajes">Personajes</a></li>
                <li><a href="#descarga">Descarga</a></li>
                <li><select onchange="redirectToPage(this)">
                    <option value="">Nosotros</option>
                    <option value="/desarrollador1/mostrar">Desarrollador 1</option>
                    <option value="/desarrollador2/mostrar">Desarrollador 2</option>
                    <option value="/desarrollador3/mostrar">Desarrollador 3</option>
                    <option value="/desarrollador4/mostrar">Desarrollador 4</option>
                </select></li>
            </ul>   
        </nav>
    </header>
 
    <!-- Sección principal con imágenes grandes como botones -->
    <main>
        <section class="image-buttons">
            <a href="/personajes" class="image-button">
                <img src="https://www.profesionalreview.com/wp-content/uploads/2022/04/Como-es-el-entorno-de-trabajo-de-Blender-02.png" alt="Sección 1">
                <div class="overlay">Personajes</div>
            </a>
            <a href="https://godotengine.org/" class="image-button">
                <img src="https://esotericsoftware.com/img/blog/spine-godot-released/news-godot-2x.png" alt="Sección 2">
                <div class="overlay">Motor de Creacion</div>
            </a>
            <a href="/quienesSomos" class="image-button">
                <img src="https://lh4.googleusercontent.com/proxy/0TXx3f53LsInq0g2ImstD4I5uCKVi2HTppLryzh0wZJgPRyIzBvx-M2H1a7LONOW-GI1MloX_uYUJ7Z0KqRU0egsHEq4eeygRx7Di6uXiemfTLhqBXEKBw" alt="Sección 3">
                <div class="overlay">Quienes somos</div>
            </a>
        </section>
    </main>
    <main>
        <section class="image-buttons">
            <a href="/controles" class="image-button">
                <img src="https://cdn2.unrealengine.com/mechanical-keyboard-rgb-backlight-top-4023x2263-318fa9081e68.jpg" alt="Sección 1">
                <div class="overlay">Controles</div>
            </a>
            <a href="/mundo" class="image-button">
                <img src="https://www.esic.edu/sites/default/files/2023-10/AdobeStock_430978353_11zon.jpeg" alt="Sección 2">
                <div class="overlay">Mundos y niveles</div>
            </a>
            <a href="#section3" class="image-button">
                <img src="https://s1.significados.com/foto/desarrollo-og.jpg?class=ogImageWide" alt="Sección 3">
                <div class="overlay">Actualizaciones de version</div>
            </a>
        </section>
    </main>

    <footer>
        <div class="footer-logo">
            <a href="/"><img src="https://cdn.pixabay.com/photo/2023/09/06/22/26/ai-generated-8237981_640.png" alt="Logo"></a>
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
    <script src="/JAVASCRIPT/pasar_pagina.js"></script>
</body>
</html>