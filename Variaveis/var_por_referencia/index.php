<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y =15;

echo "Atribuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";


$nome = "Joao";

$nome2 =& $nome;

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "Pedro";

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";
