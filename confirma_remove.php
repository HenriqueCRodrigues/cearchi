<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

	$id_cidade = $_POST['cidade'];
	$id_servico = $_POST['tipos_de_servico_id_ts'];

	if(isset($id_cidade) && isset($id_servico)){

		$sql = mysql_query("DELETE FROM locais_atuacao WHERE id_local_atuacao LIKE '$id_cidade'");
		$sql1 = mysql_query("DELETE FROM servicos_fornecidos WHERE id_sf LIKE '$id_servico'");
			echo "<script>alert('Dados removidos com sucesso!')</script>";
			echo "<script>location.href ='remover_servico_cidade.php'</script>";
		
	
	}else if(isset($id_cidade)){

			$sql = mysql_query("DELETE FROM locais_atuacao WHERE id_local_atuacao LIKE '$id_cidade'");
			echo "<script>alert('Dados removidos com sucesso!')</script>";
			echo "<script>location.href ='remover_servico_cidade.php'</script>";

	}else if(isset($id_servico)){

			$sql1 = mysql_query("DELETE FROM servicos_fornecidos WHERE id_sf LIKE '$id_servico'");
			echo "<script>alert('Dados removidos com sucesso!')</script>";
			echo "<script>location.href ='remover_servico_cidade.php'</script>";

	}else{
		echo "<script>alert('Pelo menos um dos dados devem ser selecionados')</script>";
		echo "<script>location.href ='remover_servico_cidade.php'</script>";
	}
	
?>