<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quienes somos?</title>
    <link rel="stylesheet" href="ESTILOS/quienesCSS.css">
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
<div class="section-content">
    <h3>Quiénes somos</h3>
    <p>Somos una empresa dedicada al desarrollo de videojuegos en 2D. Nuestra pasión por crear experiencias interactivas y entretenidas nos ha llevado a embarcarnos en este emocionante proyecto.</p>
  
    <h3>Misión</h3>
    <p>Nuestra misión es desarrollar un videojuego en 2D que cautive a los jugadores y les brinde horas de diversión y desafío. Nos esforzamos por crear un mundo virtual único, con personajes memorables y un gameplay que combine acción, estrategia y elementos de aventura.</p>
  
    <h3>Visión</h3>
    <p>Aspiramos a convertirnos en una empresa líder en el desarrollo de videojuegos 2D, reconocida por la calidad y originalidad de nuestras creaciones. Nuestro objetivo a largo plazo es expandir nuestra cartera de títulos y consolidarnos como una marca de confianza en la industria del entretenimiento digital.</p>
  
    <h3>Valores</h3>
    <ul>
      <li>Pasión por el desarrollo de videojuegos</li>
      <li>Innovación y creatividad</li>
      <li>Compromiso con la excelencia</li>
      <li>Respeto por la comunidad de jugadores</li>
      <li>Trabajo en equipo y colaboración</li>
    </ul>
  
    <h3>Equipo Directivo</h3>
    <div class="team-member">
      <img src="IMAGENES/angrybird3.jpg" alt="Director de Proyecto">
      <div>
        <h4>Francisco Cruz</h4>
        <p>Director de Proyecto</p>
        <p>Experto en programacion</p>
      </div>
    </div>
    <div class="team-member">
      <img src="IMAGENES/angrybird4.jpg" alt="Programador">
      <div>
        <h4>Edwin González</h4>
        <p>Programador</p>
        <p>Grandes Habilidades en la programacion</p>
      </div>
    </div>
    <div class="team-member">
      <img src="IMAGENES/angrybird1.jpg" alt="Artista Gráfico">
      <div>
        <h4>Diego Alejandro</h4>
        <p>Artista Gráfico</p>
        <p>Talentoso diseñador con habilidades en arte conceptual y animación</p>
      </div>
    </div>
    <div class="team-member">
      <img src="IMAGENES/angrybird2.jpg" alt="Tester">
      <div>
        <h4>Rony Sorto</h4>
        <p>Tester</p>
        <p>Capacidad y precisión en testeo</p>
      </div>
    </div>
</div>
    <h3>Trayectoria y Logros</h3>
    <p>Aunque somos una empresa joven, hemos logrado importantes hitos en el desarrollo de nuestro primer videojuego 2D. Hemos recibido reconocimientos en festivales y eventos de la industria, lo que nos motiva a continuar trabajando con pasión y dedicación.</p>
  
    <h3>Compromiso Social</h3>
    <p>Además de nuestro enfoque en el desarrollo de videojuegos, también nos preocupamos por fomentar la creatividad y el interés por la industria del entretenimiento digital en nuestra comunidad.</p>

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