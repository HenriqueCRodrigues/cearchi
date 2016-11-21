<?php
include "Conexao_mysql.php";
include "Validador_de_Login.php";


$id = $_SESSION['id_user'];
$sql = mysql_query("SELECT * FROM usuario WHERE id_user='$id'");
$consulta = mysql_fetch_array($sql);

$nome = $consulta['nome_user'];
$telefone = $consulta['telefone_user'];
$email = $consulta['emai_user'];
$sexo = $consulta['sexo_user'];
$rg = $consulta['rg_user'];
$rua = $consulta['rua_user'];
$numero = $consulta['numero_user'];
$bairro = $consulta['bairro_user'];
$cidade = $consulta['cidade_user'];
$estado = $consulta['estado_user'];
$cep = $consulta['cep_user'];

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
            
            <li><a href="about.html">Sobre</a></li>
            <li><a href="contact.html">Contato</a></li>
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
             <a href="index.php" title="Pagina Inicial">Home</a>&nbsp;
             <span>&gt;</span>
           </li>
           <li class="home">
            <a href="perfil.php" title="Retornar ao Perfil">Perfil</a>&nbsp;
            <span>&gt;</span>
          </li>
          <li class="women">
            <font color="white">Alterar Informações</font>
          </li>
        </ul>
        <ul class="previous">
          <li><a href="perfil.php">Retornar</a></li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div></div></header>

    <div class="container">
      <div class="row">
        <div class="Register-form">
          <x3>Alteração de dados</x3>
          

        </div>

        <div class="registration-form">

          <div class="row">

          <form method="post" action="Confirmar_Alteracao.php">
            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">Nome Completo </li>
              <div class="form-group">
                <input class="form-control" placeholder="Nome" type="text" name="nome_user" id="nome_user" value="<?php echo "$nome";?>">
              </div>
            </div>

            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none"> Sexo </li>
              <div class="form-group"> 
                <select class="form-control3" name="sexo_user" id="sexo_user">
                  <option value="Feminino" <?php if (strcmp($sexo, 'Feminino') == 0) {echo "selected"; }?>>Feminino</option>
                  <option value="Masculino" <?php if (strcmp($sexo, 'Masculino') == 0) {echo "selected"; }?> >Masculino</option>
                </select>
              </div>
            </div>
            </div>

             <div class="row">
            
            
            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">E-mail </li>
              <div class="form-group">
                <input class="form-control" placeholder="Email" type="text" name="emai_user" id="emai_user" value="<?php echo "$email"; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">Telefone </li>
              <div class="form-group">
                <input class="form-control" placeholder="Telefone" type="text" name="telefone_user" id="telefone_user"  maxlength="14" onkeypress="this.value = FormataTel(event)" onpaste="return false;" value="<?php echo "$telefone"; ?>" />
              </div>
            </div> 

            
            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">RG </li>
              <div class="form-group">
                <input class="form-control" placeholder="RG" type="text" name="rg_user" id="rg_user" maxlength="12" onkeypress="this.value = FormataRG(event)" onpaste="return false;" value="<?php echo "$rg"; ?>"/>
              </div>
            </div>     




            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">Cidade </li>
              <div class="form-group">
                <input class="form-control" placeholder="Cidade" type="text" name="cidade_user" id="cidade_user" value="<?php echo "$cidade"; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">Bairo: </li>
              <div class="form-group">
                <input class="form-control" placeholder="Rua" type="text" name="bairro_user" id="bairro_user" value="<?php echo "$bairro"; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">Rua: </li>
              <div class="form-group">
                <input class="form-control" placeholder="Rua" type="text" name="rua_user" id="rua_user" value="<?php echo "$rua"; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">Número: </li>
              <div class="form-group">
                <input class="form-control" placeholder="Número" type="text" name="numero_user" id="numero_user" value="<?php echo "$numero"; ?>">
              </div>
            </div>

            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">CEP: </li>
              <div class="form-group">
                <input class="form-control" placeholder="CEP" type="text" name="cep_user" id="cep_user" maxlength="10" onkeypress="this.value = FormataCEP(event)" onpaste="return false;" value="<?php echo "$cep"; ?>"/>
              </div>
            </div>

            <?php 
                  if($estado=="AC"){$vestado = "Acre";}
                  if($estado=="AL"){$vestado = "Alagoas";}
                  if($estado=="AP"){$vestado = "Amapá";}
                  if($estado=="AM"){$vestado = "Amazonas";}
                  if($estado=="BA"){$vestado = "Bahia";}
                  if($estado=="CE"){$vestado = "Ceará";}
                  if($estado=="DF"){$vestado = "Distrito Federal";}
                  if($estado=="ES"){$vestado = "Espirito Santo";}
                  if($estado=="GO"){$vestado = "Goiás";}
                  if($estado=="MA"){$vestado = "Maranhão";}
                  if($estado=="MS"){$vestado = "Mato Grosso do Sul";}
                  if($estado=="MT"){$vestado = "Mato Grosso";}
                  if($estado=="MG"){$vestado = "Minas Gerais";}
                  if($estado=="PA"){$vestado = "Pará";}
                  if($estado=="PB"){$vestado = "Paraíba";}
                  if($estado=="PR"){$vestado = "Paraná";}
                  if($estado=="PE"){$vestado = "Pernambuco";}
                  if($estado=="PI"){$vestado = "Piauí";}
                  if($estado=="RJ"){$vestado = "Rio de Janeiro";}
                  if($estado=="RN"){$vestado = "Rio Grande do Norte";}
                  if($estado=="RS"){$vestado = "Rio Grande do Sul";}
                  if($estado=="RO"){$vestado = "Rondônia";}
                  if($estado=="RR"){$vestado = "Roraima";}
                  if($estado=="SC"){$vestado = "Santa Catarina";}
                  if($estado=="SP"){$vestado = "São Paulo";}
                  if($estado=="SE"){$vestado = "Sergipe";}
                  if($estado=="TO"){$vestado = "Tocantins";}


                  ?>

            <div class="col-md-6">
              <li class="text-info" style="list-style-type:none">Estado:</li>
              <div class="form-group"><select class="form-control3" name="estado_user">
                <option value="<?php echo "$estado"; ?>"><?php echo "$vestado"; ?></option>
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
              </select> <br/></li>



            </div>
            </div>
            </div>


            
            
            <div class="clearfix">
            
          </div>
          </div>



          <div class="col-md-12">
            <div class="form-group">
              <input value="Alterar dados" class="btn btn-primary" type="submit">
              <input value="Voltar" class="btn btn-primary" type="button" onclick="Voltar()">
            </div>
          </div></div></div></div>
          <script type="text/javascript">
            function Voltar()
            {
              location.href="perfil.php";

            }
          </script>

          </form>


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
      $("#telefone_user").keypress(verificaNumero);
      $("#cep_user").keypress(verificaNumero);
      $("#rg_user").keypress(verificaNumero);
      $("#nascimento_user").keypress(verificaNumero);

    });


      function FormataCpf(evt)
      {

      vr = (navigator.appName == 'NetScape') ?evt.target.value : evt.srcElement.value;

      if(vr.length == 3) vr = vr+".";
      if(vr.length == 7) vr = vr+".";
      if(vr.length == 11) vr = vr+".";
      return vr;
      }

      function FormataTel(evt)
      {

      vr = (navigator.appName == 'NetScape') ?evt.target.value : evt.srcElement.value;

      if(vr.length == 0) vr = vr+"(";
      if(vr.length == 3) vr = vr+")";
      if(vr.length == 9) vr = vr+"-";
      if(vr.length == 14) vr = vr;
      return vr;
      }

      function FormataRG(evt)
      {

      vr = (navigator.appName == 'NetScape') ?evt.target.value : evt.srcElement.value;

      if(vr.length == 2) vr = vr+".";
      if(vr.length == 6) vr = vr+".";
      if(vr.length == 10) vr = vr+"-";
      if(vr.length == 11) vr = vr;
      return vr;
      }

      function FormataNascimento(evt)
      {

      vr = (navigator.appName == 'NetScape') ?evt.target.value : evt.srcElement.value;

      if(vr.length == 2) vr = vr+"/";
      if(vr.length == 5) vr = vr+"/";
      if(vr.length == 9) vr = vr;
      return vr;
      }

      function FormataCEP(evt)
      {

      vr = (navigator.appName == 'NetScape') ?evt.target.value : evt.srcElement.value;

      if(vr.length == 2) vr = vr+".";
      if(vr.length == 6) vr = vr+"-";
      if(vr.length == 10) vr = vr;
      return vr;
      }


</script>

</body>
</html>

