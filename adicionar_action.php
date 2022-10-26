<?php


require 'config.php';


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


if ($nome && $email) {

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();
    if ($sql->rowCount() > 0) {
        header("location: adicionar.php?status=emailCadastrado");
        exit;
    } else {
        $sql = $pdo->prepare("INSERT INTO usuarios (nome,email)
    VALUES (:nome, :email)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->execute();
        header("location: adicionar.php?status=sucesso");
        exit;
    }
} else {
    header("location: adicionar.php?status=falha");
    exit;
}
