<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";

$tipo = $_POST['tipo_ss'];
$sql = mysql_query("SELECT * FROM solicitacao_de_servico WHERE tipo_ss like '%$tipo%' ORDER BY tipo_ss ");
$row = mysql_num_rows($sql);

if ($row > 0) {

    while ($linha = mysql_fetch_array($sql)) {
        $tipp = $linha["tipo_ss"];
        $hora = $linha['hora_ss'];
        $data = $linha["data_ss"];
        $id = $linha['id_ss'];

        @$cont ++;

        $arm = array($id => @$cont);
        

        echo "<form method='post' action='Alterar_Servico.php?id_ss=".$id."'><strong>Serviço: </strong>$tipp<strong> Hora:</strong>$hora<strong> Data: </strong>$data <input type='submit' value='Alterar' id='btnAlt'></form><form method='post' action='Excluir_Servico.php?id_ss=".$id."'><input type='submit' value='Excluir' id='btnAlt'> </form> ";


      
       
        echo "<br /> <br /> <hr />";

 
    }

    echo "<strong>Total Encontrado: </strong>".@$cont;
    echo "<br /> <br />";
}


else
{
    echo "Desculpe, nenhum Serviço foi encontrado com esse tipo.";
    echo "<br /> <br />";
}

$cont = 0;




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
        location.href="Consulta_Servico";
    }
    
</script>




</body>
</html>