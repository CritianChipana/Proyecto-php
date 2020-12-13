<?php
    require("conexion.php");

    if($_GET['idempleado']){
        $id = $_GET['idempleado'];
        $sql = "DELETE FROM datos where id= $id";
        $eliminar = mysqli_query($conectar,$sql);

        if($eliminar){
                echo "<script>
                        alert('Eliminado Correctamente');
                        location.href = 'index.php';
                </script>";
        }else{
            echo "<script>
                    alert('Problemas con Eliminar dato');
                    location.href = 'index.php';
            </script>";
        }


    }


?>