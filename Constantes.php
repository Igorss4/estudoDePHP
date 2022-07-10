<?php
// CONSTANTES
define("constante",5); // definir o nome e o valor da constante, nao se atribui outro valor a constante
echo constante;

function teste(){
    echo constante;
}
teste();

define("jogos", ["lol","rocket","fifa"]);
echo jogos[2];

?>