<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }


?>

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mooc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE users (
id INT(30) PRIMARY KEY NOT NULL,
user VARCHAR(30) NOT NULL,
pass VARCHAR(50) NOT NULL,
tipo INT(10) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla usuarios creada satisfactoriamente";
} else {
    echo "Error creando tabla usuarios: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 