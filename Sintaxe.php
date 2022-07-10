<?php
$usabilidade = "E pode ser usado de diversas formas!"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>
<body>
    <h1>Hello World!</h1>

    <?php $ativado = "nao"; ?>
    <?php if($ativado == "sim"){ ?>
        <h1>PHP é muito versátil</h1> 
        <?php }else{ ?>
            <h1>Versatil de mais!</h1>
            <?php } ?>
            
            <?php echo "<h2>$usabilidade</h2>"; ?>

            <?php echo "Tabuada do 6: <hr>";
            for($i=0; $i<=10; $i++){
                echo  $i*6;
                echo "<hr>";
            }
             ?>
            
</body>
</html>