<?php

    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;

    if($a > $b){
        echo " A é maior que B. <br>"; //false
    }
    
    if($b > $a){
        echo " B é maior que A. <br>"; //true
    }

    
    if($d >= $c){
        echo " D é maior ou igual que a  C. <br>";
    }

     
    if($d >= $a){
        echo " D é maior ou igual que A. <br>";
    }