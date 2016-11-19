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
		$sql = mysql_query("INSERT INTO assunto (id_dest, id_reme, assunto) values ('$id_terceiro','$id_usuario', '$titulo_mensagem')" ) or die(mysql_error());

		$sql2 = mysql_query("SELECT id FROM assunto WHERE id_dest = '$id_terceiro' and assunto = '$titulo_mensagem' and id_reme = '$id_usuario'");
			$linha = mysql_fetch_array($sql2);
			$assunto = $linha[0];

		$sql = mysql_query("INSERT INTO msg (id_assunto, id_reme, id_dest, mensagem) values ('$assunto','$id_usuario', '$id_terceiro', '$msg_mensagem')" ) or die(mysql_error());

		echo "<script> alert('Mensagem enviada com sucesso!')</script>";
		echo "<script>location.href = 'index.html'</script>";
	}

?>
