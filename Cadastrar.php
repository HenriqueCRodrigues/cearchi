<?php 

//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
 
$host= "localhost";
$bd= "root";
$senhabd= "";
$userbd = "cearchi";

//conectando com o localhost - mysql
$conexao = @mysql_connect($host,$bd,$senhabd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($userbd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 

?>
<!DOCTYPE html>
<html>
<head>

	<title>Cadastro de Usuário</title>
</head>
<body>
<form method="post" action="?go=cadastrar">
	
Nome: <input type="text" name="nome_user" id="nome_user" /><br /><br />
Sexo: <select name="sexo_user">
  <option value=0>---------</option>
  <option value=1>Masculino</option>
  <option value=2>Feminino</option>
  </select><br /> <br />
Data de Nascimento: <input type="Date" name="nascimento_user" id="nascimento_user"><br /><br />
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

  <!--input type="radio" name="opcao" value="contratante" id="contratante"> Contratante

  <input type="radio" name="opcao" value="prestador_de_servico"> Prestador de Serviço<br>
  
  <br /><br />-->


<input type="submit" value="Cadastrar" id="btnCad">

</form>

</body>

</html>

<?php 

 if(@$_GET['go'] == 'cadastrar')
 {

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome_user = $_POST ["nome_user"];	//atribuição do campo "nome_user" vindo do formulário para variavel	
$sexo_user = $_POST ["sexo_user"];	//atribuição do campo "sexo_user" vindo do formulário para variavel
$nascimento_user = $_POST["nascimento_user"];
$cpf_user = $_POST["cpf_user"]; //atribuição do campo "CPF_user" vindo do formulário para variavel
$rg_user = $_POST["rg_user"];  //atribuição do campo "RG_user" vindo do formulário para variavel
$telefone_user = $_POST ["telefone_user"];	//atribuição do campo "telefone_user" vindo do formulário para variavel
$login_user	= $_POST ["login_user"];	//atribuição do campo "login_user" vindo do formulário para variavel
$senha_user	= $_POST ["senha_user"];	//atribuição do campo "senha_user" vindo do formulário para variavel
$emai_user = $_POST ["emai_user"];	//atribuição do campo "emai_user" vindo do formulário para variavel
$rua_user = $_POST ["rua_user"];	//atribuição do campo "rua_user" vindo do formulário para variavel
$numero_user = $_POST["numero_user"]; //atribuição do campo "numero_user" vindo do formulário para variavel
$bairro_user = $_POST ["bairro_user"];	//atribuição do campo "bairro_user" vindo do formulário para variavel
$cidade_user = $_POST ["cidade_user"];	//atribuição do campo "cidade_user" vindo do formulário para variavel
$estado_user = $_POST ["estado_user"];	//atribuição do campo "estado_user" vindo do formulário para variavel
$cep_user = $_POST["cep_user"]; //atribuição do campo "cep_user" vindo do formulário para variavel



if (strcmp($nome_user, '') == 0 || strcmp($sexo_user, 0) == 0 || (strcmp($nascimento_user, "01/01/0001") == 0 && (strcmp($nascimento_user, "31/10/2016") > 0))|| strcmp($cpf_user,'') == 0 || strcmp($rg_user, '') == 0 ||  strcmp($telefone_user, '') == 0 || strcmp($login_user, '') == 0 || strcmp($senha_user, '') == 0 || strcmp($emai_user, '') == 0 || strcmp($rua_user, '') == 0 || strcmp($numero_user, 0) == 0 || strcmp($bairro_user, '') == 0 ||  strcmp($cidade_user, '') == 0 || strcmp($estado_user, '') == 0 || strcmp($cep_user, '') == 0) 
{
	// Script de Alerta
	echo '<script>alert("Todos os campos tem que ser preenchidos.")</script>';	

}
else{

	//Inserção no Banco de Dados mysql
	$sql = mysql_query("INSERT INTO usuario (nome_user, sexo_user, nascimento_user, cpf_user, rg_user, telefone_user, login_user, senha_user, emai_user, rua_user, numero_user, bairro_user, cidade_user, estado_user, cep_user) 
	values ('$nome_user', '$sexo_user', '$nascimento_user', '$cpf_user', '$rg_user', '$telefone_user', '$login_user', '$senha_user', '$emai_user', '$rua_user', '$numero_user', '$bairro_user', '$cidade_user', '$estado_user', '$cep_user')") or die(mysql_error());
	// Script de Alerta
	 echo '<script>alert("Seu cadastro foi realizado com sucesso!"<br>"Agradecemos a atenção.")</script>';
 


}


}
?> 	
