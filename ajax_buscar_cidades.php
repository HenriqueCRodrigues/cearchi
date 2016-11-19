<?php
include "Conexao_mysql.php";
$estado = $_GET['estado'];
$sql = "SELECT * FROM cidades WHERE estados_cod_estados = $estado ORDER BY nome";
$res = mysql_query($sql, $conexao);
$num = mysql_num_rows($res);
for ($i = 0; $i < $num; $i++) {
  $dados = mysql_fetch_array($res);
  $arrCidades[$dados['cod_cidades']] = utf8_encode($dados['nome']);
}
?>

<label>Cidades:</label>
<select class="form-control3" name="cidade" id="cidade">
  <?php foreach($arrCidades as $value => $nome){
    echo "<option value='{$value}'>{$nome}</option>";
  }
?>
</select>