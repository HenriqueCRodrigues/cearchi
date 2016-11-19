<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";
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
	<title>Cearchi | Menu de mensagens </title>
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
						<li><a href="accountconfig.php">configurações da conta</a></li>
						<li><a href="contact.html">CONTATO</a></li>
					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			<!--/.navbar-->
		</div>
	</div>

	<div class="registration-form">
		<div class="container">
			<div class="dreamcrub">
				<ul class="breadcrumbs">
					<li class="home">
						<a href="index.html" title="Go to Home Page">Home</a>&nbsp;
						<span>&gt;</span>
					</li>
					<li class="women">
						Menu de mensagens
					</li>
				</ul>
				<ul class="previous">
					<li><a href="index.html">Voltar para página anterior</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- ADICIONAR DAQUI PRA BAIXO O CONTEUDO DO SITE-->
			<!-- ADICIONAR DAQUI PRA BAIXO O CONTEUDO DO SITE-->

			<style>
				table {
					border-collapse: collapse;
					width: 100%;
				}

				th, td {
					text-align: center;
					padding: 8px;
				}

				tr:nth-child(even){background-color: #FBCB98}
			</style>


			<h2>Menu de mensagens </h2>
			<p></p></br>

			<?php


			if (!isset($_GET["assunto"])) {
				header("Location: index.html");
			}

			$assunto = $_GET["assunto"];

			$sql = mysql_query("SELECT * FROM msg WHERE id_assunto = '$assunto'");
			$row = mysql_num_rows($sql);


			if ($row > 0) {
				while ($linha = mysql_fetch_array($sql)) {
					
					$msg = $linha['mensagem'];
					$dest = $linha['id_dest'];
					$reme = $linha['id_reme'];
					$assunto = $linha['id_assunto'];
					$sql2 = mysql_query("SELECT nome_user FROM usuario WHERE id_user = '$reme'");
					$nome = mysql_fetch_array($sql2);
					
					echo '<center>
					<div class="container">
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">'.$nome[0].' diz:</h3>
								</div>
								<div class="panel-body">
									'.$msg.'
								</div>
							</div>
						</center>';
						
					}
				}
				

				?>

				<form method="post" action="enviar_mensagem.php?id_assunto=<?php echo "$assunto";?>&id_dest=<?php echo "$dest"; ?>">


						Nova Mensagem:<br>

						<textarea type="text" cols="60" rows="5" name="msg" id="msg"></textarea>
						<input type="submit" value="Enviar">
				</form>

				</br>
			</br>




			<!-- ADICIONAR DAQUI PRA CIMA O CONTEUDO DO SITE-->     
			


	<!-- COLOCAR AQUI O  CONTEUDO DE CORPO-->	
	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Sobre nós</h3>
				<p>Já nos conhece? Deseja fazer parte da nossa equipe? Estamos te esperando! </p></br>
				<p><a href="about.html" class="btn btn-primary btn-outline with-arrow btn-sm"> Clique aqui! <i class="icon-arrow-right"></i></a></p>
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Nossos serviços</h3>
				<ul class="float">
					<li><a href="#">Web Design</a></li>
					<li><a href="#">Branding &amp; Identity</a></li>
					<li><a href="#">Free HTML5</a></li>
					<li><a href="#">HandCrafted Templates</a></li>
				</ul>
				<ul class="float">
					<li><a href="#">Free Bootstrap Template</a></li>
					<li><a href="#">Free HTML5 Template</a></li>
					<li><a href="#">Free HTML5 &amp; CSS3 Template</a></li>
					<li><a href="#">HandCrafted Templates</a></li>
				</ul>

			</div>

			<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Siga-nos</h3>
				<ul class="fh5co-social">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-google-plus"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>
			
			
			<div class="col-md-12 fh5co-copyright text-center">
				<p>&copy; 2016 Cearchi Serviços. All Rights Reserved. <span>Developed by BUG MONKEYS SOFTWARES</a></span></p>	
			</div>
			
		</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

