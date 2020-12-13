<?php
    require("conexion.php");

    $idd=$_POST['id'];
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
    
    $sql_mofificar="UPDATE datos SET nombre='$nombre', email='$email',telefono ='$telefono',departamento='$departamento',comentario='$comentario',desea='$desea' WHERE id= '$idd' "   ;

    $query_modificar = mysqli_query($conectar,$sql_mofificar);

    if($query_modificar){
        echo "<script>
                    alert('Modificado Correctamente');
                    location.href = 'index.php';
            </script>";
    }else{
        echo "<script>
                    alert('Problemas al Modificar');
                    location.href = 'formulario_modificar.php'
                </script>";

    }

    // UPDATE datos SET nombre='nombre', email='email',telefono ='telefono',departamento='departamento',comentario='comentario',desea='desea' WHERE id= 6 " 

?>