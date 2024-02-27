<?php

    $arr = [ 5, "Joao", true, false, "Olá", 12.5, "testando", true, [], "bom dia", 5, 10, "Alô"];

    $x = count($arr);
    $y = 0;

    while( $y < $x){
        if(is_string($arr[$y])){
            echo $arr[$y] . "<br>";
        }

        $y ++;
    }