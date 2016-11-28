<?php
	
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";
	$id_terceiro = $_GET['id_terceiro'];
	$id = $_SESSION['id_user'];
	$data = $_POST['data_servico'];
	$hora = $_POST['hora_servico'];
	$servico = $_POST['servico'];
	$consulta = mysql_query("SELECT * FROM tipos_de_servico WHERE servico_ts like '$servico'");
	$array = mysql_fetch_array($consulta);
	$id_ts = $array['id_ts'];
	if(strcmp($servico, '')==0){
		echo "<script>alert('Todos os campos devem ser preenchidos.')</script>";
		echo "<script> location.href='cadastrar_solicitacao.php?id_terceiro=".$id_terceiro."'</script>";
	}
	if(strcmp($hora, '') != 0 || strcmp($data, '') != 0) 
	{
		$sql = mysql_query("INSERT INTO solicitacao_de_servico (data_ss, hora_ss, fk_id_ts, fk_id_user_contratante, fk_id_user_prestador, status_ss, fk_id_avaliacao) values ('$data', '$hora', '$id_ts', '$id', '$id_terceiro', 'A', 0)")or die(mysql_error());

		echo "<script>alert('Solicitação realizada com sucesso.')</script>";
		echo "<script> location.href='menusolicitacao.php'</script>";
	}

	else
	{
		echo "<script>alert('Todos os campos devem ser preenchidos.')</script>";
		echo "<script> location.href='cadastrar_solicitacao.php?id_terceiro=".$id_terceiro."'</script>";
	}

	



?>