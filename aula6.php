<?php
//TIPOS DE SAIDA-OUTPUT
$nome = "Igor";
$sobrenome = "Santos";
echo "O nome do usuário é $nome $sobrenome";
//Se usar aspas simples junto ao echo, as variaveis se tornam string
echo '<hr>O nome do usuário é $nome $sobrenome';
//Se cocatenar funciona como variável
echo '<hr>O nome do usuário é ' .$nome. ' ' .$sobrenome;
//Para ajudar em caso de usar aspas em elementos que precisam de aspas
echo "<a href='$nome'>"

//print tbm pode ser usado, mas é meio meh
?>