<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Index</title>
  </head>
<body>

<?php
    include_once 'database.php';
    
    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
            header('location: cliente.php');
            break;

            case 3:
            header('location: proveedor.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password2 = $_POST['password'];
        $password = md5($password2);

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM users WHERE user = :username AND pass = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[3];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: admin.php');
                break;

                case 2:
                header('location: cliente.php');
                break;

                case 3:
                header('location: proveedor.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }
        

    }

?>

<div class="container">
  <h2>Iniciar sesión</h2>
  <br>

    <form class="form-horizontal" action="#" method="POST">
        Username: <br/><input type="text" style="width: 200px" class="form-control" name="username"><br/>
        Password: <br/><input type="password" style="width: 200px" class="form-control" name="password"><br/>
        <input type="submit" value="Iniciar sesión" class="btn btn-success">
    </form>

    <br>

    <a class="btn btn-primary" href="registration.php" role="button">Registrese aquí</a>

</div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>