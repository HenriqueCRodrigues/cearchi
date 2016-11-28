<?php 
  include "Conexao_mysql.php";
  include "Validador_de_Login.php";
  $nome = $_SESSION['nome_user'];


  @$id_terceiro = $_GET['id_terceiro'];
  $id_secao = $_SESSION['id_user'];
  $sql = mysql_query("SELECT * FROM usuario WHERE id_user like '$id_terceiro'");
  $array = mysql_fetch_array($sql);
  $nome_destinatario = $array['nome_user'];
  $tipo_user = $array['tipo_usuario'];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cearchi - Gerar relatorio de tipo de serviço</title>
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
                          <div class="row">
                        
                              <div class="col-md-11">

                              <a  href="perfil.php"><img src="images/icon2.png" height="50" width="50"></a><font color= #EBEBEB>Você está conectado como:</font><a href="perfil.php"><i> <?php echo "$nome"; ?></i></a>
                              </div> 
                              <div class="col-md-1" align="right">  
                                <form method='post' action="Resultado.php">
                                <table>

                                  </tr>
                                  <td><input class="form-control2" name="nome_user" id="nome_user" placeholder="  Pesquisar..." type="text"></td>
                                  <td><font color="white">        </font><input type='image' title='Buscar' src='images/lupa.png' width="40" height="40"></td>
                                  </tr>
                                </table>
                                </form>
                              </div>
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
            <li><a href="menumensagens.php">Mensagens</a></li>
            
            <li><a href="#">Serviços</a></li>
            <li><a href="contact.php">Contato</a></li>
            <li><a href="about.php">Sobre</a></li>
            <li><a href="logout.php">Deslogar</a></li>
            <?php
            if (isset($id_terceiro)) 
            {
              echo "<li class='cta'><a href='perfil.php'>Retorne ao Seu Perfil</a></li>"; 
            }
            else
            {    
              echo "<li class='cta'><a href='index.php'>Retorne a Pagina Inicial</a></li>";
            }
            ?>
            
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
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                        <font color="white"> Relatório por Tipo de Serviço </font>
                    </li>
                </ul>
                <ul class="previous">
                  <li><a href="index.php">Retornar</a></li>
                </ul>
                <div class="clearfix"></div>
         </div>
         </div></div></header>

	<!-- COLOCAR AQUI O  CONTEUDO DE CORPO-->

		<div class="container">
			<div class="row">
				<div class="Register-form">
					<x3>Gerar relatório por tipo de serviço</x3>
					<p>Os relatórios por tipo de serviço oferecem informações sobre a quantidade de vezes que cada serviço foi prestado em um determinado período!</p><br><br>

				</div>
				
					 <form method="post" action="Resultado_relatorio_tipo_de_servico.php">

					
					<div class="row">
						
						<div class="col-md-6">
						<li class="text-info" style="list-style-type:none">Data inicial: </li>
							<div class="form-group">
								<input class="form-control3" type="text"  name="data_servico" id="data_servico" maxlength="10" onkeypress="this.value = FormataData(event)" onpaste="return false;"/>
							</div>
						</div>
						
						<div class="col-md-6">
						<li class="text-info" style="list-style-type:none">Data final: </li>
							<div class="form-group">
								<input class="form-control3" type="text"  name="data_servico_final" id="data_servico" maxlength="10" onkeypress="this.value = FormataData(event)" onpaste="return false;"/>
							</div>
						</div>
						
						<div class="col-md-6">
            <li class="text-info" style="list-style-type:none"> Tipo de Serviço: </li>
                <div class="form-group"> 
  <select class="form-control3" name="servico" id="servico">
  <option value="">&nbsp;&nbspSelecione</option>



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
						
						<div class="col-md-12">
							<div class="form-group">
								<input value="Gerar relatório" class="btn btn-primary" type="submit">
								<input value="Voltar" class="btn btn-primary" type="submit">
								<p class="click">Clicando no botão "Gerar relatório", você estará erando um relatório por tipo de serviço no período selecionado.</a></p> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<!-- COLOCAR AQUI O  CONTEUDO DE CORPO-->	
	<footer id="fh5co-footer" role="contentinfo">
  
    <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Sobre nós</h3>
        <font face="Raleway"><p  align="justify">O desenvolvimento do Cearchi Serviços foi realizado pela BUG MONKEYS SOFTWARES, criada por discentes da Universidade Federal de Itajubá. Já nos conhece? Deseja fazer parte da nossa equipe? Saiba mais! </p></font></br>
        <p><a href="about.php" class="btn btn-primary btn-outline with-arrow btn-sm"> Informações! <i class="icon-arrow-right"></i></a></p>
      </div>

      <div class="col-md-5" align="center">
        <h3>Nossos serviços</h3>
        <ul class="float2">
          <p align="center"><li><a href="index.php">Home Page</a></li>
          <li><a href="#">Patrocinadores</a></li>
          <li><a href="#">Parceiros</a></li>
          <li><a href="contact.php">Contato</a></li>
        </ul>
        </div>
        

      

      <div class="col-md-3">
        <h3>Siga-nos</h3>
        <ul class="fh5co-social">
          <li><a href="#"><i class="icon-twitter"></i></a></li>
          <li><a href="#"><i class="icon-facebook"></i></a></li>
          <li><a href="#"><i class="icon-google-plus"></i></a></li>
          <li><a href="#"><i class="icon-instagram"></i></a></li>
        </ul>
      </div>
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
      $("#data_servico").keypress(verificaNumero);
      $("#hora_servico").keypress(verificaNumero);

    });

      function FormataHora(evt)
      {

      vr = (navigator.appName == 'NetScape') ?evt.target.value : evt.srcElement.value;

      if(vr.length == 2) vr = vr+":";
      if(vr.length == 3) vr = vr
      return vr;
      }

      function FormataData(evt)
      {

      vr = (navigator.appName == 'NetScape') ?evt.target.value : evt.srcElement.value;

      if(vr.length == 2) vr = vr+"/";
      if(vr.length == 5) vr = vr+"/";
      if(vr.length == 9) vr = vr;
      return vr;
      }


</script>
	</body>
</html>

