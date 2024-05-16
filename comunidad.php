<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="general.css">
	<title></title>
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
		background: linear-gradient(to bottom, #fefff2, #d3f3ff);
	}
</style>
		<?php
		echo '<table>
			<tr>
				<td><p class="textcont">¿Buscas un espacio donde ser tú mismo? En Pinterest, no hay reglas ni requisitos. ¡Explora nuestras comunidades diversas y encuentra lo que te inspira!</p></td>

				<td rowspan="2">
					<blockquote class="tiktok-embed" cite=https://www.tiktok.com/@pinterest/video/7345634299367935275" data-video-id="7345634299367935275" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@pinterest" href="https://www.tiktok.com/@pinterest?refer=embed">@pinterest</a> <a target="_blank" title="♬ original sound - pinterest" href="https://www.tiktok.com/music/original-sound-7345634357643578155?refer=embed">♬ original sound - pinterest</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><p class="textcont">¿Te sientes limitado por los requisitos? En Pinterest, la diversidad es nuestra fuerza. Únete ahora y sé parte de una comunidad sin barreras ni exigencias. </p></td>
			</tr>

		</table>';


		//Funciones de Pinterest
		echo '<table>
			<tr>
				<th><p class="tablatit1">¡Sigue y descubre sin límites!</p></th>
			</tr>
			<tr>
				<td><img src="coments/compartir.jpeg" style="width: 40%;"></td>
			</tr>

			<tr>
				<th><p class="tablatit2">¡Tu creatividad merece ser compartida!</p></th>
			</tr>
			<tr>
				<td><img src="coments/seguir.jpeg" style="width: 40%;"></td>
			</tr>

			<tr>
				<th><p class="tablatit3">¡Comparte tu chispa en nuestra sección de comentarios!</p></th>
			</tr>
			<tr>
				<td><img src="coments/comentarios.jpeg" style="width: 40%;"></td>
			</tr>

		</table>';
		/*Collage*/
		echo "<p class='tablatit1' ><b>¡Participa activamente y comparte tus opiniones a través de comentarios!</b></p><br><br>
			

			<center>

			<div class='imagCont'> 
			<img src='coments/com.jpg' style='width: 20%;'><br><br><br>
			</div></center>";

		echo "<table>
					<tbody>
						<tr>
							<td>
								<p class='tablatit2'><b> Un lugar donde los elogios son parte del día a día.</b></p>
							</td>
							<td>
							<div class='imagCont'> 
								<img src='coments/comcute.jpg' style='width: 70%;'>
							</div>
							</td>
						</tr>
						<tr>
							<td class='imagCont'>

								<img src='coments/comcutei.jpg' style='width: 70%;'>
							</td>
							<td >
								<p class='tablatit3'><b>Sin límites de idioma:</b></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class='tablatit1'><b>¡Conecta con gente</b></p>
							</td>
							<td class='imagCont'>
								<img src='coments/comF.jpg' style='width: 70%;'>
							</td>
						</tr>
						<tr>
							<td class='imagCont'>
								<img src='coments/comF.jpg' style='width: 60%;'>
							</td>
							<td>
								<p class='tablatit1'><b>de todo el mundo!</b></p>
							</td>
						</tr>
						</tr>
						<tr>
							<td>
								<p class='tablatit2'><b>¡Conversa por comentarios!</b></p>
							</td>
							<td class='imagCont'>
								<img src='coments/comh.jpg' style='width: 50%;'>
							</td>
						</tr>
					</tbody>
				</table>";

		echo "</div>";
		?>


	
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