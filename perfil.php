<?php 
  include "Conexao_mysql.php";
  include "Validador_de_Login.php";
  $nome = $_SESSION['nome_user'];
  $tipo_usuario = $_SESSION['tipo_usuario'];


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
    <title>Cearchi - Perfil</title>
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
          $sqlN = mysql_query("SELECT * FROM notificacao WHERE (id_destinatario='$id_secao' AND id_remetente='$id_terceiro') OR (id_destinatario='$id_terceiro' AND id_remetente='$id_secao') ");
          $row = mysql_num_rows($sqlA); 
          $row1 = mysql_num_rows($sqlN);         

          echo "$nome_destinatario";
          echo "</x4>&nbsp;";
          

          if ($row > 0) 
          {
            echo "<a href='desfazer_amigo.php?id_terceiro=".$id_terceiro."'><img src='images/removeicon.png' height='25' width='25' /></a>";   
          }

          else
          {
            if ($row1 > 0) 
            {
              echo "<img title='Aguardando ".$nome_destinatario." aceitar o pedido de amizade' src='images/loader.gif' height='25' width='25' /></a>";
            }

            else
            {
               echo "<a href='solicita_relacao.php?id_terceiro=".$id_terceiro."'><img src='images/addicon.png' height='25' width='25' /></a>";
            }

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

                echo "</font> Notificações de Amizades</a></li>";
            
            }?>
             
                

             
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
                  echo "<li><a href='cadastrar_solicitacao.php?id_terceiro=".$id_terceiro."&nome_destinatario=".$nome_destinatario."'>Solicitar Serviço</a></li>";
                  echo "<li><a href='menusolicitacao.php'>Serviços contratados</a></li>";
                }
                 if(strcmp($tipo_user, 'C') == 0)
                {
                  
                  echo "<li><a href='menusolicitacao.php?id_s_somente=".$id_terceiro."'>Serviços contratados</a></li>";
                }



                              
            }
            else
            {
                echo "<li><a href='menusolicitacao.php?id_s_somente=".$id_terceiro."'>Serviços contratados</a></li>";
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
                        <?php
                            if(strcmp($tipo_usuario, 'P')==0){
                              echo "<li><a href='adicionar_servico_cidade.php'>Adicionar Locais de Atuação e serviços</a></li>";
                               echo "<li><a href='remover_servico_cidade.php'>Remover Locais de Atuação e serviços</a></li>";
                            }
                        ?>
                        
                        <li><a href="contact.php"> Reportar Erros</a></li>
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

    
            <?php 
             $sqlN = mysql_query("SELECT * FROM avaliacoes WHERE id_destinatario='$id_terceiro'");
             $sqlNm = mysql_query("SELECT * FROM avaliacoes WHERE id_destinatario='$id_secao'");

        



            if (isset($id_terceiro) || strcmp($tipo_usuario, 'P') == 0)

          {
            echo "<div class='container'>
                  <div class='col-sm-4'>";

           if (!isset($id_terceiro)) 
           {
                $combo = $sqlNm;
           }
            
            else
            {
               $combo = $sqlN;
            }
             while ($array =  mysql_fetch_array($combo))
            {
              $estrela = $array['estrelas_avaliacao'];
              $descricao = $array['descricao_avaliacao'];


              if (strcmp($descricao, '') == 0) 
              {
                  $descricao = 'O avaliador, optou por não fornecer a descrição.';
              }

              if (strcmp($estrela, 5) == 0) 
              {
                  $estrela_qualidade = 'Muito Bom';
              }

              if (strcmp($estrela, 4) == 0) 
              {
                  $estrela_qualidade = 'Bom';
              }

              if (strcmp($estrela, 3) == 0) 
              {
                  $estrela_qualidade = 'Regular';
              }

              if (strcmp($estrela, 2) == 0) 
              {
                  $estrela_qualidade = 'Ruim';
              }

              if (strcmp($estrela, 1) == 0) 
              {
                  $estrela_qualidade = 'Muito Ruim';
              }

              
              if (strcmp($estrela, 1) == 0){$e1 = "checked";}
              if (strcmp($estrela, 2) == 0){$e2 = "checked";}
              if (strcmp($estrela, 3) == 0){$e3 = "checked";}
              if (strcmp($estrela, 4) == 0){$e4 = "checked";}
              if (strcmp($estrela, 5) == 0){$e5 = "checked";}


              echo "<div class='panel panel-default'>
                    <div class='panel-heading'>";
                    
              echo " <h3 class='panel-title'>".$estrela_qualidade."";
              echo "<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
              <div class='estrelas'>  
                                      <label for='cm_star-1'>&nbsp;&nbsp;<i class='fa'></i></label>

                                      <input type='radio' id='cm_star-1' name='fb1' value='1'disabled ".@$e1."/>

                                      <label for='cm_star-2'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-2' name='fb2' value='2' disabled ".@$e2."/>
                                      
                                      <label for='cm_star-3'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-3' name='fb3' value='3' disabled ".@$e3."/>
                                      
                                      <label for='cm_star-4'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-4' name='fb4' value='4' disabled ".@$e4."/>
                                      
                                      <label for='cm_star-5'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-5' name='fb5' value='5' disabled ".@$e5."/></h3>
                      </div>";

                    $e1 = 'disable';
                    $e2 = 'disable';
                    $e3 = 'disable';
                    $e4 = 'disable';
                    $e5 = 'disable';


              echo "<div class='panel-body'>".$descricao."
                    </div></div>";
                    

            }

            echo "</div>";

          }
        

            ?>
             
            
            
          
          
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