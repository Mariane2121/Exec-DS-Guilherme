<?php

    $numero1 = 200;
    $numero2 = 95;
     
    $resultado = $numero1 - $numero2;

    echo "resultado =" . $resultado;
    echo "<br>";
    if( $resultado > 10 ){
        echo "resultado maior que 10.";
    }else{
        if( $resultado < 10)
        echo "resultado menor que 10.";
    }
    exit;
?>
