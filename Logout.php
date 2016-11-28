<?php
	
	session_start();
	session_destroy();
	echo '<script>alert("Você foi desconectado\nRedirecionando para a página principal")</script>';
	echo '<script>location.href="index.php";</script>';
	


?>