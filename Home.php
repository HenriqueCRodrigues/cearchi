<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";



$tipo = $_SESSION['tipo_usuario'];
$id = $_SESSION['id_user'];





?>
<!DOCTYPE html>
<html>
</script>
<head>
	<title>Cadastro efetuado com Sucesso</title>
</head>
<body>
		
		Bem vindo ao cearchi serviço, aqui você pode fazer suas devidas alterações<br /> <br />
		
		


		<a href="alterar">Alterar seus Dados</a> <br />
		<a href="consultar">Consultar Outros Usuarios</a><br />
		<a href="logout">Sair</a>  

</body>
</html>