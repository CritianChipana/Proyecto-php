<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Registro</title>
  </head>
<body>

<div class="container">
  <div class="alert alert-success">
    <strong>Atención!</strong> En este espacio puede registrar su nombre, email y contraseña

<?php

$db="mooc";
$username="root";
$host="localhost";
$password="";


$con = mysqli_connect("$host","$username","$password","$db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


date_default_timezone_set("America/Lima");
// If form submitted, insert values into the database.
if (isset($_REQUEST['user'])){
        // removes backslashes
    $user = stripslashes($_REQUEST['user']);
        //escapes special characters in a string
    $user = mysqli_real_escape_string($con,$user); 
    $id = stripslashes($_REQUEST['id']);
    $id = mysqli_real_escape_string($con,$id);
    $pass = stripslashes($_REQUEST['pass']);
    $pass = mysqli_real_escape_string($con,$pass);
    $t = 2;

        $query = "INSERT into users (id, user, pass, tipo)
VALUES ('$id', '$user', '".md5($pass)."', '$t')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Su registro fue realizado satisfactoriamente.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registro</h1>
<form class="form-inline" name="registration" action="" method="post">
  <input type="text" class="form-control" name="id" placeholder="id" required />
<input type="text" class="form-control" name="user" placeholder="Username" required />
<input type="password" class="form-control" name="pass" placeholder="Password" required />
<input type="submit" name="submit" value="Register" class="btn btn-success"/>
</form>
</div>
<?php } ?>


  </div>
  
</div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
