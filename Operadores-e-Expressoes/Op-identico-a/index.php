<?php

    if(5 == "5"){
        echo "5 é 5 1<br>"; //false
    }

    //operador de identico

    if(5 === "5"){
        echo "5 é 5 2<br>"; //verificando
    }

    
    if(5 === 5){
        echo "5 é 5 3<br>"; // correto pois não possui mais a string
    }


    $a = 4;
    $b = 4;
    $c = "4";

    if( $a === $b){
        echo " A é igual a B <br>";
    }

    if( $a === $c){
        echo " A é igual a C <br>"; // false
    }