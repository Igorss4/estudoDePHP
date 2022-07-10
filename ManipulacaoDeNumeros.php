<?php
//  MANIPULAÇÃO DE NÚMEROS
$valor = "150" + 20;
var_dump($valor);

$valorFloat = 4 * 2.5;
$valorConvertido = (int) $valorFloat;
var_dump($valorConvertido);

$valor1 = 100;
$valor2 = 5.75;
$valor3 = "123";

var_dump(is_numeric($valor3));
var_dump(is_int($valor1));
var_dump(is_float($valor2));

?>