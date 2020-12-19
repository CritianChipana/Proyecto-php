<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "frutas";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Error en conexion " . mysqli_connect_error());
}

