<?php
//VARIÁVEIS
$cor = "azul";
$cor = "vermelho";
//NÃO PODE INICIAR UMA VARIAVEL COM NUMEROS!!
$_cor= "amarelo";

echo $cor;
echo "<hr>", $_cor;

//----------------------------------------------

$x = 10;
$y = 5;

function teste(){
    global $x, $y, $z; //defindo como global, a variavel funciona na função e fora dela (global só funciona dentro de uma função!!)
    $z = $x + $y;
    echo "o valor de x da função é: $x <hr>"; //a variavel só funciona fora da função
}

teste();
echo "o valor de z fora é: $z";
?>