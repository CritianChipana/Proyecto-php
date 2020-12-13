<?php

include("conexion.php");

$nombre = $_POST['nombre'];
// echo $nombre;
$email = $_POST['email'];
// echo $email;
$telefono = $_POST['telefono'];
// echo $telefono;
$departamento = $_REQUEST['departamento'];
// echo $departamento;
$comentario = $_POST['comentario'];
// echo $comentario;
$desea = $_POST['desea'];
// echo $desea;

$insertar = "INSERT INTO datos(nombre,email,telefono,departamento,comentario,desea) values ('$nombre','$email','$telefono','$departamento','$comentario','$desea')";

$sql =mysqli_query($conectar,$insertar);

if($sql){
    echo "<script> 
                alert('Correcto');
                location.href = 'index.php';
         </script>";
}else{
    echo  "<script> 
              alert('Incorrecto');
              location.href = 'Agregar.php';
          </script>";
}


?>