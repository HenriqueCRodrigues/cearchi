<?php

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
  <title>Cearchi - Login/title>
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
    </div></header>


  <div class="content">
  <div class="container">
    <div class="login-page">
  
               <div class="account_grid">
         <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
           <x2>Ainda não sou cadastrado.</x2>
         <p>Criando uma conta no Cearchi, caso seja um contratante, você poderá encontrar vários tipos de serviços sendo prestados perto de você e caso seja um prestador de serviço, você poderá oferecer seus serviços para pessoas de sua região. É tudo grátis.</p>
         <a class="btn btn-primary" href="register.php">Criar uma conta</a>
         </div>
         <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
          <x2>Já sou cadastrado</x2>
        <p>Se você já possui uma conta, é só acessá-la aqui.</p>
        <form action="Autenticar_Login.php" method="post">
          
                  <div>
          <span>Login</span>
          <input type="text" required="required" name="login_user" id="login_user"> 
          </div>
          
                  <div>
          <span>Senha</span>
          <input type="password" required="required" name="senha_user" id="senha_user"> 
          </div>
          
          <input value="Conectar" class="btn btn-primary" type="submit">&nbsp&nbsp<a class="forgot" href="#">Esqueceu sua senha?</a>
          </form>
         </div> 
         <div class="clearfix"> </div>
       </div>
       </div>
</div></div>



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

<?php

}

else
{
  header("location: index.php");
}


?>