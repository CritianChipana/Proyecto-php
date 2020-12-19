<?php
    require("conexion.php");

    $nombre = $_GET['nombre'];
    // echo $nombre;
    $email = $_GET['email'];
    // echo $email;
    $codigo2 = $_GET['codigo'];
    $telefono = $_GET['telefono'];
    // echo $telefono;
    $departamento = $_GET['departamento'];
    // echo $departamento;
    $comentario = $_GET['comentario'];
    // echo $comentario;
    $desea = $_GET['desea'];
    // echo $desea;
    
    $sql_mofificar="UPDATE datos SET nombre='$nombre', email='$email',telefono ='$telefono',departamento='$departamento',comentario='$comentario',desea='$desea' WHERE id= '$codigo2' "   ;

    $query_modificar = mysqli_query($conectar,$sql_mofificar);

    if($query_modificar){
        echo "<script>
                    alert('Modificado Correctamente');
                    location.href = 'index.php';
            </script>";
    }else{
        echo "<script>
                    alert('Problemas al Modificar');
                    location.href = 'formulario_modificar.php';
                </script>";

    }

    // UPDATE datos SET nombre='nombre', email='email',telefono ='telefono',departamento='departamento',comentario='comentario',desea='desea' WHERE id= 6 " 

?>