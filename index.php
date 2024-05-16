<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="general.css">
	<title>Pinterest</title>
</head>
<body>
<header>
    <a href="#" class="logo" style="font-family: arial;">Pinterest</a>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="caracteristicas.php">Caracteristicas</a></li>
            <li><a href="inspiracion.php">Inspiracion</a></li>
            <li><a href="comunidad.php">Comunidad</a></li>
            <li><a href="contacto.php">Contactanos</a></li>
        </ul>
    </nav>
</header>
<section class="zona1"></section><br><br>
<script type="text/javascript" >
    window.addEventListener("scroll", function(){
        var header=document.querySelector("header");
        header.classList.toggle("abajo",window.scrollY>0);

    })

</script>
<style type="text/css">
	body{
		background: linear-gradient(to bottom, #fefff2, #fffabb);
	}
</style>
<!-- Hasta aqui llega el menu-->
	<?php
		echo "<nav class='sub' id='subElement'><h1>¡Conoce la inspiración!</h1></nav><br><br>

		<center>
			<p class='textcont' id><b>Imagina</b> un universo visualmente cautivador donde tus <b>sueños, pasiones y proyectos cobran vida</b> con solo deslizar el dedo. Bienvenido a <b>Pinterest</b>, donde la inspiración está a solo un clic de distancia. <p><center><br><br>

			<p class='textcont'> Desde consejos de belleza hasta trucos de bricolaje, desde destinos de viaje exóticos hasta consejos de bienestar, <b>Pinterest es tu guía personal para convertir ideas en realidad.</b><p><br><br>

				<iframe width='800' height='360' src='https://www.youtube.com/embed/CqjDZT8SKYw?si=irbnIk9NXaEETW9E' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe><br><br>		

			<p class='tablatit1' id='textcontElementp'><b>Con la aplicación de Pinterest, tú eres el arquitecto de tus sueños.</b></p></center><br><br>

			<blockquote class='tiktok-embed' cite='https://www.tiktok.com/@pinterest/video/7355172084730907950' data-video-id='7355172084730907950' style='max-width: 605px;min-width: 325px;' > <section> <a target='_blank' title='@pinterest' href='https://www.tiktok.com/@pinterest?refer=embed'>@pinterest</a> Sundays are made for snacking and scrolling.@ThisIsJessicaTorres <a target='_blank' title='♬ End of beginning by djo - Toria' href='https://www.tiktok.com/music/End-of-beginning-by-djo-7296865677002967850?refer=embed'>♬ End of beginning by djo - Toria</a> </section> </blockquote> <script async src='https://www.tiktok.com/embed.js'></script><br><br>
		";
	
	    $imagenes = array(
        'images/Guardarb.png',
        'images/Publicar.png'
    );

	 echo "<b><h1 id='parrafito'>¡Únete a la comunidad de Pinterest y descubre todo lo que tiene para ofrecerte!</b></h1><br><br>";

	 echo "<h1 style='color: #ff6eb7;' id='parrafito'>Adaptable a tu personalidad</h1><br><br>
	 <img class='imgtabla' src='images/inicio.jpg'>";

    // Inicio de la tabla
    echo "<center><table>";

    // Encabezado de la tabla
    echo "<thead>
            <tr>
                <th><p class='tablatit1'><i>¡Guarda lo que te inspire!</p></th><br><br>
                <th><p class='tablatit3'><i>¡Aporta a la comunidad!</p></i></th><br><br>
            </tr>
        </thead>";

    // Cuerpo de la tabla
    echo "<tbody>
            <tr>";
    foreach ($imagenes as $key => $imagen) {
        // Agregar un atributo style para cambiar el tamaño solo de la segunda imagen
        $style = ($key == 1) ? 'style="width: 60%; height: auto;"' : '';
        echo "<td><img class='imgtabla' src='$imagen' $style></td>";
    }
    echo "</tr>
        </tbody>";

    // Fin de la tabla
    echo "</table></center><br><br>";
	?>

	<nav class='sub' id='subElement'>
		<h1> ¡Haz clic ahora y únete a la comunidad de Pinterest!</h1>
	</nav><br><br><br>

	<p class='textcont'>Descubre el enlace de descarga y sumérgete en un mundo lleno de creatividad y nuevas ideas.</p><br><br><br><br>

	<table>
		<tr>
			<td><p class="tablatit1"><b>Descubre sin Límites:<br></b> Descarga Pinterest para Android</p></td>
			<td><p class="tablatit2"><b>Inspírate al Máximo:<br></b>Descarga Pinterest para iOS</p></td>
			<td><p class="tablatit3"><b>Vuelve a Explorar:<br></b> Ingresa al Inicio de Pinterest</p></td>
		</tr>
		<tr>
			<td class='imagCont'>
				<a href="https://play.google.com/store/search?q=pinterest&c=apps">
					<img src="links/android.jpg" style="width: 55%;">    
				</a>
			</td>
			<td class='imagCont'>
				<a href="https://apps.apple.com/mx/app/pinterest/id429047995">
					<img src="links/ios.jpg" style="width: 62%;">
				</a>
			</td>
			<td class='imagCont'>
				<a href="https://www.pinterest.com.mx/">
					<img src="links/pagof.jpg" style="width: 62%;">    
				</a>
			</td>
		</tr>
	</table>
	<?php
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
	?>
	

</body>
</html>