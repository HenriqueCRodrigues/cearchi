<?php  
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

	$id_amigo = $_GET['id_terceiro'];
	$id = $_SESSION['id_user'];

	$sql = mysql_query("DELETE FROM relacoes WHERE (id_user1 = '$id' AND id_user2 = '$id_amigo') OR (id_user2 = '$id' AND id_user1 = '$id_amigo')") or die(mysql_error());
	echo "<script> alert('Amizade desfeita com sucesso.')</script>";
	echo "<script> location.href='perfil.php?id_terceiro=".$id_amigo."'</script>";

?>