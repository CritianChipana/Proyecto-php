<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Articulos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    

 <?php

require('conexion.php');


$sql2 = "SELECT * FROM fruta";
$result = mysqli_query($conn, $sql2);
$array = mysqli_fetch_array($result);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    ?>
    
    <table id="main-container" >
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>ESTADO</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($result as $row){  ?>
               <tr>
                   <td><?php echo $row['id']; ?></td>
                   <td><?php echo $row['nombre']; ?></td>
                   <td><?php echo $row['precio']; ?></td>
                   <td><?php echo $row['estado']; ?></td>
         
               </tr>
               <?php } ?>
        </tbody>
    </table>

    <?php

}
 mysqli_close($conn);
?> 
<br>

<form class="form-horizontal" action="index.php" role="form" method="POST">

    <button type="submit" name="submit" class="btn btn-success">Atras</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html> 