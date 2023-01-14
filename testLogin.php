<?php

session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        include_once('config.php');
        
        if(isset($_POST['newaccount']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            
            $sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
            $sqlusername = mysqli_query($conexao, "SELECT * FROM usuarios WHERE username = '$username'");

            if(mysqli_num_rows($sqlusername) != 0){

                $_SESSION['erro-username-cadastrado'] = true;
                header('Location: signup.php');
            }else{
                
                if(mysqli_num_rows($sql) == 0){
                    $result = mysqli_query($conexao, "INSERT INTO usuarios (username, email, password, gender, birthday) 
                    VALUES ('$username','$email','$password','$gender','$birthday')");

                    $_SESSION['username'] = $username;
                    $_SESSION['gender'] = $gender;
                    $_SESSION['birthday'] = $birthday;

                    $id = $conexao->query("SELECT id FROM usuarios WHERE username = $username");

                    $_SESSION['id'] = $id;
    
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('Location: sistema.php');
    
                }
                else
                {
                    $_SESSION['erro-email-cadastrado'] = true;
                    header('Location: signup.php');
                }
            }
        }
        else
        {
            
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM usuarios WHERE email = '$email'";
            $result = $conexao->query($sql);

            $info = $result->fetch_assoc();

            ////$instrucaoSQL = "SELECT * FROM Usuario Where login = '' OR true = true;/* And password = '*/--'";////

            if(password_verify($password, $info['password']))
            {
                $_SESSION['id'] = $info['id'];

                $_SESSION['username'] = $info['username'];
                $_SESSION['email'] = $info['email'];
                $_SESSION['password'] = $info['password'];
                $_SESSION['gender'] = $info['gender'];
                $_SESSION['birthday'] = $info['birthday'];

                header('Location: sistema.php');
            }
            else
            {
                unset($_SESSION['id']);

                unset($_SESSION['username']);
                unset($_SESSION['email']);
                unset($_SESSION['gender']);
                unset($_SESSION['birthday']);

                $_SESSION['erro'] = true;
                
                header('Location: index.php');
                
                exit;
            }
                
        }

        exit;
    }

    header('Location: index.php');
    
?>