<?php
	
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

	$id_terceiro = $_GET['id_terceiro'];
	$hora = $_POST['hora_servico'];
	$data = $_POST['data_servico'];
	$status = $_POST['status_servico'];
	$servico = $_GET['servico_ts'];
	$id_ss = $_GET['id_ss'];
	echo "$status";
	echo "$id_ss";

	if (strcmp($hora, '') == 0 || strcmp($data, '')==0) 
	{
		echo "<script>alert('Todos os campos tem que ser preenchidos')</script>";
	}

	else
	{
		$sql = mysql_query("UPDATE solicitacao_de_servico SET data_ss='$data', hora_ss='$hora', status_ss='$status' WHERE id_ss='$id_ss' ");
		echo "<script>alert('Solicitação Alterada com Sucesso')</script>";
		echo "<script>location.href='Visualizar_solicitacao.php?id_terceiro=".$id_terceiro."&servico_ts=".$servico."&status_servico=".$status."&id_ss=".$id_ss."'</script>";
	}


?>