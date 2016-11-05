<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Serviços</title>
</head>
<body>
<form method="post" action="Resultado_Servicos.php">

    Tipo de Serviço: <select name="tipo_ss">
        <option value="">Selecione</option>
        <option value="EL">ELETRICISTA</option>
        <option value="EN">ENCANADOR</option>
        <option value="PE">PEDREIRO</option>
    </select><br /> <br />


    <br /><br />
    <input type="submit" value="Consultar" id="btnCad">
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