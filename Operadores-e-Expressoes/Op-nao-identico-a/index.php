<?php

    $a = 1;
    $b = "1";

    if( $a != $b){
        echo "A é diferente de B. 1 <br>";
    }

    
    if( $a !== $b){
        echo "A é diferente de B. 2 <br>";
    }

    
    if( 1 !== 2){
        echo "Não é idêntico. 3 <br>";
    }

    if( [] !== "teste"){
        echo "Não é idêntico. 4 <br>";
    }