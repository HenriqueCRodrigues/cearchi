<?php
	include "Conexao_mysql.php";
		include "Validador_de_Login.php";

	$cidade = $_POST ['cidade'];	//atribuição do campo "nome_user" vindo do formulário para variavel	
	$tipo_servico = $_POST ['tipos_de_servico_id_ts'];
	$id = $_SESSION['id_user'];
	if(strcmp($cidade, "")!=0){
		$sql = mysql_query("INSERT INTO locais_atuacao (id_cidade , id_user) values ('$cidade', '$id')") or die(mysql_error());	
		if(strcmp($tipo_servico, "")!=0){
			$sql = mysql_query("INSERT INTO servicos_fornecidos (fk_id_user , fk_id_ts) values ('$id', '$tipo_servico')") or die(mysql_error());
		 echo '<script>alert("Os campos foram adicionados com sucesso.")</script>';
		 echo '<script>location.href="perfil.php"</script>';
		}
		 echo '<script>alert("Os campos foram adicionados com sucesso.")</script>';
		 echo '<script>location.href="perfil.php"</script>';
	}
	elseif (strcmp($tipo_servico, "")!=0) {
		$sql = mysql_query("INSERT INTO servicos_fornecidos (fk_id_user , fk_id_ts) values ('$id', '$tipo_servico')") or die(mysql_error());
		echo '<script>alert("Os campos foram adicionados com sucesso.")</script>';
		 echo '<script>location.href="perfil.php"</script>';
	}
	else{
		echo '<script>alert("Nenhum campo foi preenchido.")</script>';	
		echo '<script>location.href="adicionar_servico_cidade.php"</script>';
	}
	
?>