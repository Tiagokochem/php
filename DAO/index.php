<?php

require_once(config.php);

$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);
//$root = new Usuario();
//$root->loadbyId(3);

//echo $root;

//Carrega uma lista de usuarios 

//$lista = Usuario::getList();

//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login 

//$search = Usuario::search("jo");


//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;

/* 
Criando um novo usuário:

$aluno = new Usuario("aluno", "@alun0");

$aluno->insert();

echo $aluno; 
*/

$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("tiago", "123");

echo $usuario;






?>