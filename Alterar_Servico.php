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

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Serviço</title>
</head>
<body>
<form method="post" action="confirmar_alteracao_Servico">

    Data da visita: <input type="text" name="data_ss" value="<?php echo "$data"; ?>" id="data_ss" )>  <br /><br />
    Hora da visita: <input type="text" name="hora_ss" value="<?php echo "$hora"; ?>" id="hora_ss" ><br /><br />
    
    <input type="text" name="id_ss" value="<?php echo "$id"; ?>" id="id_ss" >

    <input type="submit" name="Alterar" id="BtnAlt">
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
