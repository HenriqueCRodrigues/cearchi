<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";

$id = $_SESSION['id_user'];
$sql = mysql_query("SELECT * FROM usuario WHERE id_user = '$id'");

$consulta = mysql_fetch_array($sql);

$nome = $consulta['nome_user'];
			   echo "<td><strong>Nome: </strong>".@$nome."	<a href=\"Alterar\">		Alterar<a/>"."	<a href=\"Excluir_Usuario\">		Excluir<a/>";
			   echo "<br /> <br /> <hr />";
			   
			   @$cont ++;	
			  
		       echo "<strong>Total Encontrado: </strong>".@$cont;
		       echo "<br /> <br />";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>

<input type="button" value="Voltar" onclick="Voltar()">

<script>
function Voltar() 
{
    location.href="home";
}

</script>
</form>
</body>
</html>	