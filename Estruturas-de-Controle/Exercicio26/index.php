<?php

    $velocidade = 31;
    $velocidade_maxima = 40;

    if( $velocidade < $velocidade_maxima){
        echo " Você está dentro do limite permitido. <br>";
    }
    else if ( $velocidade == $velocidade_maxima){
        echo "Cuidado, você está no limite maximo permitido. <br>";
    }
    else{
         echo "Você foi multado, velocida acima do permitido. <br>";
    }