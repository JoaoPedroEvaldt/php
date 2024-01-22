<?php

   if( 3 == 3) {
    echo "Comparação verdadeira 1 <br>"; //correta
   }

   if( 3 == 4) {
    echo "Comparação verdadeira 2 <br>";
   }

   $a = 12;
   $b = 12;
   $c = 100;

   if( $a == $b) {
    echo "Comparação verdadeira 3 <br>"; // correta
   }

   if( $a == $c) {
    echo "Comparação verdadeira 4 <br>";
   }

   $nome = "João Pedro";
   $nomeDoSistema = "João Pedro";

   if( $nome == $nomeDoSistema){
    echo "O nome coincide !";
   }