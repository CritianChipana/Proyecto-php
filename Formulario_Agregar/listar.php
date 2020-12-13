<?php

require("conexion.php");

$consulta = "SELECT* FROM datos";
$query = mysqli_query($conectar,$consulta);
$array = mysqli_fetch_array($query);

?>