<?php
// $_GET
if (isset($_GET["nome"])) {
    $nome = htmlspecialchars($_GET["nome"]);
} else {
    $nome = "Mundo!";
}

if(isset($_GET["cor"])){
    $cor = htmlspecialchars($_GET["cor"]);
}else{
    $cor = "white";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        background: <?php echo $cor; ?>;
    }
</style>
</head>
<body>
    <h1>Olá <?php echo $nome; ?></h1>

    <a href="MetodoGet.php?nome=Pedro&cor=blue">Ir para Pedro</a>
    <a href="MetodoGet.php?nome=Maria&cor=yellow">Ir para Maria</a>
    <a href="MetodoGet.php?nome=Caio&cor=red">Ir para Caio</a>


</body>

</html>