<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Caracteristicas</title>
    <link rel="stylesheet" type="text/css" href="caracteristicas.css">
</head>
<body>
    <header>
        <a href="#" class="logo">Pinterest</a>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="caracteristicas.php">Caracteristicas</a></li>
                <li><a href="inspiracion.php">Inspiracion</a></li>
                <li><a href="comunidad.php">Comunidad</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section class="zona1"></section><br><br>
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY > 0);
        });
    </script>
    <?php
    echo "<div class='fondo'>";
    echo "<br><br>";
    echo "<p>Descubre cómo sacarle el máximo provecho a Pinterest: <br> crea tableros, comparte tus imágenes favoritas con amigos y familiares,<br> y explora un mundo de inspiración en un solo lugar.</p><br><br>";
    echo "<table>
      <tr>
          <th colspan='4' id='thBuscar'>¡Descubre tus favoritos en imágenes!</th>
      </tr>
        <tr>
            <td><img src='buscar1.jpg' alt='Captura buscar 1'></td>
            <td><img src='buscar2.jpg' alt='Captura buscar 2'></td>
            <td><img src='buscar3.jpg' alt='Captura buscar 3'></td>
            <td><img src='buscar4.jpg' alt='Captura buscar 4'></td>
        </tr>
    </table>
    <br>
    <table>
      <tr>
          <th colspan='2' id='thGuardar'>¡Guarda tus tesoros visuales!</th>
      </tr>
        <tr>
            <td><img src='guardar1.jpg' alt='Captura guardar 1'></td>
            <td><img src='guardar2.jpg' alt='Captura guardar 2'></td>
        </tr>
    </table>
    <br>
    <table>
      <tr>
          <th colspan='2' id='thDescargar'>¡Descubre, Descarga, Disfruta!</th>
      </tr>
        <tr>
            <td><img src='descargar1.jpg' alt='Captura descargar 1'></td>
            <td><img src='descargar2.jpg' alt='Captura descargar 2'></td>
        </tr>
    </table>
    <br>
    <table>
      <tr>
          <th colspan='5' id='thTableros'>¡Crea tus propios tableros!</th>
      </tr>
        <tr>
            <td><img src='tablero1.jpg' alt='Captura tablero 1'></td>
            <td><img src='tablero2.jpg' alt='Captura tablero 2'></td>
            <td><img src='tablero3.jpg' alt='Captura tablero 3'></td>
            <td><img src='tablero4.jpg' alt='Captura tablero 4'></td>
            <td><img src='tablero5.jpg' alt='Captura tablero 5'></td>
        </tr>
    </table>
    <br>
    <table>
      <tr>
          <th colspan='6' id='thPines'>¡Publica tus propios pines!</th>
      </tr>
        <tr>
            <td><img src='pines1.jpg' alt='Captura pines 1'></td>
            <td><img src='pines2.jpg' alt='Captura pines 2'></td>
            <td><img src='pines3.jpg' alt='Captura pines 3'></td>
            <td><img src='pines4.jpg' alt='Captura pines 4'></td>
            <td><img src='pines5.jpg' alt='Captura pines 5'></td>
            <td><img src='pines6.jpg' alt='Captura pines 6'></td>
        </tr>
    </table>
    <br>
    <table>
      <tr>
          <th colspan='2' id='thCompartir'>¡Compartir es muy sencillo!</th>
      </tr>
        <tr>
            <td><img src='compartir1.jpg' alt='Captura compartir 1'></td>
            <td><img src='compartir2.jpg' alt='Captura compartir 2'></td>
        </tr>
    </table>
    <br>
    <p id='video'>Conoce mas</p>
    <center>
        <iframe width='560' height='315' src='https://www.youtube.com/embed/9XGdsrd4TmA?si=zjP7hiYlG0sulIHp' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>
    </center>
    <br>
    <table>
      <tr>
          <th colspan='3' id='thComentarios'>¡Explora la magia de Pinterest a través de las palabras de nuestros usuarios!</th>
      </tr>
        <tr>
            <td><img src='comentario1.png' alt='Comentario 1' class='imgcomentario'></td>
            <td><img src='comentario2.png' alt='Comentario 2' class='imgcomentario'></td>
            <td><img src='comentario3.png' alt='Comentario 3' class='imgcomentario'></td>
        </tr>
        <tr>
            <td><img src='comentario4.png' alt='Comentario 4' class='imgcomentario'></td>
            <td><img src='comentario5.png' alt='Comentario 5' class='imgcomentario'></td>
            <td><img src='comentario6.png' alt='Comentario 6' class='imgcomentario'></td>
        </tr>
        <tr>
            <td><img src='comentario7.png' alt='Comentario 7' class='imgcomentario'></td>
            <td><img src='comentario8.png' alt='Comentario 8' class='imgcomentario'></td>
            <td><img src='comentario9.png' alt='Comentario 9' class='imgcomentario'></td>
        </tr>
    </table>
    <br>";
    echo "<footer>
        <ul>
            <li>Hecho por:</li>
            <li>Avila Valenzuela Diego Alberto</li>
            <li>Escalante Valenzuela Daniel Omar</li>
            <li>Pereo Campoa Brighyt Stephanie</li>
            <li>Ruiz Soto Michelle Teresa</li>
            <li>Valenzuela Gonzalez Oscar Adan</li>
        </ul>
    </footer>";
    echo "</div>";
    ?>
</body>
</html>
