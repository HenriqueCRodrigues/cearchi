<?php
	
	session_start();
	session_destroy();
	echo '<script>alert("Você foi desconectado\nVocê Será Redirecionado Para o Menu de Login da página")</script>';
	echo '<script>location.href="account.html";</script>';
	


?>