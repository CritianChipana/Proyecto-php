<?php

require("conexion.php");


    if($_GET['idempleado']){
        $id = $_GET['idempleado'];
        $sql_bus="SELECT * FROM datos where id = $id";
        $query_buscar = mysqli_query($conectar,$sql_bus);
        $vector_dato = mysqli_fetch_array($query_buscar);

        ?>  
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>MODIFICAR EMPLEADO</title>
                <link rel="stylesheet" href="estilo_formulario.css">
            </head>
            <body>

                <div class="contedor_a">
                    <div class="contenedor_b">

                        <form action="modificar.php" method="post">

                        <label for="id">Codigo:<br>
                                <input disabled value="<?php echo $vector_dato[0] ?>" type="text" name="id" id="id">
                            </label><br>

                            <label for="nombre">Nombre y Apellido:<br>
                                <input value="<?php echo $vector_dato[1] ?>" type="text" name="nombre" id="nombre">
                            </label><br>

                            <label for="email">Email:<br>
                                <input value="<?php echo $vector_dato[2] ?>" type="text" name="email" id="email">
                            </label><br>

                            <label for="telefono">Telefono(Optional):<br>
                                <input value="<?php echo $vector_dato[3] ?>" type="number" name="telefono" id="telefono">
                            </label><br>

                            <label for="departamento">Departamento:<br>
                                <input value="<?php echo $vector_dato[4] ?>" type="text" name="departamento" id="departamento">
                            </label><br>

                            <label for="comentario">Comentario o Dudas:<br>
                                <textarea name="comentario" id="comentario" cols="30" rows="10"><?php
                                    echo $vector_dato[5];
                                ?></textarea>
                            </label><br>

                            <label for="">Desea recibir notificaciones del Seminario de Cultura:<br>
                                <?php if($vector_dato[6]=="si"){   ?>
                                <input type="radio" value="si" name="desea" checked id="desea">SI
                                <input type="radio" value="no" name="desea" id="desea">NO
                                <?php }else{ ?> 
                                    <input type="radio" value="si" name="desea"  id="desea">SI
                                    <input type="radio" value="no" name="desea" checked id="desea">NO

                                <?php }   ?>
                            </label><br>

                            <div class="botones">
                                <div class="cancelar">
                                    <a href="index.php">Cancelar</a>
                                </div>
                                <div class="guardar">
                                    <input type="submit" value="Guardar">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </body>
            </html>

        
        <?php


    }else{
        echo "NO funciona";
    }

    
    
    ?>


