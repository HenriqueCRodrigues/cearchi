<?php 
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";
	$id = $_SESSION['id_user'];
	$sql_listar_usuario = mysql_query("SELECT * FROM usuario like '$id'");

//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:



// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome_user = $_POST['nome_user'];
$telefone_user = $_POST['telefone_user'];
$email_user = $_POST['emai_user'];
$rua_user = $_POST['rua_user'];
$numero_user = $_POST['numero_user'];
$bairro_user = $_POST['bairro_user'];
$cidade_user = $_POST['cidade_user'];
$estado_user = $_POST['estado_user'];
$cep_user = $_POST['cep_user'];
$rg_user = $_POST['rg_user'];
$sexo_user = $_POST['sexo_user'];


//Gravando no banco de dados !

 if (strcmp($nome_user, '') == 0 ||  strcmp($telefone_user, '') == 0 ||  strcmp($email_user, '') == 0 || strcmp($rua_user, '') == 0 || strcmp($numero_user, 0) == 0 || strcmp($bairro_user, '') == 0 ||  strcmp($cidade_user, '') == 0 || strcmp($estado_user, '') == 0 || strcmp($cep_user, '') == 0 || strcmp($rg_user, '') == 0) 
	{
	// Script de Alerta
	echo '<script>alert("Todos os campos tem que ser preenchidos.")</script>';	
	echo '<script>location.href="changeinf.php"</script>';

	}

 else
 	{
 	 	$sql_atualizar_usuario = mysql_query("UPDATE usuario SET nome_user = '$nome_user',  telefone_user = '$telefone_user', rua_user = '$rua_user', numero_user = '$numero_user', bairro_user = '$bairro_user', cidade_user = '$cidade_user', estado_user = '$estado_user', cep_user = '$cep_user', emai_user = '$email_user', rg_user = '$rg_user', sexo_user = '$sexo_user' WHERE id_user = '$id' ") or die(mysql_error());
 	 
 	 	echo '<script>alert("Alterações realizada com sucesso\nRedirecionando para seu perfil.")</script>';
 	 	echo '<script>location.href="perfil.php";</script>';
 	} 

?>