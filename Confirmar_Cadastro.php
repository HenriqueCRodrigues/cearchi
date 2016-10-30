<?php 

//Conexão com o banco de dados
include "Conexao_mysql.php";


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
$tipo_usuario = $_POST["opcao"]; //atribuição do campo "opcao" vindo do formulário para variavel, radio button



if (strcmp($nome_user, '') == 0 || strcmp($sexo_user, 0) == 0 || (strcmp($nascimento_user, "01/01/0001") == 0 && (strcmp($nascimento_user, "31/10/2016") > 0))|| strcmp($cpf_user,'') == 0 || strcmp($rg_user, '') == 0 ||  strcmp($telefone_user, '') == 0 || strcmp($login_user, '') == 0 || strcmp($senha_user, '') == 0 || strcmp($emai_user, '') == 0 || strcmp($rua_user, '') == 0 || strcmp($numero_user, 0) == 0 || strcmp($bairro_user, '') == 0 ||  strcmp($cidade_user, '') == 0 || strcmp($estado_user, '') == 0 || strcmp($cep_user, '') == 0 || strcmp($tipo_usuario,'') == 0) 
{
	// Script de Alerta
	echo '<script>alert("Todos os campos tem que ser preenchidos.")</script>';	
	echo '<script>location.href="cadastrar"</script>';

}


else
{
	//Deixando o usuario ativo, para poder desativar sem excluir

	//Inserção no Banco de Dados mysql
	$sql = mysql_query("INSERT INTO usuario (nome_user, sexo_user, nascimento_user, cpf_user, rg_user, telefone_user, login_user, senha_user, emai_user, rua_user, numero_user, bairro_user, cidade_user, estado_user, cep_user, tipo_usuario, status_user) 
	values ('$nome_user', '$sexo_user', '$nascimento_user', '$cpf_user', '$rg_user', '$telefone_user', '$login_user', '$senha_user', '$emai_user', '$rua_user', '$numero_user', '$bairro_user', '$cidade_user', '$estado_user', '$cep_user', '$tipo_usuario', 'A')") or die(mysql_error());
	// Script de Alerta
	 echo '<script>alert("Seu cadastro foi realizado com sucesso!\nVocê será rediracionado para o Home, após pressionar OK.")</script>';
	 echo '<script>location.href="home"</script>';
	

 	 
}

?> 	

