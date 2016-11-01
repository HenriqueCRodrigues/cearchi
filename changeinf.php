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
$email = $consulta['emai_user'];
$login = $consulta['login_user'];
$senha = $consulta['senha_user'];
$rua = $consulta['rua_user'];
$numero = $consulta['numero_user'];
$bairro = $consulta['bairro_user'];
$cidade = $consulta['cidade_user'];
$estado = $consulta['estado_user'];
$cep = $consulta['cep_user'];

?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Cearchi | Registro de Usuário</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<div class="logo">
						<ul>
							<li><a href="index.html"><img src="images/logopeq.png"</a></li>

							<li><a href="account.html"> <img src="images/icon1.png">LOGIN</a></li>
							<li><a href="register.html"><img src="images/pw.png">Crie uma conta</a></li>			
						</ul>
					</div>
				</div> </div>
			</div>
		</div>
	</div>


	<!-- header-section-ends -->
	<div class="banner-top">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

				</div>
				<!--/.navbar-header-->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Início</a></li>
						<li><a href="#">Procurar Serviços</a></li>
						<li><a href="#">anunciar</a></li>
						<li><a href="accountconfig.html">configurações da conta</a></li>
						<li><a href="contact.html">CONTATO</a></li>
					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			<!--/.navbar-->
		</div>
	</div>
	<!-- registration-form -->
	<div class="registration-form">
		<div class="container">
			<div class="dreamcrub">
				<ul class="breadcrumbs">
					<li class="home">
						<a href="index.html" title="Go to Home Page">Home</a>&nbsp;
						<span>&gt;</span>
					</li>
					<li class="home">
						<a href="index.html" title="Ir para configurações de conta">Configuração de conta</a>&nbsp;
						<span>&gt;</span>
					</li>
					<li class="women">
						Alterar informações
					</li>
				</ul>
				<ul class="previous">
					<li><a href="accountconfig.html">Voltar para página anterior</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<h2>Alteraração de dados</h2>
			<div class="registration-grids">
				<div class="reg-form">
					<div class="reg">
						<p>Confirme sua senha para efetuar as alterações.</p>
						<form method="post" action="confirmar_alteracao">
							<ul>
								<li class="text-info">Senha: </li>
								<li><input type="password" name="senha_user" value="<?php echo "$senha"; ?>" id="senha_user"></li>
							</ul>
						
						<p>Insira os seus dados atuais nos campos abaixo</p>
						

							<ul>
								<li class="text-info">Nome Completo: </li>
								<li><input type="text" name="nome_user" value="<?php echo "$nome"; ?>" id="nome_user"></li>
							</ul>
							<ul>
								<li class="text-info">Email: </li>
								<li><input type="text" name="emai_user" value="<?php echo "$email"; ?>" id="emai_user"></li>
							</ul>
							<ul>
								<li class="text-info">Telefone:</li>
								<li><input type="text" name="telefone_user" value="<?php echo "$telefone"; ?>" id="telefone_user"></li>
							</ul>
						</br></br>
						<ul>
							<li class="text-info"><text-align:"center">Endereço</h2></li></br></ul>

							<ul>
								<li class="text-info">Rua:</li>
								<li><input type="text" name="rua_user" value="<?php echo "$nome"; ?>" id="rua_user"></li>
							</ul>
							<ul>
								<li class="text-info">Numero:</li>
								<li><div class="resizedN"> <input type="text" name="numero_user" value="<?php echo "$numero"; ?>" id="numero_user"></div></li>
							</ul>
							<ul>
								<li class="text-info">Bairro:</li>
								<li><div class="resizedB"><input type="text" class="resizedBairro" name="bairro_user" value="<?php echo "$bairro"; ?>" id="bairro_user"></div></li>
							</ul>
							<ul>
								<li class="text-info">Cidade:</li>
								<li><div class="resizedC"><input type="text" class="resizedCidade" name="cidade_user" value="<?php echo "$cidade"; ?>" id="cidade_user"></div></li>
							</ul>
							<ul>
								<li class="text-info">CEP:</li>
								<li><div class="resizedCEP"><input type="text" class="resizedCEP" name="cep_user" value="<?php echo "$cep"; ?>" id="cep_user"></div></li>
							</ul>                           

							<ul>
								<li class="text-info">Estado:</li>
								<li><select name="estado_user">

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
								</select>	<br/></li>
							</ul>
							<input type="submit" value="Confirmar Alteração">
						</form>
					</div>
				</div>
				<div class="reg-right">
					<h3>Alteração de dados pessoais</h3>
					<div class="strip"></div>
					<p>Altere dados pessoais caso houve algum erro no momento do cadastro ou alguma mudança de endereço, telefone ou email.</p>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- registration-form -->


		<div class="cards text-up">	</div>
		
		<div class="footer">
			<div class="container">
				<div class="footer_top">
					<div class="span_of_4">
						<div class="col-md-3 span1_of_4">


						</div>
						<div class="col-md-3 span1_of_4">
							<style="text-align:justify"><h4>CONTAS</h4>
							<ul class="f_nav">
								<li><a href="account.html">REALIZE O LOGIN </a></li>
								<li><a href="register.html">CRIE UMA CONTA</a></li>
								<li><a href="consultas.html">CONSULTAR USUÁRIOS</a></li>
								<li><a href="#">CONFIGURAÇÕES DA CONTA</a></li></style>

							</ul>				
						</div>
						<div class="col-md-3 span1_of_4">
							<h4>DÚVIDAS</h4>
							<ul class="f_nav">
								<li><a href="#">O QUE É A CEARCHI SERVIÇOS</a></li>
								<li><a href="#">O QUE É A BUG MONKEYS</a></li>
								<li><a href="#">COMO FUNCIONA O SITE</a></li>
								<li><a href="#">PARCEIROS</a></li>
							</ul>	
						</div>

						<div class="col-md-3 span1_of_4">

						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="cards text-center">
					<img src="images/cards.jpg" alt="" />
				</div>
				<div class="copyright text-center">
					<p>© 2016 CEARCHI Serviços. All Rights Reserved | Design by BUGMONKEYS SOFTWARE</p>
				</div>
			</div>
		</div>
	</body>
	</html>