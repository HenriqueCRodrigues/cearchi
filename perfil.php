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
  <title>Cearchi - Index</title>
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

					<a  href="perfil.php"><img src="images/icon2.png" height="60" width="60"></a><font color= #EBEBEB></font><a href="perfil.php"><i><?php echo "$nome"; ?></i></a>
					
 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
               <li><i>
           <form method='post' action="Resultado.php">
           <table width="300" align="center">
           <tr>

           <td><input class="form-control2" name="nome_user" id="nome_user" placeholder="  Pesquisar..." type="text"> </i></li></td>
           <td><input type='image' title='Buscar' src='images/lupa.png' width="40" height="40"></td>
            </tr>
          

           </table>
           </form>
              
        
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
            <li><a href="menumensagens.php">Mensagens</a></li>
            <li><a href="menusolicitacao.php">Serviços</a></li>
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
                       <a href="index.php" title="Retornar a Pagina Home">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                        <font color="white"> Perfil </font>
                    </li>
                </ul>
                <ul class="previous">
                  <li><a href="index.php" title="Retornar a Pagina Home">Retornar</a></li>
                </ul>
                <div class="clearfix"></div>
         </div>
         </div></div></header>


  <div class="container">
<div class="jumbotron">
        <div class="redondo">
        <img src="images/icon2.png" height="100" width="100" />
        <x4 text-align="right">
        <?php

        if (isset($id_terceiro)) 
        {

          $sqlA = mysql_query("SELECT * FROM relacoes WHERE (id_user1='$id_secao' AND id_user2='$id_terceiro') OR (id_user2='$id_secao' AND id_user1='$id_terceiro')");

          $row = mysql_num_rows($sqlA);         

          echo "$nome_destinatario";
          echo "</x4>&nbsp;";
          if ($row > 0) 
          {
            echo "<a href='desfazer_amigo.php?id_terceiro=".$id_terceiro."'><img src='images/removeicon.png' height='25' width='25' /></a>";   
          }
          else
          {
            echo "<a href='solicita_relacao.php?id_terceiro=".$id_terceiro."'><img src='images/addicon.png' height='25' width='25' /></a>";
          }          
        
        }
        else
        {
          echo "$nome";
        }

         ?>
        </div>


<nav class="navbar navbar-inverse">
        <div class="container">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
            <li class="active"><a href="#">Perfil</a></li>
            <?php 
            if (!isset($id_terceiro))
            {
            echo '<li><a href="visualizar_amigos.php">Amigos</a></li>';
            }

  $sql11 = mysql_query("SELECT * FROM notificacao WHERE id_destinatario LIKE '$id_secao'") or die(mysql_error());
  $row = mysql_num_rows($sql11);

            if (!isset($id_terceiro)) 
            {
            echo '<li><a href="notificacoes.php"><font color="white" size="4">';
                if(strcmp($row, 0) != 0)
                {
                  echo "($row)";
                }
            
            }?>
            </font> Notificações de Amizadades</a></li> 
                

             
            <?php 
            if (isset($id_terceiro)) 
            {
              echo "<li><a href='mensagemcadastro?id_terceiro=".$id_terceiro."'>Mensagens</a></li>";
            }
            else
            {
              echo "<li><a href='menumensagens.php'>Mensagens</a></li>";
            }
            
            if (isset($id_terceiro)) 
            {
                if(strcmp($tipo_user, 'P') == 0)
                {
                  echo "<li><a href='cadastrar_solicitacao.php?id_terceiro=".@$id_terceiro."'>Solicitar Serviço</a></li>";
                  echo "<li><a href='menusolicitacao.php'>Serviços contratados</a></li>";
                }
                              
            }
            else
            {
                echo "<li><a href='menusolicitacao.php'>Serviços contratados</a></li>";
            }
            

            if (isset($id_terceiro)) 
            {
              
            }
            else
            {    

            ?>
            <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configurações <b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3">
                  <div class="row">
                    <div class="col-sm-8">
                      <ul class="multi-column-dropdown">
                        <li><a href="consultar.php"> Realizar Consulta</a></li>
                        <li><a href="changeinf.php">Alterar Informações Pessoais</a></li>
                        <li><a href="contact.html"> Reportar Erros</a></li>
                        <li><a href="deletarconta.php">Deletar Conta</a></li>
                        
                      </ul>
                    </div>
                    <div class="col-sm-1">
                      <ul class="multi-column-dropdown">
                      </ul>
                    </div>
                    <div class="col-sm-1">
                      <ul class="multi-column-dropdown">
                      </ul>
                    </div>
              <div class="clearfix"></div>
                  </div>
                </ul>
            </li>

            
                    
                    <li><a href="Logout.php">Deslogar</a></li>

                    <?php } ?>
                     </li></ul></div></div>
          </div><!--/.nav-collapse -->
</div>
      </nav>

    <div class="container">
      <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Muito Bom *****</h3>
            </div>
            <div class="panel-body">
              Faz um ótimo serviço como pintor, nunca vi minhas paredes tão paradas!
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Péssimo *</h3>
            </div>
            <div class="panel-body">
              Contratei para rebocar minha parede, e não sabia nem fazer a massa!
            </div>
          </div>


                </div>
            </header>
         </div> 
         <div class="clearfix"> </div>
       </div>
       </div>
</div>


  </div>





	<!-- COLOCAR AQUI O  CONTEUDO DE CORPO-->	
	<footer id="fh5co-footer" role="contentinfo">
	
		<div class="container">
			<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<h3>Sobre nós</h3>
				<p>Já nos conhece? Deseja fazer parte da nossa equipe? Estamos te esperando! </p>
				<p><a href="#" class="btn btn-primary btn-outline with-arrow btn-sm"> Entre em contato! <i class="icon-arrow-right"></i></a></p>
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

