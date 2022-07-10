<?php
// ARRAYS (MATRIZES)
$carros = array("Gol","Uno","Fusca");
$carros = ["Fusca","Uno","Gol","Brasilia"];

$carros[0] = "Ferrari"; // para mudar um valor da matriz
echo "A quantidade na matriz é: ".count($carros). "<br>";

//para listar todos os itens da matriz
$quantidade = count($carros);
for($i = 0; $i < $quantidade; $i++){
    echo $carros[$i];
    echo "<br>";
}

foreach($carros as $carro){
    echo $carro."<br>";
}

$idade = array("Igor"=>"30","Maria"=>"15","Pedro"=>"60"); // atribuição por chave, e nao por posição
echo $idade["Maria"]."<br>"; //chamando a chave, o valor 15 é impresso
asort($idade); // pega o valor da chave e coloca em ordem crescente 
arsort($idade); // reverte a ordem do valor 
ksort($idade); // pega por ordem a chave e nao o valor 
krsort($idade); // reverte a ordem da chave
foreach($idade as $chave=> $valor){
    echo "A nome é $chave e a idade é $valor <br>";
}

$frutas = array("Morango","Abacaxi","Melão","Uva","Abacate");
sort($frutas); //coloca em ordem alfabetica, ou ordem crescente numerica
rsort($frutas); //reverte a ordem alfabetica e numerica decrescente

foreach($frutas as $fruta){
    echo $fruta."<br>";
}




?>
