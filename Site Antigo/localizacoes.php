<?php
include "Conexao_mysql.php";
      $test = mysql_query("SELECT * FROM dados_cidades WHERE uf like 'AC'");


?>
<!DOCTYPE html>
<html>
<head>
  
  <script type="text/javascript">
function myFunction() {

    var x = document.getElementById('mySelect').value;
    if (x == <?php echo $var ?>) 
    {
      <?php echo 'oi' ?>
    }
    var y = document.getElementById('mySelect1');
    var option = document.createElement('option');
    option.text = document.getElementById('mySelect').value;
    y.add(option);


}
]
</script>
</head>

<body>

<p>Selecione um estado.</p>

<select id="mySelect" onchange="myFunction()">
  <option value="AL">Alagoas
  <option value="AP">Amapa
  <option value="AM">Amazonas
  <option value="BA">Bahia
  <option value="CE">Ceara
  <option value="DF">Distrito federal
  <option value="ES">Espirito Santo
  <option value="GO">Goiais
  <option value="MA">Maranhao
  <option value="MT">Mato Grosso
  <option value="MS">Mato Grosso do Sul
  <option value="MG">Minas Gerais
  <option value="PA">Para
  <option value="PB">Paraiba
  <option value="PR">Parana
  <option value="PE">Pernambuco
  <option value="PI">Piaui
  <option value="RJ">Rio de Janeiro
  <option value="RN">Rio Grande do Norte
  <option value="RS">Rio Grande do Sul
  <option value="RO">Rondonia
  <option value="RR">Roraima
  <option value="SC">Santa Catarina
  <option value="SP">São Paulo
  <option value="SE">Sergipe
  <option value="TO">Tocantins
</select>

<select id="mySelect1" >
</select>


<p id="demo"></p>


<?php 

    
    
      $consulta = mysql_query("SELECT * FROM dados_cidades WHERE uf like 'SP' ORDER BY nome") or die(mysql_error());
      $row =  mysql_num_rows($consulta);
      if($row > 0){
        while($linha = mysql_fetch_array($consulta)){
          $cidade = $linha['nome'];
          echo "<option value='$cidade'>$cidade";


        }
      }

     ?>



</body>
</html>

 