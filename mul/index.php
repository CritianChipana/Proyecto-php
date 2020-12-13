<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">

	<title>formulario</title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

    <form action="" method ="post">
        <h1>TABLA DE MULTIPLICAR</h1><br>

            <label for="">Tabla a mostrar:</label>
            <input type="text" name="n1"><br>

            <label>Máximo multiplicador</label>
            <input type="text" name="n2"><br>

            <input type="submit" name="calcular" value="Ver tabla de multiplicar">	
    </form >

            <?php
                include("MULYRA.php");
                echo validar_campos();
            ?>

</body>
</html>