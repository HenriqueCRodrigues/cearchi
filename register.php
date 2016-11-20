<?php
include "Conexao_mysql.php";
$sql = "SELECT * FROM estados ORDER BY sigla";
$res = mysql_query($sql, $conexao);
$num = mysql_num_rows($res);
for ($i = 0; $i < $num; $i++) {
  $dados = mysql_fetch_array($res);
  $arrEstados[$dados['cod_estados']] = $dados['sigla'];
}

  	session_start();
	if (!isset($_SESSION['login_user']) || !isset($_SESSION['senha_user']))
	{
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cearchi - Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FreeHTML5.co
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
 <header id="fh5co-header" role="banner">
 <div class="header">
    <div class="header-top-strip">
      <div class="container">
        <div class="header-top-left">
                 <div class="logo">
             
            
              <div class="form-group">
              <ul>
            <a href="account.php"> <img src="images/icon1.png" height="35" width="35"><font color= #EBEBEB size=3>Login</font></a>&nbsp; &nbsp; &nbsp; 
            <a href="register.php"><img src="images/pw.png" height="35" width="35"><font color= #EBEBEB size=3>Crie uma conta</font></a>

              
        
            </ul>
            </div>
          
                    </div>
        </div> </div>
      </div>
    </div>
   </header>

  <div id="fh5co-page">
  <header id="fh5co-header" role="banner">
    <div class="container">
      <div class="header-inner">
        <a href="index.php" ><img src="images/logopeq.png"></a>
        <nav role="navigation">
          <ul>
            <li><a href="index.php">Inicio</a></li>

            
            
            <li><a href="contact.php">Contato</a></li>
            <li><a href="about.php">Sobre</a></li>
            <li class="cta"><a href="register.php">Crie sua conta</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- COLOCAR AQUI O  CONTEUDO DE CORPO-->

    </div>

<div id="fh5co-page">
  <header id="fh5co-header" role="banner">
  <div class="container">
    <div class="login-page">
          <div class="dreamcrub">
           <ul class="breadcrumbs">
                   <li class="home">
                       <a href="index.php" title="Retornar a Pagina Inicial">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                        <font color="white"> Registro </font>
                    </li>
                </ul>
                <ul class="previous">
                  <li><a href="index.php" title="Retornar a Pagina Inicial">Retornar</a></li>
                </ul>
                <div class="clearfix"></div>
         </div>
         </div></div></header>

	<!-- COLOCAR AQUI O  CONTEUDO DE CORPO-->

		<div class="container">
			<div class="row">
				<div class="Register-form">
					<x3>Cadastrando conta</x3>
					<p>Criando uma conta de usuário prestador de serviço você poderá oferecer serviços para usuários contratantes, que poderão entrar em contato através do site caso tenham interesse no serviço oferecido perto de suas devidas regiões. As partes podem negociar o serviço e após a finalizaçao deste, o contratante poderá fazer uma avaliação do serviço e do prestador com notas e observações!</p><br><br>

				</div>
				<p>Bem vindo, por favor insira os dados solicitados para continuar</p>
					 <p>Se você já é cadastrado no site,<a href="account.php"> <font color= "#2B5488">CLIQUE AQUI!</font></a></br></p>
					 
					 <form method="post" action="Confirmar_Cadastro.php">

					
					<div class="row">
						
						<div class="col-md-6">
						<li class="text-info" style="list-style-type:none">Nome Completo </li>
							<div class="form-group">
								<input class="form-control" placeholder="Nome" type="text" name="nome_user" id="nome_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Login </li>
							<div class="form-group">
								<input class="form-control" placeholder="Login" type="text" name="login_user" id="login_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Senha </li>
							<div class="form-group">
								<input class="form-control" placeholder="Senha" type="password" name="senha_user" id="senha_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Confirma senha </li>
							<div class="form-group">
								<input class="form-control" placeholder="Senha" type="password" name="senha_user" id="senha_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">E-mail </li>
							<div class="form-group">
								<input class="form-control" placeholder="Email" type="text" name="emai_user" id="emai_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Telefone </li>
							<div class="form-group">
								<input class="form-control" placeholder="Telefone" type="text" name="telefone_user" id="telefone_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">CPF </li>
							<div class="form-group">


								<input class="form-control" placeholder="CPF" type="text" name="cpf_user" id="cpf_user" maxlength="14" onkeypress="this.value = FormataCpf(event)" onpaste="return false;"/>


							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">RG </li>
							<div class="form-group">
								<input class="form-control" placeholder="RG" type="text" name="rg_user" id="rg_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none"> Sexo </li>
								<div class="form-group"> <select class="form-control3" name="sexo_user" id="sexo_user">
  <option value="">&nbsp;&nbspSelecione</option>
  <option value="Masculino">Masculino</option>
  <option value="Feminino">Feminino</option>
  </select>
						</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Data de nascimento </li>
							<div class="form-group">
								<input class="form-control3" type="text" placeholder="dd/mm/aaaa" name="nascimento_user" id="nascimento_user">
							</div>
						</div>
						
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Rua: </li>
							<div class="form-group">
								<input class="form-control" placeholder="Rua" type="text" name="rua_user" id="rua_user">
							</div>
						</div>
							<div class="col-md-6">
								<li class="text-info" style="list-style-type:none">Número: </li>
								<div class="form-group">
									<input class="form-control" placeholder="Número" type="text" name="numero_user" id="numero_user">
								</div>
							</div>
						<div class="col-md-6">
						<li class="text-info" style="list-style-type:none">Estado:</li>
							 <div class="form-group"><select class="form-control3" name="estado_user">
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
</select>	<br/></li>
						
						</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Cidade: </li>
							<div class="form-group">
								<input class="form-control" placeholder="Cidade" type="text" name="cidade_user" id="cidade_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Bairro: </li>
							<div class="form-group">
								<input class="form-control" placeholder="Bairro" type="text" name="bairro_user" id="bairro_user">
							</div>
						</div>
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">CEP: </li>
							<div class="form-group">
								<input class="form-control" placeholder="CEP" type="text" name="cep_user" id="cep_user">
								</br>
							</div>
						</div>
											
						<div>
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

						<li class="text-info" style="list-style-type:none"> &nbsp&nbsp&nbsp Tipo de Usuário: </li>
						</br>
						<div class="col-md-12">
						<div class="form-group">
	<input type="radio" onclick="verificar()" name="opcao" value="C" id="contratante"> 
	<label> &nbsp Contratante</label><label> &nbsp &nbsp &nbsp </label>
	<input type="radio" onclick="verificar()" name="opcao" value="P" id="prestador_de_servico"> 
	<label > &nbsp Prestador de Serviço </label>
  
						</div>
						</div>
						<div id="verifica" style="visibility:hidden">
	
						<div class="col-md-6"></br>
						<li class="text-info" style="list-style-type:none">Tipo de Serviço: </li>
						<div class="form-group">
   <select class="form-control3" name="tipos_de_servico_id_ts">
    <option value="">&nbsp&nbspSelecione</option>
    <?php
    	$sql = mysql_query("SELECT * FROM tipos_de_servico ORDER BY servico_ts");

			$row = mysql_num_rows($sql);

			if ($row > 0) 
			{
				while ($linha = mysql_fetch_array($sql)) 
				{
					$tipos_de_servico = $linha['servico_ts'];
					echo "<option value='$tipos_de_servico'>$tipos_de_servico</option>";

				}
					

			}
    ?>
	</select>
						</div>
						</div>
						
						<div class="col-md-6"></br>
						<li class="text-info" style="list-style-type:none">Locais de Atuação:</li>
      <div>
      <label>Estado:</label>
      <select class="form-control3" name="estado" id="estado" onchange="buscar_cidades()">
        <option value="">&nbsp&nbspSelecione...</option>
        <?php foreach ($arrEstados as $value => $name) {
          echo "<option value='{$value}'>{$name}</option>";
        }?>
      </select>
      </div>
      <div id="load_cidades">
        <label>Cidades:</label>
        <select class="form-control3" name="cidade" id="cidade">
          <option value="">&nbsp&nbspSelecione a cidade</option>
        </select>
      </div>
    </form>
						</div>
    </div>
	</div>
	   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
    function buscar_cidades(){
      var estado = $('#estado').val();
      if(estado){
        var url = 'ajax_buscar_cidades.php?estado='+estado;
        $.get(url, function(dataReturn) {
          $('#load_cidades').html(dataReturn);
        });
      }
    }
    </script>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Confirmar Cadastro" class="btn btn-primary" type="submit">
								<p class="click">Clicando no botão, você está de acordo com os nossos <a href="#">Termos e Condições Políticas.</a></p> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<!-- COLOCAR AQUI O  CONTEUDO DE CORPO-->	
	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>About Us</h3>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm">Join Us <i class="icon-arrow-right"></i></a></p>
			</div>
			<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Our Services</h3>
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
				<h3>Follow Us</h3>
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
	<script type="text/javascript">
	function verificaNumero(e)
	{
		if(e.which != 8 && e.which != 0  && (e.which < 48 || e.which > 57))
		{
			return false;
		}
	}
		
		$(document).ready(function()
		{
			$("#cpf_user").keypress(verificaNumero);

		});


			function FormataCpf(evt)
			{

			vr = (navigator.appName == 'NetScape') ?evt.target.value : evt.srcElement.value;

			if(vr.length == 3) vr = vr+".";
			if(vr.length == 7) vr = vr+".";
			if(vr.length == 11) vr = vr+".";
			return vr;
			}
</script>
	</body>
	
</html>

<?php

}

else
{
	header("location: index.php");
}


?>