<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


if ($nome && $email && $id) {

    $sql = $pdo->prepare("UPDATE usuarios SET nome=:nome, email = :email WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);    
    $sql->execute();

    header("location: index.php");
    exit;

} else {
    header("location: adicionar.php?status=falha");
    exit;
}
