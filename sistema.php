<?php

    session_start();

    include_once('config.php');

    if((!isset($_SESSION['email']) == true) and (!isset($_SSESION['password']) == true))
    {
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: index.php');
    }

    
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $gender = $_SESSION['gender'];
    $birthday = $_SESSION['birthday'];
    
    // $id = $conexao->query("SELECT id FROM usuarios WHERE username = $username");
    // $_SESSION['id'] = $id;
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/sistema.css">

    <title>Sistema</title>
</head>

<body>
    <header>
        <div class="nav-1">
            <img src="img/icon.jpg" alt="Icon">

            <span>
                <?php echo "$username" ?>
            </span>
        </div>

        <a href="sair.php"><button>Quit</button></a>
    </header>

    <main>
        <?php
            echo "<br>";
            
            echo "Seja bem vindo, $email";
            echo "<br>";
            echo "<br>";
            echo "<br>";

            echo "Dados:";
            echo "<br>";
            echo "-------";
            echo "<br>";
            echo "<br>";

            echo "ID:  $id";
            echo "<br>";

            echo "Username:  $username";
            echo "<br>";

            echo "Email:  $email";
            echo "<br>";

            echo "Password:  $password";
            echo "<br>";

            echo "Gender:  $gender";
            echo "<br>";

            echo "Birthday:  $birthday";
            echo "<br>";
        ?>
    </main>

    <div class="delete-div">
        <a href="delete.php"><button id="delete-account">Delete Account</button></a>
    </div>

    <div id="ultimo"></div>
</body>

</html>