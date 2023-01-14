<?php

    // if(isset($_POST['submit']))
    // {

    //     include_once('config.php');

    //     $username = $_POST['username'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $gender = $_POST['gender'];
    //     $birthday = $_POST['birthday'];
        
    //     // $result = mysqli_query($conexao, "INSERT INTO usuarios (username, email, password, gender, birthday) 
    //     // VALUES ('$username','$email','$password','$gender','$birthday')");

    // }

    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Responsivo</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="info none">
        <span>
            Conecte para interagir com outras pessoas
        </span>

        <img class="logo" src="img/Logo-PurpleGuy-3.svg" alt="alternative">
    </div>

    <div class="login">
        <form action="testLogin.php" method="POST">
            <h2>Login</h2>

            <label for="email">
                <span>Email</span>
                <input class="input email" id="email" type="email" placeholder="Email" name="email" required>

            </label>

            
            <label for="password">
                <span>Password</span>
                <input class="input password" id="password" type="password" placeholder="Password" name="password"
                    required>
            </label>

            
            <?php if(isset($_SESSION['erro'])){ ?>
                
                <div class="div-console">
                    <p>ERROR: Incorrect email or password</p>
                </div>
                
            <?php 
                } 
                unset($_SESSION['erro']);
            ?>
            
            <input class="button first" type="submit" name="submit" value="Login">

        </form>

        <div class="div-line">
            <div class="line"></div>
            <span class="ou">or</span>
            <div class="line"></div>
        </div>

        <a href="signup.php"><button class="button">Create new account</button></a>
    </div>

    <div id="ultimo"></div>
</body>

</html>