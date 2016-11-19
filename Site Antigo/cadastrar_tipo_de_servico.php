<?php 
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";


	$servico_ts = $_POST['tipo_de_servico'];
	$descricao_ts = $_POST['descricao_tipo_de_servico'];


	if (strcmp($servico_ts, '') == 0 || strcmp($descricao_ts, '') == 0) 
	{
		echo '<script>alert("Todos os campos devem ser preenchidos")</script>';
		echo "<script> location.href='cadastrar_tipo_de_servico.html'";
	}

	else
	{

		$sql = mysql_query("INSERT INTO tipos_de_servico (servico_ts,descricao_ts) values ('$servico_ts', '$descricao_ts')") or die (mysql_error());
		echo '<script>alert("Serviço Cadastrado com Sucesso")</script>';
		echo "<script> location.href='index.html'</script>";

	}

?>