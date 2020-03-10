<?php

    $numero1 = 200;
    $numero2 = 300;
     
    $resultado = $numero1 - $numero2;

    echo "resultado =" . $resultado;
    echo "<br>";
    if( $resultado > 0 ){
        echo "resultado positivo.";
    }else{
        if( $resultado < 0 )
        echo "resultado negativo.";
    }
    exit;
?>
