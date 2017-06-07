<?php
require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);

//Carrega um usuario
// $root = new Usuario();
// $root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista buscando pelo login
//$busca = Usuario::search("ro");
//echo json_encode($busca);

//Carrega dados do usuaio logado
$user = new Usuario();
$user->login("root","!@#$");
echo $user;
?>