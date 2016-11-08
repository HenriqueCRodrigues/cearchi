<?php

include "Conexao_mysql.php";
include "Validador_de_Login.php";

$assunto = $_GET["id_assunto"];
$id = $_SESSION['id_user'];
$id_dest = $_GET["id_dest"];
$msg_mensagem = $_POST["msg"];



if(strcmp($msg_mensagem, '') == 0)
{
	echo "<script>location.href = 'mensagem?assunto=".$assunto."'</script>";
}


else
{
	$sql = mysql_query("INSERT INTO msg (id_assunto, id_reme, id_dest, mensagem) values ('$assunto','$id', '$id_dest', '$msg_mensagem')" ) or die(mysql_error());
	
			echo "<script> alert('Mensagem enviada com sucesso!')</script>";
			echo "<script>location.href = 'mensagem?assunto=".$assunto."'</script>";
	}
?>