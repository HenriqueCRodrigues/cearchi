<<?php 
    include "Conexao_mysql.php";
    include "Validador_de_Login.php";

    $tipo = $_SESSION['tipo_usuario'];
    if($tipo == 'P'){
        //Se o usuário for prestador ele é redirecionado para uma pagina somente com os dados deles!
        echo '<script>alert("Prestador de Serviço, não tem essa opção disponivel\nRedirecionando para o Menu do Usuario, Após Pressionar OK.")</script>';  
        echo "<script> location.href='home';</script>";
    }


 ?>
<!DOCTYPE html>
<html>
<head>

    <title>Cadastro de Usuário</title>
</head>
<body>
<form method="post" action="Confirmar_Solicitacao_Servico.php">

    Tipo de servico:
    <input type="checkbox" name="tipo_ss" value="EL">Eletricista<br>
    <input type="checkbox" name="tipo_ss" value="EN" >Encanador<br>
    <input type="checkbox" name="tipo_ss" value="PE" >Pedreiro<br>
    ID do contratante: <input type="int" name="contratante_id_contratante" id="contratante_id_contratante"><br /><br />
    ID do Prestador de serviços: <input type="int" name="Prestador_de_Servico_id_prestador" id="Prestador_de_Servico_id_prestador"><br /><br />
    Avaliaçao do serviço: <input type="int" name="avaliacao_de_servico_id_as" id="avaliacao_de_servico_id_as"><br /><br />
    ID da mensagem: <input type="int" name="Mensagens_id_mensagem" id="Mensagens_id_mensagem"><br /><br />
    Data de visita: <input type="text" name="data_ss" id="data_ss"><br /><br />
    Horario de visita: <input type="text" name="hora_ss" id="hora_ss"><br /><br />




    <input type="submit" value="Solicitar" id="btnCad" >
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