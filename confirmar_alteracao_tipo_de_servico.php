<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";


	$id = $_GET['id_ts'];
	$servico = $_POST['tipo_de_servico'];
	$descricao = $_POST['descricao_tipo_de_servico'];

	if (strcmp($servico, '') == 0 || strcmp($descricao, '') == 0) 
	{
		echo "<script>alert('Todos os campos devem ser preenchidos')</script>";
		echo "<script>location.href='alterar_tipo_de_servico.php?id_ts=".$id."'</script>";
	}

	else
	{
		$sql = mysql_query("UPDATE tipos_de_servico SET servico_ts='$servico', descricao_ts='$descricao' WHERE id_ts='$id'");
		echo "<script>alert('Alteração realizada com sucesso.')</script>";
		echo "<script> location.href='index.html'</script>";
	}


?>
