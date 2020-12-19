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
        <div class="contenedor_b_a">
            <div class="contenedor_buscar">
             
                <form class="b" action="Agregar.php" method="post">
                    <input  class="buscar" type="submit" value="Agregar">

               </form> 
            </div>
           
        </div>

        <div class="contenedor_b_b">
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
                            <th class="fila"><div class="b_mode_a"><a href="formulario_modificar.php?idempleado=<?php echo $row['id']?>">MODIFICAR</a></div></th>
                            <th class="fila"><div class="b_mode_b"><a href="eliminar.php?idempleado=<?php echo $row['id']?>">ELIMINAR</a></div></th>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    
    </div>
</body>
</html>