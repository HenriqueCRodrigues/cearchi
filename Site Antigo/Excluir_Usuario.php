<?php 
include "Conexao_mysql.php";
include "Validador_de_Login.php";

$option = $_POST['option'];
$senha_user = $_POST['senha_user'];
$senha_login = $_SESSION['senha_user'];

if(strcmp($option, 'sim') == 0 && strcmp($senha_user, $senha_login) == 0)
{
	$id = $_SESSION['id_user'];
	$sql = mysql_query("SELECT * FROM usuario WHERE id_user = '$id'");

	$consulta = mysql_fetch_array($sql);
	$att = mysql_query("UPDATE usuario SET status_user='D' WHERE id_user='$id'");
	echo '<script>alert("Usuario Exluido com sucesso.")</script>';	
	echo "<script> location.href='account.html';</script>";
	session_destroy();
	
}

else
{
	echo '<script>alert("Não há dados suficiente para excluir a conta,\nVocê sera movido para a configuração de sua conta.")</script>';
    echo "<script>location.href='accountconfig'</script>";
}


 ?>