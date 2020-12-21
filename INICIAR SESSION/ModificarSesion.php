<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Modificar.php</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="css.css">
</head>
<body style="background: lightblue;">
    <div class="container">
        <?php

            if(isset($_SESSION['nombre'])){
            echo "<p>Has iniciado sesion como: " . $_SESSION['nombre'] . "";
        ?>
        <h2 style="color:black">Modificar Sesión</h2>
        <form action="PanelControl.php" method="POST">
            <p>Ingrese su nuevo color favorito:</p>
            <p><input type="text" placeholder="Ingrese su color" name="nombre" required/></p>
            <p><input type="submit" class='btn btn-primary' value="Modificar Sesion" /></p>
        </form>
        <?php
            echo "<br><p><a href='PanelControl.php' class='btn btn-primary'>Ir al panel de control</a>";
            }else {
                echo "Acceso Restringido";
            }
        ?>
    </div>
</body>
</html>