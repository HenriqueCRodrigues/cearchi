<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";
$id = $_GET['id_ss'];

    $att = mysql_query("DELETE FROM solicitacao_de_servico WHERE id_ss='$id'");
    echo '<script>alert("Serviço Exluido com sucesso.")</script>';
    echo "<script> location.href='Home';</script>";



?>

<!DOCTYPE html>
<html>
<head>
    <title>Excluir Conta</title>
</head>
<body>
<strong>Deseja excluir este serviço</strong>
<form method="post" action="">
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

