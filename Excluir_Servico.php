<!DOCTYPE html>
<html>
<head>
    <title>Excluir Conta</title>
</head>
<body>
<strong>Deseja excluir este serviço</strong>
<form method="post" action="?go=Excluir">
    <input type="submit" value="SIM" id="btnCad">
    <input type="button" value="NÃO" onclick="Voltar()">

    <script>
        function Voltar()
        {
            location.href="home";
        }

    </script></form>
</body>
</html>

<?php
include "Conexao_mysql.php";
session_start("consulta");
if(@$_GET['go'] == 'Excluir')
{
    $data = $_SESSION['data_ss'];
    $hora = $_SESSION['hora_ss'];
    $tipo = $_SESSION['tipo_ss'];
    $sql = mysql_query("SELECT * FROM solicitacao_de_servico WHERE data_ss = '$data' AND hora_ss = '$hora' AND tipo_ss = '$tipo'");

    $consulta = mysql_fetch_array($sql);
    $att = mysql_query("DELETE FROM solicitacao_de_servico WHERE data_ss = '$data' AND hora_ss = '$hora' AND tipo_ss = '$tipo'");
    echo '<script>alert("Serviço Exluido com sucesso.")</script>';
	echo "<script> location.href='Home';</script>";

}




?>