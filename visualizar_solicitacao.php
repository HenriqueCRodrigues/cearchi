<?php
  include "Conexao_mysql.php";
  include "Validador_de_Login.php";

  $nome = $_SESSION['nome_user'];
  $id_terceiro = $_GET['id_terceiro'];
  $servico = $_GET['servico_ts'];
  $id_ss = $_GET['id_ss'];
  $id = $_SESSION['id_user'];
  $statusg = $_GET['statusg'];  


 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cearchi - Solicitações</title>
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
                       <a href="index.html" title="Retornar a Pagina Principal">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">
                       <a href="perfil.php" title="Retornar para o Seu Perfil">Pefil</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">
                       <a href="menusolicitacao.php" title="Retornar para o Seu Perfil">Menu de solicitação de serviços</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                        <font color="white"> Visualizar solicitação de serviços </font>
                    </li>
                </ul>
                <ul class="previous">
                  <li><a href="menusolicitacao.php" title="Retornar para o Seu Perfil">Retornar</a></li>
                </ul>
                <div class="clearfix"></div>
         </div>
         </div></div></header>

	<!-- COLOCAR AQUI O  CONTEUDO DE CORPO-->

		<div class="container">
			<div class="row">
				<div class="Register-form">
					<x3>Visualizar serviços</x3>
					</br></br>

				</div>
				  <?php
         

          if (strcmp($statusg, 'F') == 0) 
          {
            $sql = mysql_query("SELECT * FROM usuario INNER JOIN servicos_fornecidos ON usuario.id_user=servicos_fornecidos.fk_id_user  INNER JOIN tipos_de_servico ON servicos_fornecidos.fk_id_ts=tipos_de_servico.id_ts INNER JOIN solicitacao_de_servico ON usuario.id_user=solicitacao_de_servico.fk_id_user_prestador WHERE id_ss = '$id_ss'");

            $array = mysql_fetch_array($sql);
            $nome_terceiro = $array['nome_user'];
            $hora = $array['hora_ss'];
            $data = $array['data_ss'];
            $id_avaliacao = $array['fk_id_avaliacao'];
            $status = $array['status_ss'];
            

            $sql1 = mysql_query("SELECT * FROM avaliacoes WHERE id_avaliacao like '$id_avaliacao'");
            $rz = mysql_num_rows($sql1);
            echo "$id_avaliacao avalicao";
           
            $array1 = mysql_fetch_array($sql1);
            
            $estrelas = $array1['estrelas_avaliacao']; 
            $descricao = $array1['descricao_avaliacao'];
            echo "$estrelas estrelinhas";     
            
          }
          
          else
          {
            $sql = mysql_query("SELECT * FROM usuario INNER JOIN servicos_fornecidos ON usuario.id_user=servicos_fornecidos.fk_id_user  INNER JOIN tipos_de_servico ON servicos_fornecidos.fk_id_ts=tipos_de_servico.id_ts INNER JOIN solicitacao_de_servico ON usuario.id_user=solicitacao_de_servico.fk_id_user_prestador WHERE id_user = '$id_terceiro' AND id_ss = '$id_ss'");

            $array = mysql_fetch_array($sql);
            $nome_terceiro = $array['nome_user'];
            $hora = $array['hora_ss'];
            $data = $array['data_ss'];
            $status = $array['status_ss'];

          }

            
              
            

					
           
          echo "<form method='post' action='alterar_solicitacao.php?id_terceiro=".$id_terceiro."&servico_ts=".$servico."&id_ss=".$id_ss."&statusg=".$statusg."'>";
           echo "<div class='row'>";


          ?>
						
						<div class="col-md-6">
						<li class="text-info" style="list-style-type:none">Prestador do Serviço: </li>
							<div class="form-group">
								<input class="form-control" value="<?php echo "$nome_terceiro"; ?>" placeholder="Nome do Prestador" type="text" name="nome_user" id="nome_user" readonly="readonly">
							</div>
						</div>
						
						<div class="col-md-6">
							<li class="text-info" style="list-style-type:none">Data<font color="white">.....................................</font>Hora do serviço </li>
							<div class="form-group">
								<input class="form-control3" type="text"  name="data_servico" id="data_servico" maxlength="10" onkeypress="this.value = FormataData(event)" onpaste="return false;" value="<?php echo "$data";?>" <?php if (strcmp($status, 'C') == 0 || strcmp($status, 'F') == 0) {echo "readonly='readonly'"; }?>/>
                <input class="form-control3" type="text"  name="hora_servico" id="hora_servico" maxlength="5" onkeypress="this.value = FormataHora(event)" onpaste="return false;" value="<?php echo "$hora";?>" <?php if (strcmp($status, 'C') == 0 || strcmp($status, 'F') == 0) {echo "readonly='readonly'"; }?>/>
							</div>
						</div>
            
<script>
  function genderSelectHandler(select)
  {
      if(select.value == 'F')
      {
        verifica.style.visibility='visible';

      }
      else if(select.value == 'C'){
        verifica.style.visibility='hidden';
        

      }

      else if(select.value == 'A'){
        verifica.style.visibility='hidden';

      }
  }
</script>
            


            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none"> Situação do Serviço: </li>
                <div class="form-group"> 
                  <select class="form-control3" name="status_servico" id="status_servico" onchange="genderSelectHandler(this)"
                   <?php if (strcmp($status, 'C') == 0 || strcmp($status, 'F') == 0) {echo "disabled"; }?>>
                   <option value="C" id="C"<?php if (strcmp($status, 'C') == 0) {echo "selected";  }?>>Cancelado</option>
                  <option value="A" id="A"<?php if (strcmp($status, 'A') == 0) {echo "selected";   }?>>Em Andamento</option>                  
                  <option value="F" id="F"<?php if (strcmp($status, 'F') == 0) {echo "selected";   }?>>Finalizado</option>
                  </select>
            </div>


            
              <li class="text-info" style="list-style-type:none"> Serviço Solicitado: </li>
                <div class="form-group"> 
                  <select class="form-control3" name="tipos_de_servico" id="tipos_de_servico" onchange="change(this)" disabled>
                  <option value="<?php echo "$servico";?>"><?php echo "$servico";?></option>

                  </select>

                </div>
            </div>

            


  

            </div>
  
            </div>





<?php  
echo "<div id='verifica'>";
if (strcmp($status, 'A') == 0) 
            {
              echo "<script> verifica.style.visibility='hidden' </script>";
            }

            if (strcmp($status, 'F') == 0) 
            {
              echo "<script> verifica.style.visibility='visible' </script>";
            }

            if (strcmp($status, 'C') == 0) 
            {
              echo "<script> verifica.style.visibility='hidden' </script>";
            }
?>
<div class='col-md-12'>
                      <li class='text-info' style='list-style-type:none'>Avalie o Serviço: </li>
                      <div class='form-group'>
                      <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
                            <div class='estrelas'>

                              <?php
                                
                                if (strcmp($status, 'F') != 0) 
                                {
                                  echo "
                                      <input type='radio' id='cm_star-empty' name='fb' value='' checked/>

                                      <label for='cm_star-1'>&nbsp;&nbsp;<i class='fa'></i></label>

                                      <input type='radio' id='cm_star-1' name='fb' value='1'/>

                                      <label for='cm_star-2'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-2' name='fb' value='2'/>
                                      
                                      <label for='cm_star-3'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-3' name='fb' value='3'/>
                                      
                                      <label for='cm_star-4'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-4' name='fb' value='4'/>
                                      
                                      <label for='cm_star-5'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-5' name='fb' value='5'/>";
                                }

                                else
                                {
                                  if (strcmp($estrelas, 1) == 0) 
                                  {
                                

                                  echo "
                                
                                      <label for='cm_star-1'>&nbsp;&nbsp;<i class='fa'></i></label>

                                      <input type='radio' id='cm_star-1' name='fb' value='1' checked/>

                                      <label for='cm_star-2'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-2' name='fb' value='2'/>
                                      
                                      <label for='cm_star-3'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-3' name='fb' value='3'/>
                                      
                                      <label for='cm_star-4'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-4' name='fb' value='4'/>
                                      
                                      <label for='cm_star-5'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-5' name='fb' value='5'/>";
                                  }

                                  if (strcmp($estrelas, 2) == 0) 
                                  {
                                    echo "
                                      
                                      <label for='cm_star-1'>&nbsp;&nbsp;<i class='fa'></i></label>

                                      <input type='radio' id='cm_star-1' name='fb' value='1']/>

                                      <label for='cm_star-2'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-2' name='fb' value='2' checked/>
                                      
                                      <label for='cm_star-3'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-3' name='fb' value='3'/>
                                      
                                      <label for='cm_star-4'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-4' name='fb' value='4'/>
                                      
                                      <label for='cm_star-5'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-5' name='fb' value='5'/>";
                                    

                                  }

                                  if (strcmp($estrelas, 3) == 0) 
                                  {
                                    echo "
                                      
                                      <label for='cm_star-1'>&nbsp;&nbsp;<i class='fa'></i></label>

                                      <input type='radio' id='cm_star-1' name='fb' value='1' checked/>

                                      <label for='cm_star-2'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-2' name='fb' value='2'/>
                                      
                                      <label for='cm_star-3'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-3' name='fb' value='3' checked/>
                                      
                                      <label for='cm_star-4'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-4' name='fb' value='4'/>
                                      
                                      <label for='cm_star-5'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-5' name='fb' value='5'/>";
                                  }

                                  if (strcmp($estrelas, 4) == 0) 
                                  {
                                    echo "
                                      
                                      <label for='cm_star-1'>&nbsp;&nbsp;<i class='fa'></i></label>

                                      <input type='radio' id='cm_star-1' name='fb' value='1' checked/>

                                      <label for='cm_star-2'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-2' name='fb' value='2'/>
                                      
                                      <label for='cm_star-3'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-3' name='fb' value='3'/>
                                      
                                      <label for='cm_star-4'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-4' name='fb' value='4' checked/>
                                      
                                      <label for='cm_star-5'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-5' name='fb' value='5'/>";
                                  }

                                  if (strcmp($estrelas, 5) == 0) 
                                  {
                                    echo "
                                      
                                      <label for='cm_star-1'>&nbsp;&nbsp;<i class='fa'></i></label>

                                      <input type='radio' id='cm_star-1' name='fb' value='1'/>

                                      <label for='cm_star-2'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-2' name='fb' value='2'/>
                                      
                                      <label for='cm_star-3'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-3' name='fb' value='3'/>
                                      
                                      <label for='cm_star-4'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-4' name='fb' value='4'/>
                                      
                                      <label for='cm_star-5'>&nbsp;&nbsp;<i class='fa'></i></label>
                                      
                                      <input type='radio' id='cm_star-5' name='fb' value='5' checked/>";
                                    
                                  }
 
                                      
                                }



                              ?>

                              

                            </div><br><br>

                      <li class='text-info' style='list-style-type:none'>Descrição do Serviço:</li>
                      <textarea name='text_area' class='form-control' id='text_area' cols='30' rows='5' placeholder='(Opcional)&#10;Diga como foi realizado o Serviço.&#10;Ex: Realizou uma otima pintura.'><?php if (strcmp($status, 'F') == 0) { echo "$descricao"; } ?></textarea>
                        </div><br><br>
                        </div>
  
</div>




          
	
						
						<div class="col-md-12">
							<div class="form-group">
                <input type="submit" name="enviar" value="Alterar Dados do Serviço" class="btn btn-primary" >
								<a href="menusolicitacao.php"><input value="Voltar para o menu" class="btn btn-primary" height="30"></a>
                </form>
								
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

<style type="text/css">
  .estrelas input[type=radio] {
  display: none;
}
.estrelas label i.fa:before {
  content:'\f005';
  color: #FC0;
}
.estrelas input[type=radio]:checked ~ label i.fa:before {
  color: #CCC;
}


</style>


	</body>
</html>

