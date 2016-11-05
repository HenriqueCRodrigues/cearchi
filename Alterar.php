<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";


	$id = $_SESSION['id_user'];
	$sql = mysql_query("SELECT * FROM usuario WHERE id_user='$id'");
	$consulta = mysql_fetch_array($sql);
	$nome = $consulta['nome_user'];
	$sexo = $consulta['sexo_user'];
	$rg = $consulta['rg_user'];
	$telefone = $consulta['telefone_user'];
	$login = $consulta['login_user'];
	$senha = $consulta['senha_user'];
	$rua = $consulta['rua_user'];
	$numero = $consulta['numero_user'];
	$bairro = $consulta['bairro_user'];
	$cidade = $consulta['cidade_user'];
	$estado = $consulta['estado_user'];
	$cep = $consulta['cep_user'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
</head>
<body>
<form method="post" action="confirmar_alteracao">

Nome: <input type="text" name="nome_user" value="<?php echo "$nome"; ?>" id="nome_user" )>  <br /><br />
Sexo: <select name="sexo_user">
  <
  <option value="<?php echo $sexo ?>" selected><?php echo "$sexo" ?></option>
  <option value="">---------</option>
  <option value="Masculino">Masculino</option>
  <option value="Feminino">Feminino</option>
  </select><br /> <br />
RG: <input type="int" name="rg_user" value="<?php echo "$rg"; ?>" id="rg_user"><br /><br />
Telefone: <input type="int" name="telefone_user" value="<?php echo "$telefone"; ?>" id="telefone_user"><br /><br />
Login de Entrada: <input type="text" name="login_user" value="<?php echo "$login"; ?>" id="login_user"><br /><br />
Senha: <input type="password" name="senha_user" value="<?php echo "$senha"; ?>" id="senha_user"><br /><br />
Rua: <input type="text" name="rua_user" value="<?php echo "$rua"; ?>" id="rua_user"><br /><br />
Numero: <input type="text" name="numero_user" value="<?php echo "$numero"; ?>" id="numero_user"><br /><br />
Bairro: <input type="text" name="bairro_user" value="<?php echo "$bairro"; ?>" id="bairro_user"><br /><br />
Cidade: <input type="text" name="cidade_user" value="<?php echo "$cidade"; ?>" id="cidade_user"><br /><br />
Estado: <select name="estado_user">
	<?php 
		if($estado=="AC"){$vestado = "Acre";}
		if($estado=="AL"){$vestado = "Alagoas";}
		if($estado=="AP"){$vestado = "Amapá";}
		if($estado=="AM"){$vestado = "Amazonas";}
		if($estado=="BA"){$vestado = "Bahia";}
		if($estado=="CE"){$vestado = "Ceará";}
		if($estado=="DF"){$vestado = "Distrito Federal";}
		if($estado=="ES"){$vestado = "Espirito Santo";}
		if($estado=="GO"){$vestado = "Goiás";}
		if($estado=="MA"){$vestado = "Maranhão";}
		if($estado=="MS"){$vestado = "Mato Grosso do Sul";}
		if($estado=="MT"){$vestado = "Mato Grosso";}
		if($estado=="MG"){$vestado = "Minas Gerais";}
		if($estado=="PA"){$vestado = "Pará";}
		if($estado=="PB"){$vestado = "Paraíba";}
		if($estado=="PR"){$vestado = "Paraná";}
		if($estado=="PE"){$vestado = "Pernambuco";}
		if($estado=="PI"){$vestado = "Piauí";}
		if($estado=="RJ"){$vestado = "Rio de Janeiro";}
		if($estado=="RN"){$vestado = "Rio Grande do Norte";}
		if($estado=="RS"){$vestado = "Rio Grande do Sul";}
		if($estado=="RO"){$vestado = "Rondônia";}
		if($estado=="RR"){$vestado = "Roraima";}
		if($estado=="SC"){$vestado = "Santa Catarina";}
		if($estado=="SP"){$vestado = "São Paulo";}
		if($estado=="SE"){$vestado = "Sergipe";}
		if($estado=="TO"){$vestado = "Tocantins";}

	
	?> 
	<option value="<?php echo "$estado"; ?>" selected><?php echo"$vestado"; ?></option>
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
CEP: <input type="int" name="cep_user" value="<?php echo "$cep"; ?>" id="cep_user" ><br /><br />
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