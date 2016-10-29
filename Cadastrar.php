<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
</head>
<body>
<form method="post" action="?go=cadastrar">
	
Nome: <input type="text" name="nome_user" id="nome_user" /><br /><br />
Sexo: <input type="text" name="sexo_user" id="sexo_user"><br /><br />
Data de Nascimento <input type="int" name="nascimento_user" id="nascimento_user"><br /><br />
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
Estado: <input type="text" name="estado_user" id="estado_user"><br /><br />
CEP: <input type="int" name="cep_user" id="cep_user" ><br /><br />
<input type="submit" value="Cadastrar" id="btnCad">

</form>


</body>
</html>

<?php 

 if(@$_GET['go'] == 'cadastrar')
 {

//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
 
$host= "localhost";
$bd= "root";
$senhabd= "";
 
$userbd = "cearchi"; 


// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$nome_user	= $_POST ["nome_user"];	//atribuição do campo "nome" vindo do formulário para variavel	
$sexo_user	= $_POST ["sexo_user"];	//atribuição do campo "sexo" vindo do formulário para variavel
//Gravando no banco de dados !
$nascimento_user = $_POST["nascimento_user"];
$cpf_user = $_POST["cpf_user"]; //atribuição do campo "CPF" vindo do formulário para variavel
$rg_user = $_POST["rg_user"];  //atribuição do campo "RG" vindo do formulário para variavel
$telefone_user = $_POST ["telefone_user"];	//atribuição do campo "telefone" vindo do formulário para variavel
$login_user	= $_POST ["login_user"];	//atribuição do campo "login" vindo do formulário para variavel
$senha_user	= $_POST ["senha_user"];	//atribuição do campo "senha" vindo do formulário para variavel
$emai_user	= $_POST ["emai_user"];	//atribuição do campo "email" vindo do formulário para variavel
$rua_user = $_POST ["rua_user"];	//atribuição do campo "endereco" vindo do formulário para variavel
$numero_user = $_POST["numero_user"]; //atribuição do campo "numero" vindo do formulário para variavel
$bairro_user = $_POST ["bairro_user"];	//atribuição do campo "bairro" vindo do formulário para variavel
$cidade_user	= $_POST ["cidade_user"];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado_user	= $_POST ["estado_user"];	//atribuição do campo "estado" vindo do formulário para variavel
$cep_user = $_POST["cep_user"];


 
//conectando com o localhost - mysql
$conexao = @mysql_connect($host,$bd,$senhabd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($userbd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
 
 
$sql = mysql_query("INSERT INTO usuario (nome_user, sexo_user, nascimento_user, cpf_user, rg_user, telefone_user, login_user, senha_user, emai_user, rua_user, numero_user, bairro_user, cidade_user, estado_user, cep_user) 
	values ('$nome_user', '$sexo_user', '$nascimento_user', '$cpf_user', '$rg_user', '$telefone_user', '$login_user', '$senha_user', '$emai_user', '$rua_user', '$numero_user', '$bairro_user', '$cidade_user', '$estado_user', '$cep_user')") or die(mysql_error());

mysql_query($sql,$conexao);
 
 
echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
}
?>