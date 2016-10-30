<?php
//Conexão com o banco de dados
include "Conexao_mysql.php";
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$data_ss = $_POST ["data_ss"];
$hora_ss = $_POST ["hora_ss"];
$tipo_ss = $_POST ["tipo_ss"];
if ((strcmp($data_ss, "01/01/0001") == 0 && (strcmp($data_ss, "31/10/2016") > 0)))
{
   echo '<script>alert("Todos os campos tem que ser preenchidos.")</script>';
    echo '<script>location.href="cadastrar"</script>';
}
else
{
    //Deixando o usuario ativo, para poder desativar sem excluir
    //Inserção no Banco de Dados mysql

    $sql = mysql_query("INSERT INTO solicitacao_de_servico (data_ss,hora_ss, tipo_ss) 
	values ('$data_ss', '$hora_ss', '$tipo_ss')") or die(mysql_error());

  //  $sql = mysql_query("INSERT INTO solicitacao_de_servico (data_ss,hora_ss,tipo_ss,contratante_id_contratante,Prestador_de_Serviço_id_prestador,avaliacao_de_servico_id_as,Mensagens_id_mensagem)
	//values ('$data_ss','$hora_ss','$tipo_ss','$contratante_id_contratante', '$Prestador_de_Servico_id_prestador','$avaliacao_de_servico_id_as','$avaliacao_de_servico_id_as','$Mensagens_id_mensagem')") or die(mysql_error());
    // Script de Alerta
    echo '<script>alert("Sua solicitacao foi realizada com sucesso!\nVocê será rediracionado para o Home, após pressionar OK.")</script>';
    echo '<script>location.href="home"</script>';

}
?>