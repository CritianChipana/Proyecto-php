<?php

    /* if($_POST['idempleado']){
        echo "funciona con post";
    }else{
        echo "no funciona";
    } */


    if($_GET['idempleado']){
    

        $id = $_GET['idempleado'];

        echo "esto funciona con get $id ";
    }else{
        echo "NO funciona";
    }

    
    
    ?>

<input type="text"  value="<?php echo $id?>" name="" id="">

