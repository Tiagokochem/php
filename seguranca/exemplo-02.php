<?php

$id = (isset($_GET["id"]))?$_GET["id"]:3;

if(!is_numeric($id)|| strlen($id) > 5 ){
    exit("Pegamos você!");
}

$conn = mysqli_connect("localhost", "root", "root", "dbphp7");

$sql ="SELECT * from tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_object($exec)){
    var_dump($resultado);
}


?>