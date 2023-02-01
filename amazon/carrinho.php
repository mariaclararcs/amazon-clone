<?php
include("database.php");

$sqlcodee = "SELECT * FROM users";
$sqlqueryy = $mysqli->query($sqlcodee) or die("Falha na conexão do SQL: " . $mysqli);

if(isset($_POST["enviar"])){
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    
    if(empty($name) || empty($email) || empty($password)){
        if(empty($name)){
            echo "<font color='red'>Campo nome vazio!</font>";
        }
        if(empty($email)){
            echo "<font color='red'>Campo email vazio!</font>";
        }
        if(empty($password)){
            echo "<font color='red'>Campo senha vazio!</font>";
        }
    }else{
        $sqlcode = "UPDATE `users` SET `name`='$name',`password`='$password',`email`='$email' WHERE id='$id'";
        $sqlquery = $mysqli->query($sqlcode) or die("Falha na conexão do SQL: " . $mysqli);
        echo "Os dados foram enviados gata!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
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
    <div id="formulariogata">
        <form action="#" method="post">
            <input type="text" name="id" placeholder="id da gata" class="nomegata">
            <p>Qual seu nome, gata?</p>
            <input type="text" name="name" placeholder="nome da gata" class="nomegata">
            <p>Coloque seu email, gata</p>
            <input type="email" name="email" placeholder="email da gata" class="emailgata">
            <p>Agora a senha, gata</p>
            <input type="password" name="password" placeholder="senha da gata" class="senhagata">
            <input type="submit" name="enviar" value="Vire uma gata!" class="btngata">
        </form>
    </div>
    <div>
        <table>
            <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Senha</td>
            </tr>
            <?php
            while($a = mysqli_fetch_array($sqlqueryy)){
                echo "<tr>";
                echo "<td>" . $a['name'] . "</td>";
                echo "<td>" . $a['email'] . "</td>";
                echo "<td>" . $a['password'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>