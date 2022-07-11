<?php
if($_SERVER["REQUEST_METHOD"] == "Post"){
  //verificar se esta vazio o post nome 
  if(empty($_POST["nome"])){
    $erroNome = "Por favor, preencha o nome";
  }else{
    //pegar o valor vindo do post e limpar
    $nome = limpaPost($_POST["nome"]);
    //verificar se tem somente letras
    if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
      $erroNome = "Apenas aceitamos letras e espaços em branco!";
    }
  }

  //verificar se esta vazio o post email
  if(empty($_POST["email"])){
    $erroEmail = "Por favor, informe um e-mail";
  }else{
    $email = limpaPost($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $erroEmail = "E-mail inválido!";
    }
  }


}

function limpaPost($valor){
  $valor = trim($valor);
  $valor = stripslashes($valor);
  $valor = htmlspecialchars($valor);
  return $valor;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulário</title>
    <link href="css/estiloFormulario.css" rel="stylesheet">
</head>
<body>
    <main>
    <h1><span>AULA PHP</span><br>Validação de Formulário</h1>

     <form method="post">

        <!-- NOME COMPLETO -->
        <label> Nome Completo </label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <br><span class="erro"></span>

        <!-- EMAIL -->
        <label> E-mail </label>
        <input type="email" name="email" placeholder="email@provedor.com" required>
        <br><span class="erro"></span>

        <!-- SENHA -->
        <label> Senha </label>
        <input type="password" name="senha" placeholder="Digite uma senha" required>
        <br><span class="erro"></span>

        <!-- REPETE SENHA -->
        <label> Repete Senha </label>
        <input type="password" name="repete_senha" placeholder="Repita a senha" required>
        <br><span class="erro"></span>

        <button type="submit"> Enviar Formulário </button>

      </form>
    </main>
</body>
</html>