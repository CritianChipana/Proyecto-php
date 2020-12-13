<?php
    function multiplicar($n1,$n2){
		//return $n1*$n2;
		for($i=0;$i<=$n2;$i++){
			echo $n1 . " x " . $i . " = " . $n1*$i ."<br>";
		}
    }

    function validar_numeros($n1,$n2){
        if(is_numeric($n1) && is_numeric($n2)){
                return true;
        }else{
            return false;
        }
    }

    function validar_campos(){
        if(isset($_POST['n1']) && isset($_POST['n2'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];

            if(validar_numeros($n1,$n2)){
                echo multiplicar($n1,$n2);
            }else{
                echo "<span class='error'>Por favor ingrese numeros </span>";
            }
       }
    }


	
?>