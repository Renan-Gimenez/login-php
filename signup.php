<?php
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
            <h2>Sign Up</h2>

            <label for="username">
                <span>Username</span>
                <input class="input username" maxlength="30" id="username" type="text" placeholder="Username"
                    name="username" required>
            </label>

            <?php if(isset($_SESSION['erro-username-cadastrado'])){?>

                <div class="div-console">
                    <p>ERROR: Username already registered</p>
                </div>

            <?php 
                }
                unset($_SESSION['erro-username-cadastrado']);
            ?>

            <label for="email">
                <span>Email</span>
                <input class="input email" id="email" type="email" placeholder="Email" name="email" required>
            </label>

            <?php if(isset($_SESSION['erro-email-cadastrado'])){?>

                <div class="div-console">
                    <p>ERROR: E-mail already registered</p>
                </div>

            <?php
                }
                unset($_SESSION['erro-email-cadastrado']);
            ?>

            <label for="password">
                <span>Password</span>
                <input class="input password" id="password" type="password" placeholder="Password" name="password"
                    required>
            </label>

            <span>Gender</span>
            <br>
            <div class="radio">
                <label for="male">
                    <input type="radio" id="male" name="gender" value="male" required>
                    <span>Male</span>
                </label>

                <label for="female">
                    <input type="radio" id="female" name="gender" value="female" required>
                    <span>Female</span>
                </label>

                <label for="other">
                    <input type="radio" id="other" name="gender" value="other" required>
                    <span>Other</span>
                </label>
            </div>

            <span>Birthday</span>
            <br>
            <div>
                <input class="birthday" type="date" name="birthday" required>
            </div>


            <div class="div-buttom">
                <a href="index.php"><input class="button back" type="button" name="submit" value="Back"></a>
                <input class="button signup" type="submit" name="submit" value="Sign Up">

            </div>
            <input type="hidden" name="newaccount">
        </form>
    </div>

    <div id="ultimo"></div>
</body>

</html>