<?php

    if( 10 > 5){
        echo "Entrou no if. <br>";
    }

    else if ( 10 > 6){
        echo "Entrou no else if. <br>"; // Os 2 sao true
    }


    
    if( 10 < 5){
        echo "Entrou no if 2. <br>";
    }
    
    else if ( 10 > 6){
        echo "Entrou no else if 2. <br>"; // Apenas o else if é true
    }



     
    if( 10 < 5){
        echo "Entrou no if 3. <br>";
    }
    
    else if ( 10 < 6){
        echo "Entrou no else if 3. <br>"; // Ambos são false

    } 
    else{
        echo "Entrou no else. <br>";
    }


    $a = 10; 
    $b = 5;
    $msg = "Entrou no if";
    
    if( $a > $b){
        echo $msg;
        echo "<br>";
    }
    
    else if ( 10 < 6){
        echo "Entrou no else if 3. <br>"; // Ambos são false

    } else if ( 11 > 1){
        echo "Entrou no else if 2. 4<br>";
    }

    else{
        echo "Entrou no else. <br>";
    }




