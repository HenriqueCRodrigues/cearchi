<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";

$sql_listar_usuario = mysql_query("SELECT * FROM solicitacao_de_servico ");

//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:



// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$id = $_SESSION['id_ss'];

$data_ss	= $_POST ["data_ss"];	//atribuição do campo "nome" vindo do formulário para variavel
$hora_ss	= $_POST ["hora_ss"];	//atribuição do campo "sexo" vindo do formulário para variavel
//Gravando no banco de dados !




$sql_atualizar_servico = mysql_query("UPDATE solicitacao_de_servico SET data_ss = '$data_ss', hora_ss = '$hora_ss' WHERE id_ss='$id'") or die(mysql_error());
?>