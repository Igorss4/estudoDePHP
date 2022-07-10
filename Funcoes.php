<?php
// FUNÇÕES functions()

function escreverMensagem($nome){ //nao é case sensitive
    echo "Olá tudo bom $nome?<br>";
}
//call - chamar a função
escreverMensagem("Igor");
escreverMensagem("Joao");

function soma($valor1, $valor2){ //nao é case sensitive
    return $valor1 + $valor2 . "<br>";
}
echo soma(55,62);

function somaInt(int $valor3, int $valor4){ //nao é case sensitive
    return $valor3 + $valor4 . "<br>";
}
echo somaInt(66,62);

function fazerCafe($tipo = "Cappuccino"){
    return "Fazendo uma xícara de: $tipo <br>";
}
echo fazerCafe("Expresso");
echo fazerCafe();




?>