<?php  
include "Conexao_mysql.php";
include "Validador_de_Login.php";


	$id = $_SESSION['id_user'];
	$id_terceiro = $_GET['id_terceiro'];

	$sql = mysql_query("INSERT INTO notificacao (id_destinatario, id_remetente) values ('$id_terceiro','$id')" ) or die(mysql_error());
	echo "<script> alert('Solicitação enviada com sucesso!')</script>";
	echo "<script>location.href = 'perfil.php?id_terceiro=".$id_terceiro."'</script>";

?>