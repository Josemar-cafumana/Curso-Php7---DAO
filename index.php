<?php

require_once "config.php";

/*
$conn = new Sql();

$users = $conn->select("SELECT * FROM users");

echo json_encode($users);

*/

// Carrega apenas um usuario
// $root = new Usuario();
// $root->loadById(1);
// echo $root;



// Carrega todos os usuarios

// $data = Usuario::getAllData();

// echo json_encode($data);


// Pesquisa de Usuarios pelo nome

// $data = Usuario::Search("alic");

// echo json_encode($data);


// Exemplo de validação de Login

$usuario = new Usuario();

$usuario->Login("Josemar Cafumana","rjosemar-cafumana@hotmail.com");

echo $usuario;






?>