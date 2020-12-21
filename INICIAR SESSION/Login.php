<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Login.php</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css.css">
</head>


<body style="background: lightblue;">
   <div class="container">
      <?php
         if(isset($_SESSION['nombre'])){
            echo "<p>Has iniciado sesion como: " . $_SESSION['nombre'] . "";
            echo "<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>";
            echo "<br><p><a href='PanelControl.php'>Ir al panel de control</a>";
         }else {
      ?>
         <h2 style="color:black">Creando la sesion de Colores</h2>
         <form action="PanelControl.php" method="POST">
            <p>Ingrese su color favorito:</p>
            <p><input type="text" placeholder="Ingrese su color favorito:" name="nombre" required/></p>
            <p><input type="submit" value="Crear Sesion" /></p>
         </form>
      <?php
         }
      ?>
   </div>
</body>
</html>