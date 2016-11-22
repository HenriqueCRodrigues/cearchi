<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";
$nome = $_SESSION['nome_user'];
$id = $_SESSION['id_user'];
$tipo = $_SESSION['tipo_usuario'];
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cearchi - Menu Solicitação de Serviços</title>
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
                     <td><font color="white">.....</font>      <input type='image' title='Buscar' src='images/lupa.png' width="40" height="40"></td>
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
            <li class="cta"><a href="perfil.php">Retorne ao Seu Perfil</a></li>
            
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
             <a href="index.php" title="Retornar a Pagina Principal">Home</a>&nbsp;
             <span>&gt;</span>
           </li>
           <li class="home">
             <a href="perfil.php" title="Retornar para o Seu Perfil">Perfil</a>&nbsp;
             <span>&gt;</span>
           </li>

           <li class="women">
            <font color="white">Menu solicitação de serviços</font>
          </li>
        </ul>
        <ul class="previous">
          <li><a href="perfil.php" title="Retornar para o Seu Perfil">Retornar</a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div></div></header>

    <div class="container">
     <style>
      table {
       border-collapse: collapse;
       width: 100%;
     }

     th, td {
       text-align: center;
       padding: 0px;
     }

     tr:nth-child(even){background-color: #C2DCFF}
   </style>


   <x2>Solicitação de serviços </x2>
   <p>Aqui estão presentes todos os serviços solicitados:</p></br>

   <table>
    <tr>
     <th><x1>Prestador</x1></th>
     <th><x1>Situação</x1></th>
     <th><x1>Tipo de serviço</x1></th>
     <th><x1></x1></th>

   </tr>

   <?php

   if (strcmp($tipo, 'C') ==0) 
   {

    $sql = mysql_query("SELECT * FROM usuario INNER JOIN solicitacao_de_servico ON usuario.id_user=solicitacao_de_servico.fk_id_user_contratante WHERE id_user = '$id'");
    while ($linha1 = mysql_fetch_array($sql)) 
    { 
      $id_terceiro = $linha1['fk_id_user_prestador'];
      $nome = $linha1['nome_user'];

      $sql1 = mysql_query("SELECT * FROM usuario INNER JOIN servicos_fornecidos ON usuario.id_user=servicos_fornecidos.fk_id_user INNER JOIN tipos_de_servico ON servicos_fornecidos.fk_id_ts=tipos_de_servico.id_ts WHERE id_user='$id_terceiro' ");
      $linha2 = mysql_fetch_array($sql1);
      $servico = $linha2['servico_ts'];
      $status = $linha1['status_ss'];
      $id_ss = $linha1['id_ss'];


      if (strcmp($status, 'A')==0) 
      {
        $status = 'Em Andamento';
      }
      if (strcmp($status, 'C')==0) 
      {
        $status = 'Cancelado';
      }
      if (strcmp($status, 'F')==0) 
      {
        $status = 'Finalizado';
      }
//echo '<td><a href="mensagem?assunto='.$id_assunto.'"><font color="black" >Visualizar Mensagens</font></a></td>';

      echo "<tr>";
      echo '<th><font color="black" >'.$nome.'</font></th>';
      echo '<th><font color="black" > '.$status.'</font></th>';
      echo '<th><font color="black" >'.$servico.'</font></a></th>';
      echo '<th><a href="Visualizar_solicitacao.php?id_terceiro='.$id_terceiro.'&servico_ts='.$servico.'&id_ss='.$id_ss.'"><font color="black" >Visualizar Solicitação</font></a></th>';
      echo "</tr>";
    }



  }

  elseif (strcmp($tipo_usuario, 'P')==0) 
  {

    $sql = mysql_query("SELECT * FROM usuario INNER JOIN solicitacao_de_servico ON usuario.id_user=solicitacao_de_servico.fk_id_user_prestador INNER JOIN servicos_fornecidos ON usuario.id_user=servicos_fornecidos.fk_id_user INNER JOIN tipos_de_servico ON servicos_fornecidos.fk_id_ts=tipos_de_servico.id_ts WHERE id_user = '$id'");
    while ($linha1 = mysql_fetch_array($sql)) 
    { 
      $id_terceiro = $linha1['fk_id_user_prestador'];
      $nome = $linha1['nome_user'];
      $servico = $linha1['servico_ts'];
      $status = $linha1['status_ss'];
      $id_ss = $linha1['id_ss'];


      if (strcmp($status, 'A')==0) 
      {
        $status = 'Em Andamento';
      }
      if (strcmp($status, 'C')==0) 
      {
        $status = 'Cancelado';
      }
      if (strcmp($status, 'F')==0) 
      {
        $status = 'Finalizado';
      }


      echo "<tr>";
      echo '<th><font color="black" >'.$nome.'</font></th>';
      echo '<th><font color="black" > '.$status.'</font></th>';
      echo '<th><font color="black" >'.$servico.'</font></a></th>';
      echo '<th><a href="Visualizar_solicitacao.php?id_terceiro='.$id_terceiro.'&servico_ts='.$servico.'"><font color="black" >Visualizar Solicitação</font></a></th>';
      echo "</tr>";
    
    }
  }

  ?>


</table>
</br>


</br>
</br>

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

