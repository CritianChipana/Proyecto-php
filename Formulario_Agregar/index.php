<?php  require('listar.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estiloindex.css">
</head>
<body>
    <div class="contenedor_a">
        <div class="contenedor_b">
            <div class="contenedor_buscar">
                <form action="" method="post">

                    <input type="text" name="txt_buscar" id="txt_buscar">
                    <input type="submit" value="Buscar">
                </form>

                <form action="Agregar.php" method="post">
                    <input type="submit" value="Agregar">

               </form> 
            </div>
           
        </div>

        <div class="contenedor_b">
            <table class="tabla">
                <thead class="cabeza">
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>DEPARTAMENTO</th>
                    <th>COMENTARIO</th>
                    <th>DESEA</th>
                </thead>
                <tbody class="fila">
                    <?php foreach ($query as $row){  ?>
                        <tr class="fila">
                            <th ><?php echo $row['nombre'];?></th>
                            <th class="fila"><?php echo $row['email'];?></th>
                            <th class="fila"><?php echo $row['telefono'];?></th>
                            <th class="fila"><?php echo $row['departamento'];?></th>
                            <th class="fila"><?php echo $row['comentario'];?></th>
                            <th class="fila"><?php echo $row['desea'];?></th>
                            <th class="fila"><a href="">zaa</a></th>
                            <th class="fila"><?php echo $row['desea'];?></th>

                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    
    </div>
</body>
</html>