<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";
	$id_terceiro = $_GET['id_terceiro'];
	$msg_mensagem = $_POST['msg_mensagem'];
	$titulo_mensagem = $_POST['titulo_mensagem'];

	if(strcmp($msg_mensagem,'')==0 || strcmp($titulo_mensagem, '')==0){
		echo "<script> alert('Todos os campos devem ser preenchidos!')</script>";
		echo "<script>location.href = 'mensagemcadastro?id_terceiro=".$id_terceiro."'</script>";
	}else{
		$id_usuario = $_SESSION['id_user'];

		$sql = mysql_query("INSERT INTO mensagens (msg_mensagem, titulo_mensagem, fk_id_user_1, fk_id_user_2) values ('$msg_mensagem','$titulo_mensagem', '$id_usuario', '$id_terceiro')" ) or die(mysql_error());
		echo "<script> alert('Mensagem enviada com sucesso!')</script>";
		echo "<script>location.href = 'index.html'</script>";
	}

?>
