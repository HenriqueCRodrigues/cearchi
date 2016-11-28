<?php
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";
	$id_ts = $_GET['id_ts'];
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
<title>Cearchi | Alterar tipo de registro</title>
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
				
						<li><a href="logout.php">sair</a></li>			
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
		    <li><a href="accountconfig.html">configurações da conta</a></li>
            <li><a href="contact.html">Gerência do sistema</a></li>
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
                       <a href="index.html" title="Go to Home Page">Admin</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Gerência do sistema &nbsp;
					   <span>&gt;</span>
                    </li>
					<li class="women">
                       Alteração de tipo de serviço
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Voltar para página anterior</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<h2>Alteração de tipo de serviço</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 <p>Insira os dados que deseja alterar no tipo de serviço.</p>


					 <?php echo "<form method='post' action='confirmar_alteracao_tipo_de_servico.php?id_ts=".$id_ts."'' >" ?>
						<?php
							
							$sql = mysql_query("SELECT * FROM tipos_de_servico WHERE id_ts like '$id_ts'");
							$linha = mysql_fetch_array($sql);
							$servico = $linha['servico_ts'];
							$descricao = $linha['descricao_ts'];


						?>

						 <ul>
							 <li class="text-info">Tipo de Serviço: </li>
							 <li><input type="text" name="tipo_de_servico" id="tipo_de_servico" value="<?php echo "$servico";?>"></li>
						 </ul>
						 
						 <ul>
							 <li class="text-info">Descrição:</li>
							 <li><textarea rows="5" cols="44" type="text" name="descricao_tipo_de_servico"  id="descricao_tipo_de_servico" ></textarea></li>
				
							<script>

							    document.getElementById("descricao_tipo_de_servico").value = '<?php echo "$descricao";?>';

							</script>

						 </ul>
						 					
						 <input type="submit" value="Alterar" id="btnCad"> &nbsp &nbsp &nbsp
<input type="button" value="Voltar" onclick="Voltar()">
<script>
function Voltar() 
{
    location.href="index.html";
}
</script>
						 <p class="click">Clicando no botão, você estará alterando o tipo de serviço e disponibilizando-o aos usuários prestadores de serviço!</a></p> 
					 </form>
				 </div>
			</div>
			<div class="reg-right">
				 <h3>Alterar tipos de serviço</h3>
				 <div class="strip"></div>
				 <p>Altere tipos de serviço para a experiência dos usuários com o site!</p>
				 
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

		<script>


</script>
</body>
</html>