<!DOCTYPE html>
<html lang="mx">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Registro para el evento de la UTC">
	<meta name="author" content="Manuel Jimenez">

	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">


	<title>ELEGANCIA QUERETANA</title>
</head>
<body>

	<header class="header">
			<img src="imagenes/logo.png">
			<p>Elegancia Queretarana</p>
	</header>

	<div class="content">
			<form class="formulario" action="reg.php" method="post">
				<h1 class="re">Registro</h1>
				<br><br>
				<label for="NumInv">Numero de invitados</label>
				<select name="numinv" id="NumInv" onchange="habilitar(this.id);">
					<option title="Seleccionar">Seleccionar</option>
					<option value="0">Ninguno</option>
					<option value="1">Uno</option>
					<option value="2">Dos</option>
				</select>
				<br><br>
				<label for="invitado">Nombre de invitado: </label>
				<input type="text" name="invitado" id="invitado" placeholder="Nombre completo" disabled="disabled">
				<br><br>
				<label for="invitado2">Nombre de invitado: </label>
				<input type="text" name="invitado2" id="invitado2" placeholder="Nombre completo" disabled="disabled">
				<br><br>
				<label for="code">Escriba su codigo: </label>
				<input type="text" name="code" id="code" placeholder="Codigo de invitacion">
				<br><br>
				<input type="submit" value="Registrarse" id="boton" onclick="mensaje();">
			</form>

			<section class="mapa">

				<h1>Lugar del evento</h1>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.6670686231536!2d-99.16130421974363!3d19.4267337441584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff33e5bc32ab%3A0xb1c2b92164c0a4a!2sescuela+utc!5e0!3m2!1ses!2smx!4v1498594134693" width="60%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>
	</div>
    
    <?php
        include 'cn.php';

        $num = $_POST["numinv"];
        $inv = $_POST["invitado"];
        $inv2 = $_POST["invitado2"];
        $code = $_POST["code"];

        $insertar = "INSERT INTO registrados(numinv, invitado, invitado2, cod) VALUES ('$num', '$inv', '$inv2', '$code')";

        $resultado = mysqli_query($cn, $insertar);

        mysqli_close($cn);
    ?>

</body>
</html>
