<?php
$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES(?,?)");

$stmt->bind_param("ss", $login, $senha);//parametros, ex string. se fosse int, ii

$login = "user";
$senhha = "12345";

$stmt->execute();

?>