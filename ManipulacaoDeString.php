<?php
/* MANIPULAÇÃO DE STRINGS  */

$palavra = "<br> Beleza pessoal";
//strlen - saber a quantidade de caracteres de uma string
// echo strlen("Oi pessoal");
echo strlen($palavra);

//str_word_count() - conta a quantidade de palavras
echo str_word_count($palavra);

//strrev(); - inverte a palavra 
echo strrev("Igor");

//strpos() - aponta a posição de uma palavra numa string contando pro caractere escrito
echo strpos("Oi tudo bom", "tudo");

//str_replace() - muda a palavra por outra
$frase = "<br> Olá Mundo";
echo str_replace("Mundo","Igor", $frase);

$data = "25-08-2021"; //25/08/2021
$dataFormatada = str_replace("-","/",$data);
echo "<br> Data antiga:$data <br> Data formatada:$dataFormatada";

?>