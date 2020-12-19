 <?php

require('conexion.php');

$i = $_POST['id'];
$n = $_POST['nombre'];
$c = $_POST['cantidad'];


$sql = "UPDATE fruta SET nombre='$n', precio='$c'  WHERE id='$i'";
$resultado = mysqli_query($conn,$sql);
if ($resultado) {
    echo "<script>
            alert('Información actualizada satisfactoriamente');
            location.href = 'index.php';
    
    </script>";
} else {
    echo "
            <script>
                    alert(' Error actualizando la información: ');
            </script>
   " ;

}

mysqli_close($conn);
?> 