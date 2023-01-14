<?php

    session_start();

    include_once('config.php');

    $username = $_SESSION['username'];

    // $id = $conexao->query("SELECT id FROM usuarios WHERE username = $username");

    $id = $_SESSION['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";
    $result = $conexao->query($sql);

    header('Location: index.php');

?>