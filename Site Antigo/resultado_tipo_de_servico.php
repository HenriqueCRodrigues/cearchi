<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Cearchi | Consultar </title>
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
						<li><a href="accountconfig">configurações da conta</a></li>
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
						Consulta de usuários
					</li>
				</ul>
				<ul class="previous">
					<li><a href="index.html">Voltar para página anterior</a></li>
				</ul>
				<div class="clearfix"></div>
			</div>

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


			<h2>Consulta de usuários </h2>
			<p>Aqui serão adicionados alguns campos:</p></br>

			<table>
				<tr>
					<th>Serviço</th>
					<th>Descrição</th>


				</tr>

				<?php 
							$busca = $_POST['tipo_de_servico'];
							$sql = mysql_query("SELECT * FROM tipos_de_servico WHERE servico_ts like '%$busca%'");

							$row = mysql_num_rows($sql);


				if($row > 0)
							{
								while ($linha = mysql_fetch_array($sql)) 
								{
									$servico = $linha['servico_ts'];
									$descricao = $linha['descricao_ts'];
									$id = $linha['id_ts'];
								
								
								echo "<tr>";
								echo "<td>$servico</td>";
								echo "<td>".$descricao."<form method='post' action='alterar_tipo_de_servico.php?id_ts=".$id."'><input type='submit' value='Alterar 'title='Alterar'></form></td>";
								echo "</tr>";


															
															

								}

							}
							?>
			</table>

		</br>
	</br>

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
							<li><a href="consultar.php">CONSULTAR USUÁRIOS</a></li>
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
</html>