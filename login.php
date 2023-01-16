<?php
include("database.php");

//pegando o email e a senha do formulário e filtrando eles
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

//verificando se o campo email ou senha do formulário está vazio
if(empty($email) || empty($password)){
    header('Location: login.php');
    return;
}

//resgatando e verificando email do usuário com função criada no fetch.php
$user = findBy('usuarios', 'email', $email);

//verificando se não existe nada na variável user
if(!$user){
    header('Location: login.php');
    return;
}

//verificando se a senha não é igual a do banco de dados
if(!password_verify($password, $user->password)){
    header('Location: login.php');
    return;
}

//guardando todos os dados da variável user na variável super global $_SESSION['logged]
$_SESSION['logged'] = $user;

//redirecionando o usuário caso o email e a senha seja igual a do banco de dados
header('Location: test.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon.com. Spend less. Smile more.</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/icon.png" type="image/png">
</head>
<body>
    <img src="img/logodois.png" class="logodois">
    <div class="login">
        <h3>Fazer login</h3>
        <form method="post" action="#">
            <input type="email" name="email" placeholder="Digite seu email">
            <input type="password" name="password" placeholder="Digite sua senha">
            <input type="submit" name="enviar" value="Login">
        </form>
    </div>
</body>
</html>