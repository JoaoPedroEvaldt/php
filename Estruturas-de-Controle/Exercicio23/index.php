<?php

    
$idade1 = 17;
$idade2 = 14; 
$idade3 = 19;

$maioridade = 18;

$mensagem = "Você é maior de idade";

if( $idade1 >= $maioridade){
    echo "1 - ";
    echo $mensagem;
}

else{
    echo "1 - ";
    echo "Você é ainda é menor de idade <br>";
}


if( $idade2 >= $maioridade){
    echo "2 - ";
    echo $mensagem;
}

else{
    echo "2 - ";
    echo "Você é ainda é menor de idade <br>";
}


if( $idade3 >= $maioridade){
    echo "3 - ";
    echo $mensagem;
}

else{
    
    echo "Você é ainda é menor de idade <br>";
}
