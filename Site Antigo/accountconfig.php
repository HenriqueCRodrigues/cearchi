<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";
	$tipo_usuario = $_SESSION['tipo_usuario'];

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
<title>Cearchi | Configuração de Conta</title>
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
						<li><a href="register"><img src="images/pw.png">Crie uma conta</a></li>			
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
		<!-- registration-form -->
<div class="registration-form">
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Configurações de conta
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Voltar para página anterior</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<h2>Configurações de conta</h2>
		<div class="configuration-grids">
			<div class="reg-form">
				<div class="reg">
					
					 <form>
							<li><a href="changeinf.php">Alterar informações pessoais</a></li>
							<!--<li><a href="changepass.html">Alterar senha</a></li>-->

							<?php 

									if (strcmp($tipo_usuario, 'C') == 0) {
										echo '<li><a href="consultas.html">Consultar usuários</a></li>';
									}

									if (strcmp($tipo_usuario, 'P') == 0) {
										echo '<li><a href="Resultado_Prestador">Consultar seu dados</a></li>';
									}



							?> 

							<li><a href="menumensagens">Gerenciar mensagens </a></li>
							<li><a href="contact.html">Reportar erros</a></li>
							<li><a href="deleteaccount.html">Deletar conta</a></li>
							<li><a href="logout">Sair da conta</a></li>  

							

					</form>
				 </div>
			</div>
			<div class="reg-right">
				 <h3>Configuração de conta</h3>
				 <div class="strip"></div>
				 <p text-align="justify">Aqui você pode escolher entre alterar informações pessoais da conta, consultar os perfis de outros usuários, reportar algum erro presente no programa, deletar a conta e sair da mesma. </p>
				 
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
						<li><a href="register.php">CRIE UMA CONTA</a></li>
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