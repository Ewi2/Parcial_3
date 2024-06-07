<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes</title>
    <link rel="stylesheet" href="ESTILOS/tarjetasCSS.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="/infoGeneral"><img src="https://cdn.pixabay.com/photo/2023/09/06/22/26/ai-generated-8237981_640.png" alt="Logo"></a>
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

    <main>
        <div class="card-container">
            <div class="card" onclick="openModal(1)">
                <img src="IMAGENES/personaje1_display.jpg" alt="Imagen de Ejemplo" class="card-image">
            </div>
            <div class="card" onclick="openModal(2)">
                <img src="IMAGENES/personaje2_display.jpg" alt="Imagen de Ejemplo" class="card-image">
            </div>
            <div class="card" onclick="openModal(3)">
                <img src="IMAGENES/personaje3_display.jpg" alt="Imagen de Ejemplo" class="card-image">
            </div>
        </div>
    </main>

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

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="modal-body">
                <img id="modal-image" src="" alt="Imagen de Ejemplo" class="modal-image">
                <div class="modal-text">
                    <h2 id="modal-title">Título de la Tarjeta</h2>
                    <p id="modal-text">Este es un texto de ejemplo dentro de la tarjeta. Puedes reemplazarlo con el contenido que desees.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="JAVASCRIPT/tarjetas.js"></script>
</body>
</html>