 <?php

require('conexion.php');

$i = $_POST['id'];
$n = $_POST['nombre'];
$c = $_POST['cantidad'];

$sql = "INSERT INTO fruta (nombre,precio , estado)
VALUES ('$i', '$n', '$c')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
                alert('Dato ingresado correctamente');
                location.href ='index.php';
    </script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 