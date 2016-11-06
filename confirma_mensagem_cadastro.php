<?php  
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

	$id_terceiro = $_GET['id_terceiro'];
	$titulo = $_POST['titulo_mensagem'];
	$msg = $_POST['msg_mensagem'];
	$id = $_SESSION['id_user'];

	$sql = mysql_query("INSERT INTO mensagens (msg_mensagem, titulo_mensagem, fk_id_user_1, fk_id_user_2) values ('$msg', '$titulo', '$id', '$id_terceiro')")or die(mysql_error());

	echo "<script>alert('Mensagem Enviada com sucesso.')</script>";
	echo "<script>location.href='index.html'</script>";

?>