<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://fontawesome.com/icons/phone?f=classic&s=solid">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="contacto.css">
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
            <li><a href="contacto.php">Contactanos</a></li>
        </ul>
    </nav>
</header>
<script type="text/javascript" >
    window.addEventListener("scroll", function(){
        var header=document.querySelector("header");
        header.classList.toggle("abajo",window.scrollY>0);
    })
</script>	
<div class="contenedor">
	<div class="box-info">
		<h1>CONTACTATE CON NOSOTROS</h1>
		<div class="data">
			<p><img src="gmailIcon.png" class="iconsContacto"> pinterest@gmail.com</p>
		</div>
		<div class="linksContacto">
			<a href="https://www.facebook.com/pinterest"><img src="faceicon.png" class="iconsContacto"></a>	
			<a href="https://www.instagram.com/pinterest/"><img src="instaicon.png" class="iconsContacto"></a>	
		</div>
	</div>
	<form>
		<div class="formContacto">
			<input type="text" required placeholder="Nombre y apellido">
		</div>
		<div class="formContacto">
			<input type="email" required placeholder="Correo Electronico">
		</div>
		<div class="formContacto">
			<input type="text" required placeholder="Asunto">
		</div>
		<div class="formContacto">
			<textarea cols="30" rows="10" placeholder="deja tu mensaje"></textarea>
		</div>
		<button id="submit">Enviar mensaje</button>
	</form>
</div>
</body>
</html