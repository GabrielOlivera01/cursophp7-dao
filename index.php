<?php

require_once ("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

//Carrega 1 Usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

//Carrega uma lista de Usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);


//Carrega uma lista de usuarios carregando pelo login
// $search = Usuario::search("G"); 
// echo json_encode($search);

//Carrega usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("Gabriel Oliveira", "go1235");

echo $usuario;


?>