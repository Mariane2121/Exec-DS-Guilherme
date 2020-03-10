<?php

    $numero1 = 100;
    $numero2 = 9;
     
    $resultado = $numero1 * $numero2;

    echo "resultado =" . $resultado;
    echo "<br>";
    if( $resultado < 10 ){
        echo "resultado menor que 10.";
    }else{
        if( $resultado > 10 && $resultado < 100)
        echo "resultado entre 10 e 100";
    }{
        if( $resultado > 100)
        echo "resultado maior que 100.";
    }
    exit;
?>
