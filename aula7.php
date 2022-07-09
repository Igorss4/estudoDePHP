<?php
/*
TIPOS DE DADOS
String, [Palavras]
Integer, [Inteiro, qualquer numero nao decimal]
Float, [Decimal, numeros decimais]
Boolean, [True e False]
Array, [Matriz]
Object, [Objeto]
NULL, [Nulo]
*/


//STRING
$string = "Igor";
$exemplo = "<h1>Hello World</h1>";


//INTEGER
$integer = 345;
$exemploInt = -5;
$exemploInt2 = $integer + $exemploInt;


//FLOAT
$float = 3.5;


//BOOLEAN
$boolean = true;


//ARRAY (MATRIZES)
$array = array("algo",2022,"alguma coisa");


//OBJECT (OBJETOS)
class carro {
    public $cor;
    public $modelo;
    public function __construct($cor,$modelo){
        $this->cor = $cor;
        $this->modelo = $modelo;
    }
    public function mensagem(){
        return "O carro é $this->cor e o modelo é $this->modelo<hr>";
    }
}

$carro = new carro("Branco","Fusca");
$carro2 = new carro("Preto","Chevete");
echo $carro->mensagem();
echo $carro2->modelo;

//NULL (Nulo)
$x = "oi";
$x = null;
var_dump($x);