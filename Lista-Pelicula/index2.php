<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<form action = #  method="POST">
		<CENTER><H2>Lista de peliculas Vistas por Meses</H2></CENTER>
		<CENTER><select id="m" name="m">
			<option value="Enero">ENERO</option>
			<option value="Febrero">FEBRERO</option>
			<option value="Marzo">MARZO</option>
			<option value="Abril">ABRIL</option>
			<option value="Mayo">MAYO</option>
			<option value="Junio">JUNIO</option>
			<option value="Julio">JULIO</option>
			<option value="Agosto">AGOSTO</option>
			<option value="Setiembre">SETIEMBRE</option>
			<option value="Octubre">OCTUBRE</option>
			<option value="Noviembre">NOVIEMBRE</option>
			<option value="Diciembre">DICIEMBRE</option>
		</select></CENTER>
		<CENTER><input type="submit" value="ENVIAR" name="p"></CENTER>
    </form>
    


<?php

if ($_POST){
        
    $cant=["Enero"=>["3"],"Febrero"=>["4"],"Marzo"=>["3"],"Abril"=>["1"],
                "Mayo"=>["10"],"Junio"=>["20"],"Julio"=>["100"],"Agosto"=>["200"],
                "Setiembre"=>["11"],"Octubre"=>["12"],"Noviembre"=>["13"],"Diciembre"=>["15"]];
    #echo $cant["Enero"];

    $films = ["Enero"=>["1.jupiter","2.la mascara","3.guerra mundial z"],
            "Febrero"=>["1.THOR","2.Los vengadores","3.Frozen","4.Peter Pan"],
                "Marzo"=>["1.La bruja","2.La guerra del pacifico","3.Transformers"],
                "Abril"=>["1.La sirenita"],
                "Mayo"=>["1.Startreck"],
                "Junio"=>["1.Shreck","2.Malefica"],
                "Julio"=>["1.Rapidos y furiosos"],
                "Agosto"=>["1.Guason","2.Escuadron suicida"],
                "Setiembre"=>["1.Un lugar en el silencio"],
                "Octubre"=>["1.Parasitos"],
                "Noviembre"=>["1.El gran Asalto"],
                "Diciembre"=>["1.Aves de presa"] ];
                
                echo "<br><CENTER> Peliculas Vistas Mes de ".$_POST["m"]." ";
                echo "<br><CENTER> Cantidad: ";

                foreach ($cant[$_POST["m"]] as $total) {
                    echo " ".$total;
                }
                foreach ($films [$_POST["m"]] as $peliplus) {
                echo "<br><CENTER>".$peliplus;
                }

}
?>

</body>
</html>