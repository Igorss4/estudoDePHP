<?php
// GLOBAL
$a = 10;
$b = 20;

function soma(){
    global $a, $b, $c; // transforma a variavel em global podendo ser usada em todo o codigo
    // $GLOBALS["c"] = $GLOBALS["a"] + $GLOBALS["b"];
    // $c = $a + $b;
}
soma();
echo $c;

//SERVER
echo $_SERVER["PHP_SELF"]; //mostra o caminho do projeto 
echo "<br>";
echo $_SERVER["SERVER_NAME"]; // onde esta sendo rodado a API
echo "<br>";
echo $_SERVER["HTTP_HOST"]; //onde esta sendo rodado a API
echo "<br>";
echo $_SERVER["REMOTE_ADDR"]; //mostra o servidor IP do servidor
echo "<br>";
echo $_SERVER["HTTP_USER_AGENT"]; //Informações da pessoa que esta acessando a pagina 

foreach ($_SERVER as $chave => $valor){ //MOSTRA TODO OS COMANDOS DE _SERVER!!
    echo "<strong>$chave</strong> : $valor <br>";
}

?>