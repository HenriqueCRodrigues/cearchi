<?php
	
	session_start();
	session_destroy();
	echo '<script>alert("Você foi desconectado\nVocê Será Redirecionado Para o Home da página")</script>';
	echo '<script>location.href="index.php";</script>';
	


?>