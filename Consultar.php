<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

	$tipo = $_SESSION['tipo_usuario'];
	if($tipo == 'P'){
		//Se o usuário for prestador ele é redirecionado para uma pagina somente com os dados deles!
		header("location: DadosPrestador.php");
	}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
</head>
<body>
<form method="post" action="Resultado.php">
	
Nome: <input type="text" name="nome_user" id="nome_user" /><br /><br />
 Tipo de Serviço: <select name="tipos_de_servico_id_ts">
    <option value="">Selecione</option>
	<option value="ELETRICISTA">ELETRICISTA</option>
	<option value="ENCANADOR">ENCANADOR</option>
	</select><br /> <br />

    Locais de Atuação: <select name="regioes_de_atuacao_id_ra">
    <option value="">Selecione</option>
	<option value="Itajubá">Itajubá</option>
	<option value="Maria da Fe">Maria da Fé</option>
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

