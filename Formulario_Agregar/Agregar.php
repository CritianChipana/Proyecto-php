<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR EMPLEADO</title>
    <link rel="stylesheet" href="estilo_agregar.css">
</head>
<body>

    <div class="contedor_a">
        <div class="contenedor_b">

            <form action="guradar.php" method="post">

                <label for="nombre">Nombre y Apellido:<br>
                    <input type="text" name="nombre" id="nombre">
                </label><br>

                <label for="email">Email:<br>
                    <input type="text" name="email" id="email">
                </label><br>

                <label for="telefono">Telefono(Optional):<br>
                    <input type="number" name="telefono" id="telefono">
                </label><br>

                <label for="departamento">Departamento:<br>
                    <select name="departamento" id="departamento">
                        <option value="null">Seleccione departamento</option>
                        <option value="Lima">Lima</option>
                        <option value="Arequipa">Arequipa</option>
                        <option value="Ayacucho">Ayacucho</option>
                    </select>
                </label><br>

                <label for="comentario">Comentario o Dudas:<br>
                    <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>
                </label><br>

                <label for="">Desea recibir notificaciones del Seminario de Cultura:<br>
                    <input type="radio" value="si" name="desea" id="desea">SI
                    <input type="radio" value="no" name="desea" id="desea">NO
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