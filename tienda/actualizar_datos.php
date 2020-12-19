
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
  <title >Actualizar datos</title>

</head>
<body>
<?php include("visualizar.php"); ?>
<div class="container">
  <h2 class="blanco" >Actualizar datos</h2>

  <form class="form-horizontal" action="actualizar.php" role="form" method="POST">


    <div class="input">
      <label class="blanco">ID:</label>
      <input type="text" class="form-control"  name="id" placeholder="Ingrese el id a actualizar">
    </div>

    <div class="input">
      <label class="blanco">NOMBRE:</label>
      <input type="text" class="form-control"  name="nombre" placeholder="Ingrese el nombre">
    </div>

    <div class="input">
      <label class="blanco">PRECIO:</label>
      <input type="text" class="form-control" name="cantidad" placeholder="Ingrese cantidad">
    </div><br>



    <button type="submit" name="submit" class="btn btn-success">Actualizar datos</button>
  </form>

</div>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>