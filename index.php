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
  <?php 
    session_start();
  if (!isset($_SESSION['login_user']) || !isset($_SESSION['senha_user']))
  {
  
  ?>
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


  <div class="container">
    
  </div>
  <aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <ul class="slides">
        <li style="background-image: url(images/slide_1.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>Ainda não é cadastrado? Não perca tempo!</h2>
                <p><a href="register.php" class="btn btn-primary btn-lg">Crie sua conta!</a></p>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(images/slide_2.jpg);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>Saiba mais sobre a ferramenta!</h2>
                <p><a href="#" class="btn btn-primary btn-lg">Informações!</a></p>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(images/slide_3.jpg);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>Conheça nossa história!</h2>
                <p><a href="#" class="btn btn-primary btn-lg">Clique aqui!</a></p>
              </div>
            </div>
          </div>
        </li>
        </ul>
      </div>
  </aside>
    <?php }

    else
    {
      $nome = $_SESSION['nome_user'];
    ?>

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
            <li class="cta"><a href="perfil.php">Acesse seu Perfil</a></li>
          </ul>
        </nav>
      </div>
    </div>
      </header>


  <div class="container">
    
  </div>
  <aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
      <ul class="slides">
        <li style="background-image: url(images/slide_1.jpg);">
          <div class="overlay-gradient"></div>
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>Seja bem vindo ao CEARCHI SERVIÇOS!</h2>
                <p><a href="#" class="btn btn-primary btn-lg">Conheça a ferramenta!</a></p>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(images/slide_2.jpg);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>Conheça os serviços oferecidos!</h2>
                <p><a href="consultar.php" class="btn btn-primary btn-lg">Consulte!</a></p>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(images/slide_3.jpg);">
          <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h2>Adicione seus amigos!</h2>
                <p><a href="visualizar_amigos.php" class="btn btn-primary btn-lg">Clique aqui!</a></p>
              </div>
            </div>
          </div>
        </li>
        </ul>
      </div>
  </aside>
 <?php }
 ?>

  
  
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

  </body>
</html>



