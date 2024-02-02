<?php

    $a = 10;
    $b = 20;

    $nome = "Joao <br>";
   

    if(is_int($a) || is_float($a)){

        $multiplicacao = $a * 2;

        if($multiplicacao > 100){

            echo "O numero é maior que 100 <br>";
        }
        else{
            
            echo "O número não é maior que 100. <br>";
        }
    }

    else{
        echo "Não é um número. <br>";
    }



    if(is_int($b) || is_float($b)){

        $multiplicacao2 = $b * 2;

        if($multiplicacao2 > 100){

            echo "O numero é maior que 100 <br>";
        }
        else{
            
            echo "O número não é maior que 100. <br>";
        }
    }

    else{
        echo "Não é um número. <br>";
    }

    if(is_int($nome) || is_float($nome)){

        $multiplicacao = $nome * 2;

        if($multiplicacao > 100){

            echo "O numero é maior que 100 <br>";
        }
        else{
            
            echo "O número não é maior que 100. <br>";
        }
    }

    else{
        echo "Não é um número. <br>";
    }