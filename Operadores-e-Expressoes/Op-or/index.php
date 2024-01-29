<?php

    if( 5 > 2 || 3 < 4){
        echo "A comparação 1 é verdadeira"; // true e true
    }

    
    if( 5 > 2 || 30 < 4){
        echo "A comparação 2 é verdadeira"; // true e false
    }

    
    if( 5 > 20 || 3 < 4){
        echo "A comparação 3 é verdadeira"; // false e true
    }

    
    if( 5 > 20 || 30 < 4){
        echo "A comparação 4 é verdadeira"; // false e false
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if( $a > $b || $d > $c){
        echo "A comparação 5 é verdadeira <br>";
    }

    if (( $a > $b && $d < $c ) || $c < $d){
        echo "A comparação 6 é verdadeira <br>";
    }