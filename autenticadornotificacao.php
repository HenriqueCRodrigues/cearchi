<?php  
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

	$confirma = $_GET['id_terceiro'];
	$id = $_SESSION['id_user'];	
	$id_remetente = $_GET['id_remet'];
	$id_destinatario = $_GET['id_dest'];
	$id_solicitacao = $_GET['id_solicitacao'];
	if($confirma == "sim"){
		$sql = mysql_query("INSERT INTO relacoes (id_user1, id_user2) values ('$id_remetente','$id_destinatario')")or die(mysql_error());
		$sql = mysql_query("DELETE FROM notificacao WHERE id_solicitacao = '$id_solicitacao' ") or die(mysql_error());

		echo "<script> location.href='visualizar_amigos.php'</script>";
		
	}

	else{
		$sql = mysql_query("DELETE FROM notificacao WHERE id_solicitacao = '$id_solicitacao' ") or die(mysql_error());
		echo "<script> location.href='perfil.php'</script>";
	}
?>