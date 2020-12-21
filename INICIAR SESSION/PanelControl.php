<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Panel Control</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background: lightblue;">
	<div class="container">
		<h2>La sesion creada correctamente</h2>
		<p>
		<?php
			if(isset($_POST['nombre'])){
				$_SESSION['nombre'] = $_POST['nombre'];
				echo "Bienvenido! Has iniciado sesion como:<b> ".$_POST['nombre']."</b>";
			}else{
				if(isset($_SESSION['nombre'])){
					"Has iniciado Sesion como: ".$_SESSION['nombre'];
				}else{
					// Si la sesion expiro o no se creo  mostraremos el siguiente mensaje
					echo "Acceso Restringido";
				}
			}
		?></p>
		<br>
		<p><a href="Login.php" class="btn btn-primary">Ir a la página inicial</a></p>
		<br>
		<p><a href="ModificarSesion.php" class="btn btn-primary">Modificar Sesión</a></p>
		<br>
		<p><a href='CerrarSesion.php' class="b, tn btn-primary">Cerrar Sesión</a></p>
	</div>
</body>
</html>