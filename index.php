<?php 

require_once("config.php");

//Carrega um usuario
/*$root = new Usuario();
$root->loadById(3);
echo $root;*/

//Carrega uma lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("ro");
echo json_encode($search);*/

//Carrega usuario usando login e senha
/*$usuario = new Usuario();
$usuario->login("root", "!@#$");
echo $usuario;*/

//Inserindo dados no banco, criando novo usuario
/*$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;*/

//Atualizando dados do banco
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;

 ?>