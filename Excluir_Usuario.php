<!DOCTYPE html>
<html>
<head>
	<title>Excluir Conta</title>
</head>
<body>
	<strong>Deseja excluir sua conta</strong>
	<form method="post" action="?go=Excluir">
<input type="submit" value="SIM" id="btnCad">
<input type="button" value="NÃO" onclick="Voltar()">

<script>
function Voltar() 
{
    location.href="home";
}

</script></form>
</body>
</html>




<?php 
include "Conexao_mysql.php";
include "Validador_de_Login.php";

if(@$_GET['go'] == 'Excluir')
{
	$id = $_SESSION['id_user'];
	$sql = mysql_query("SELECT * FROM usuario WHERE id_user = '$id'");

	$consulta = mysql_fetch_array($sql);
	$att = mysql_query("UPDATE usuario SET status_user='D' WHERE id_user='$id'");
	echo echo '<script>alert("Usuario Exluido com sucesso.")</script>';	
	echo "<script> location.href='menu';</script>";
	
}




 ?>