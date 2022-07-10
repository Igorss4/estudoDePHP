<?php
// FUNÇÕES MATEMÁTICAS
$invertido = -122;
$numeros = [1,10,40,5000,-20,15];
$arredondar = 10.65;


echo pi(); //busca o numero pi

echo min($numeros); // busca o menor numero de um array
echo max($numeros); // busca o maior numero de um array

echo abs($invertido);// mostra o valor invertido de um numero, se positivo mostra negativo

echo sqrt(81); //mostra o resultado da raiz

echo round($arredondar); // ele arredonda o numero float a partir do .50

echo rand(1,10); // gera um numero aleatório, incluido os que estão de parametro

?>