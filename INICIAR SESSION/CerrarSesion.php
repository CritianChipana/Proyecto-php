<?php
// Mostramos la sesion
session_start();
//Distruimos la sesion
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Cerrar Sesion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>


<body style="background: lightblue;">
    <h2>Has Cerrado Sesion correctamente</h2>
    <br/>
    <p><a href="Login.php" class="btn btn-primary">Ir al Login</a></p>
</body>
</html>