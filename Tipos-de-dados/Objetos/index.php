<?php

Class Pessoa {
    function falar()
    {
        echo "Olá!";
    }

  
}

$joaopedro = new Pessoa();

$joaopedro->nome = "Joao";

echo $joaopedro->nome;

echo "<br>";

$joaopedro->falar();

