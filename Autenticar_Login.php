<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript">
	function sucesso_login()
	{
		setTimeout("window.location='home'", 4000);
	}

	function fracasso_login()
	{
		setTimeout("window.location='menu.php'", 4000);
	}

</script>
</head>
<body>

</body>
</html>

<?php
include "Conexao_mysql.php";



$login = $_POST['login_user'];
$senha = $_POST['senha_user'];

$sql = mysql_query("SELECT * FROM usuario WHERE login_user='$login' AND senha_user='$senha' AND status_user='A' ") or die(mysql_error());
$consulta = mysql_fetch_array($sql);
$row = mysql_num_rows($sql);


if ($row > 0) 
{
	session_start();
	$_SESSION['id_user'] = $consulta['id_user'];
	$_SESSION['login_user'] = $_POST['login_user'];
	$_SESSION['senha_user'] = $_POST['senha_user'];
	$_SESSION['tipo_usuario'] = $consulta['tipo_usuario'];

	
	echo 'Você foi autenticado com sucesso<br>Você Será Redirecionado Para a Pagina Home de Sua Conta.';
	echo '<script>sucesso_login()</script>';

}
else
{

	echo '<center>Login ou Senha Invalidos.<br>Você Será Redirecionado Para a Pagina Principal Novamente.</center>';
	echo '<script>fracasso_login()</script>';
}







?>
