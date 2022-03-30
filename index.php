<?php

require_once("config.php");

//Trás a tabela do banco
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Chama por um login
//$root = new Usuario();
//$root->loadById(6);
//echo $root;

//Chama por uma lista
//$list = Usuario::getList();
//echo json_encode($list);

//Chama uma lista por um search
//$search = Usuario::searchList("o");
//echo json_encode($search)

//Listar usuario com login e senha validado
//$usuario = new Usuario();
//$usuario->login("Doug", "2468");
//echo $usuario;

//Inserindo usuario novo
$aluno = new Usuario("aluno", "@alun0");
//Com a criação de um metodo construtor para atribuir os valores de setDeslogin e setDessenha, pode passar os valores direto pelo instanciamento.
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno;



?>