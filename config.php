<?php

    // $dbHost = 'localhost';
    // $dbUserName = 'renan';
    // $dbPassword = 'admin';
    // $dbName = 'username';

    $dbHost = 'localhost';
    $dbUserName = 'id18293079_admin';
    $dbPassword = 'JuniorSenha1!';
    $dbName = 'id18293079_projetorenan';

    $conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
        print_r('<br>');
        print_r('<br>');
    }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    //     print_r('<br>');
    //     print_r('<br>');
    // }

?>