 <?php

require('conexion.php');

$id = $_POST['id'];


// sql to delete a record
$sql = "DELETE FROM fruta WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("index.php");
} else {
    echo "Error eliminando registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 