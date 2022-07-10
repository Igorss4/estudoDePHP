<?php
/* PRINCIPAIS LOOPS

    while - repete enquanto a condição for true
    
    do...while - executa m bloco, e depois repete o loop desde
    que a condição seja verdadeira
    
    for - repete um determinado numero de vezes
    
    foreach - executa algo para cada item dentro de uma matriz
    */

    //WHILE
    $x = 1;

    while($x <=5){
        echo "O numero é: $x <br>";
        $x++;
    }

    //DO...WHILE
    $y = 1;

    do{
        echo "O numero é: $y <br>";
        $y++;
    } while($y <= 5);

    //FOR
    for($z = 0; $z <= 10; $z++){
        echo "O numero é: $z <br>";
    }

    //FOREACH
    $cores = ["azul", "amarelo", "verde", "vermelho"];

    foreach($cores as $valor){
        echo "A cor é $valor <br>";
    }
?>