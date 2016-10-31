<?php 
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";
	$sql_listar_usuario = mysql_query("SELECT * FROM usuario ");

//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:



// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome_user	= $_POST ["nome_user"];	//atribuição do campo "nome" vindo do formulário para variavel	
$sexo_user	= $_POST ["sexo_user"];	//atribuição do campo "sexo" vindo do formulário para variavel
$rg_user = $_POST["rg_user"];  //atribuição do campo "RG" vindo do formulário para variavel
$telefone_user = $_POST ["telefone_user"];	//atribuição do campo "telefone" vindo do formulário para variavel
$login_user	= $_POST ["login_user"];	//atribuição do campo "login" vindo do formulário para variavel
$senha_user	= $_POST ["senha_user"];	//atribuição do campo "senha" vindo do formulário para variavel
$rua_user = $_POST ["rua_user"];	//atribuição do campo "endereco" vindo do formulário para variavel
$numero_user = $_POST["numero_user"]; //atribuição do campo "numero" vindo do formulário para variavel
$bairro_user = $_POST ["bairro_user"];	//atribuição do campo "bairro" vindo do formulário para variavel
$cidade_user	= $_POST ["cidade_user"];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado_user	= $_POST ["estado_user"];	//atribuição do campo "estado" vindo do formulário para variavel
$cep_user = $_POST["cep_user"];
$id = $_SESSION['id_user'];


//Gravando no banco de dados !

 
 

	$sql_atualizar_usuario = mysql_query("UPDATE usuario SET nome_user = '$nome_user', sexo_user = '$sexo_user', rg_user = '$rg_user', telefone_user = '$telefone_user', login_user = '$login_user', senha_user = '$senha_user', rua_user = '$rua_user', numero_user = '$numero_user', bairro_user = '$bairro_user', cidade_user = '$cidade_user', estado_user = '$estado_user', cep_user = '$cep_user' WHERE id_user = '$id' ") or die(mysql_error());
	

 




 ?>