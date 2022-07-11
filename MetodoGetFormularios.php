<?php
// if(isset($_GET["nome"])&&isset($_GET["idade"])){
//     $nome = $_GET['nome'];
//     $idade = $_GET['idade'];
//     echo "<h1>O nome é $nome e a idade $idade </h1>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" action="RecebeGet.php">
        <input type="text" name="nome" placeholder="Digite seu nome aqui"><br><br>
        <input type="text" name="idade" placeholder="Digite sua idade aqui">
        <hr> <button type="submit"> Enviar</button>
    </form>
</body>

</html>