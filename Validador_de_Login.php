<?php
	session_start();
if (!isset($_SESSION['login_user']) || !isset($_SESSION['senha_user']))
{
	echo '<script>location.href="account.php"</script>';
	exit;
}
?>