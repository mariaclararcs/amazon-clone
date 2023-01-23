<?php
include("database.php");

if(isset($_POST['email']) || isset($_POST['password'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $sqlcode = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $sqlquery = $mysqli->query($sqlcode) or die("Falha na conexão do SQL: " . $mysqli);
    $quantidade = $sqlquery->num_rows;
    if($quantidade==1){
        $usuario = $sqlquery->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION["name"] = $usuario["name"];
        $_SESSION["id"] = $usuario["id"];
        header("Location: test.php");
    }else{
    echo "Falha ao realizar o login";
    }
}
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
    <div id="container-login">
        <img src="img/logodois.png" class="logodois">
        <div class="login">
            <form method="post" action="#">
                <h3>Fazer login</h3>
                <b><p class="tagemail">E-mail</p></b>
                <input type="email" name="email" placeholder="Digite seu email" class="campoemail">
                <b><p class="tagsenha">Senha</p></b>
                <input type="password" name="password" placeholder="Digite sua senha" class="camposenha">
                <input type="submit" name="enviar" value="Continuar" class="btncontinuar">
            </form>
        </div>
    </div>
</body>
</html>