<!DOCTYPE html>
<html>
<head>

	<title>Cadastro de Usuário</title>
</head>
<body>
<form method="post" action="Confirmar_Cadastro.php">
	
Nome: <input type="text" name="nome_user" id="nome_user" /><br /><br />
Sexo: <select name="sexo_user">
  <option value="">---------</option>
  <option value="Masculino">Masculino</option>
  <option value="Feminino">Feminino</option>
  </select><br /> <br />
Data de Nascimento: <input type="text" name="nascimento_user" id="nascimento_user"><br /><br />
CPF: <input type="int" name="cpf_user" id="cpf_user"><br /><br />
RG: <input type="int" name="rg_user" id="rg_user"><br /><br />
Telefone: <input type="int" name="telefone_user" id="telefone_user"><br /><br />
Login de Entrada: <input type="text" name="login_user" id="login_user"><br /><br />
Senha: <input type="password" name="senha_user" id="senha_user"><br /><br />
Email de Cadastro: <input type="Email" name="emai_user" id="emai_user"><br /><br />
Rua: <input type="text" name="rua_user" id="rua_user"><br /><br />
Numero: <input type="text" name="numero_user" id="numero_user"><br /><br />
Bairro: <input type="text" name="bairro_user" id="bairro_user"><br /><br />
Cidade: <input type="text" name="cidade_user" id="cidade_user"><br /><br />
Estado: <select name="estado_user">
	<option value="">Selecione</option>
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espirito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MT">Mato Grosso</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select><br /><br />
CEP: <input type="int" name="cep_user" id="cep_user" ><br /><br />
<script type="text/javascript">
	
	function verificar()
{
	if(document.getElementById("contratante").checked){

		document.getElementById("verifica").style.visibility = 'hidden';

	}
	else if(document.getElementById("prestador_de_servico").checked)	
	{
		document.getElementById("verifica").style.visibility = 'visible';
	}
}
</script>

  <input type="radio" onclick="verificar()" name="opcao" value="C" id="contratante"> Contratante

  <input type="radio" onclick="verificar()" name="opcao" value="P" id="prestador_de_servico"> Prestador de Serviço<br>
  
  <br /><br />
  	<div id="verifica" style="visibility:hidden">

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

    </div>
<br /><br />

<input type="submit" value="Cadastrar" id="btnCad" >
<input type="button" value="Voltar" onclick="Voltar()">

<script>
function Voltar() 
{
    location.href="menu";
}

</script>

</form>

</body>

</html>