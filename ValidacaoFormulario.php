<?php
$erroNome = "";
$erroEmail = "";
$erroSenha = "";
$erroRepeteSenha = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
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

  //verificar se esta vazio o post senha
  if(empty($_POST["senha"])){
    $erroSenha = "Por favor, informe uma senha";
  }else{
    $senha = limpaPost($_POST["senha"]);
    if(strlen($senha) <6){
      $erroSenha = "A senha precisa ter no minimo 6 digitos";
    }
  }

  //verificar se esta vazio o post senha
  if(empty($_POST["repeteSenha"])){
    $erroRepeteSenha = "Por favor, informe a repetição da senha";
  }else{
    $repeteSenha = limpaPost($_POST["repeteSenha"]);
    if($repeteSenha !== $senha){
      $erroRepeteSenha = "Senhas diferentes!";
    }
  }

  if(($erroNome=="") && ($erroEmail=="") && ($erroSenha="") && ($erroRepeteSenha=="")){
    header('Location: Obrigado.php');
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
        <input type="text" <?php if(!empty($erroNome)){echo "class='invalido'";}?> <?php if(isset($_POST['nome'])){echo "value='". $_POST['nome']."'";} ?> name="nome" placeholder="Digite seu nome" >
        <br><span class="erro"><?php echo $erroNome;?></span>

        <!-- EMAIL -->
        <label> E-mail </label>
        <input type="email" <?php if(!empty($erroEmail)){echo "class='invalido'";}?> <?php if(isset($_POST['email'])){echo "value='". $_POST['email']."'";} ?> name="email" placeholder="email@provedor.com" >
        <br><span class="erro"><?php echo $erroEmail;?></span>

        <!-- SENHA -->
        <label> Senha </label>
        <input type="password" <?php if(!empty($erroSenha)){echo "class='invalido'";}?> <?php if(isset($_POST['senha'])){echo "value='". $_POST['senha']."'";} ?> name="senha" placeholder="Digite uma senha" >
        <br><span class="erro"><?php echo $erroSenha;?></span>

        <!-- REPETE SENHA -->
        <label> Repete Senha </label>
        <input type="password" <?php if(!empty($erroRepeteSenha)){echo "class='invalido'";}?> <?php if(isset($_POST['repeteSenha'])){echo "value='". $_POST['repeteSenha']."'";} ?> name="repeteSenha" placeholder="Repita a senha" >
        <br><span class="erro"><?php echo $erroRepeteSenha;?></span>

        <button type="submit"> Enviar Formulário </button>

      </form>
    </main>
</body>
</html>