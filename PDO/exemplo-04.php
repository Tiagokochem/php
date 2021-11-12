<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE  tb_usuarios SET deslogin = :LOGIN, desenha = :PASSWORD where idusuario = :ID");

$login = "joao";
$password = "112332456";
$id = "2";


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "Inserido ok!";






?>