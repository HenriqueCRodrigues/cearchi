<?php 

//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
 
$host= "localhost";
$bd= "root";
$senhabd= "";
$userbd = "cearchi";

//conectando com o localhost - mysql
$conexao = @mysql_connect($host,$bd,$senhabd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($userbd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 

?>