<?php

$db_name = 'crudphp';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_type = 'mysql';

$pdo = new PDO("$db_type:dbname=$db_name;host=$db_host", $db_user, $db_pass);

$sql = $pdo->query ("SELECT * FROM usuarios");

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);




