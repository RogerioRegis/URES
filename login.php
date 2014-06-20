<?php
session_start();
$login = "rog_reg@hotmail.com";
$senha = "123";

if($login== $_POST['login'] and $senha== $_POST['senha']){
    $_SESSION['logado'] = true;
    
    header("location: index.php");
}
 else {
    echo 'Não Logou!';
}
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="image/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
        
  </head>
  
   <title>Login</title>
   
    <div class="form-signin-heading">
      <div class="col-lg-6">
          
        <form method="post" action="index.php" id="formlogin" name="formlogin" >
          
        <h3 class="form-signin-heading">Entrar</h3>
        
        <input type="email" name="login" class="form-control" placeholder="Email" required autofocus><br/>
        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
        
        <label class="checkbox"><input type="checkbox" value="remember-me"> Lembrar senha</label>
        
        <button class="btn btn-success" type="submit">Entrar</button >

        <ul class="list-unstyled">
            <br/>
            <li><a href="cadastro.php">Criar uma conta</a></li>
            <li><a href="cadastro.php">Esqueceu seu usuário?</a></li>
            <li><a href="cadastro.php">Esqueceu sua senha?</a></li>
        </ul>
        
       </form>                
      </div>
    </div>
