<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";



$id = $_GET['id_ss'];
$sql = mysql_query("SELECT * FROM solicitacao_de_servico WHERE id_ss='$id' ");
$row = mysql_num_rows($sql);


$consulta = mysql_fetch_array($sql);
$data = $consulta['data_ss'];
$hora = $consulta['hora_ss'];
$idd = $consulta['id_ss'];




echo "<form method='post' action='confirmar_alteracao_Servico.php?id_ss=".$idd."'> Data da visita: <input type='text' name='data_ss' value='$data' id='data_ss'> <br /><br /> Hora da visita: <input type='text' name='hora_ss' value='$hora' id='hora_ss' ><br /><br /> <input type='submit' name='Alterar' id='BtnAlt'> <input type='button' value='Voltar' onclick='Voltar()'> ";
  





?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Serviço</title>
</head>
<body>

    <script>
        function Voltar()
        {
            location.href="home";
        }
    </script>

</form>


</body>
</html>
