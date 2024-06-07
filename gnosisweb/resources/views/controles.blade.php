<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controles del Juego</title>
  <link rel="stylesheet" href="ESTILOS/controlesCSS.css">
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
  <div class="container">
    <img src="https://i.pinimg.com/originals/8d/d1/35/8dd135d6b69e642544aa8e94c3d7f06f.gif" alt="Controles del Juego" class="controls-image">
    <div class="controls-explanation">
      <h1>Controles del Juego</h1>
      <p>En este juego, podrás moverte de izquierda a derecha y saltar. Sigue estas instrucciones para controlar a tu personaje:</p>
      <ul>
        <li><strong>Mover a la Izquierda:</strong> Presiona la flecha izquierda del teclado o la tecla "A".</li>
        <li><strong>Mover a la Derecha:</strong> Presiona la flecha derecha del teclado o la tecla "D".</li>
        <li><strong>Saltar:</strong> Presiona la barra espaciadora o la tecla "W".</li>
      </ul>
      <p>Recuerda que solo puedes moverte horizontalmente y saltar. ¡Diviértete jugando!</p>
    </div>
  </div>

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
<script src="/JAVASCRIPT/pasar_pagina.js"></script>
</body>
</html>