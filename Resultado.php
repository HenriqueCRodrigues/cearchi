<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

	$busca = $_POST['nome_user'];
	$tipo = $_SESSION['tipo_usuario'];
	$id = $_SESSION['id_user'];
	$sql = mysql_query("SELECT nome_user FROM usuario WHERE nome_user like '%$busca%' AND status_user='A' AND tipo_usuario='C' ORDER BY nome_user ");
	$row = mysql_num_rows($sql);


	if ($row > 0) {
		
		while ($linha = mysql_fetch_array($sql)) {
			   $nome = $linha['nome_user'];
			   
			   
			   echo "<td><strong>Nome: </strong>".@$nome."	<a href=\"Alterar\">		Alterar<a/>"."	<a href=\"Excluir\">		Excluir<a/>";
			   
			   echo "<br /> <br /> <hr />";
			   
	
			   @$cont ++;
			}	
			  
		       echo "<strong>Total Encontrado: </strong>".@$cont;
		       echo "<br /> <br />";
		}
			

	else
	{
		echo "Desculpe, nenhum Usuario foi encontrado com esse nome.";
		echo "<br /> <br />";
	}

	$cont = 0;

	/**/


?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultado de Pesquisa</title>
</head>
<body>
<input type="button" value="Voltar" onclick="Voltar()">

<script>
function Voltar() 
{
    location.href="consultar";
}
</script>
</body>
</html>









