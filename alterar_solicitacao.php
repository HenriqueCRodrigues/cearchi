<?php
	
	include "Conexao_mysql.php";
	include "Validador_de_Login.php";

	$id = $_SESSION['id_user'];
	$id_terceiro = $_GET['id_terceiro'];
	$hora = $_POST['hora_servico'];
	$data = $_POST['data_servico'];
	@$estrela = $_POST['fb'];
	$descricao = $_POST['text_area'];
	@$status = $_POST['status_servico'];
	$statusg = $_GET['statusg'];
	$servico = $_GET['servico_ts'];
	$id_ss = $_GET['id_ss'];
	
	

	if (!isset($status)) 
	{
		$status = $statusg;
	}

	

	if ($status != 'F') 
	{


				if (strcmp($hora, '') == 0 || strcmp($data, '')==0) 
				{
					echo "<script>alert('Todos os campos tem que ser preenchidos')</script>";
					echo "<script>location.href='Visualizar_solicitacao.php?id_terceiro=".$id_terceiro."&servico_ts=".$servico."&statusg_servico=".$status."&id_ss=".$id_ss."'</script>";
				}

				else
				{
					echo "entrei aqui";
					$sql = mysql_query("UPDATE solicitacao_de_servico SET data_ss='$data', hora_ss='$hora', status_ss='$status' WHERE id_ss='$id_ss' ");
					echo "<script>alert('Solicitação Alterada com Sucesso')</script>";
					echo "<script>location.href='Visualizar_solicitacao.php?id_terceiro=".$id_terceiro."&servico_ts=".$servico."&statusg_servico=".$status."&id_ss=".$id_ss."'</script>";
				}

	}


	else

	{
				if (strcmp($hora, '') == 0 || strcmp($data, '') == 0 || strcmp($estrela, '') == 0) 
				{	
					echo "<script>alert('Todos os campos tem que ser preenchidos')</script>";
					echo "<script> location.href='visualizar_solicitacao.php?id_terceiro=".$id_terceiro."&servico_ts=".$servico."&id_ss=".$id_ss."&statusg=".$status."'</script>";
				}

				else
				{

						$sql1 = mysql_query("SELECT * FROM avaliacoes INNER JOIN solicitacao_de_servico ON avaliacoes.id_avaliacao=solicitacao_de_servico.fk_id_avaliacao WHERE id_ss like '$id_ss'");
						$array = mysql_fetch_array($sql1);
						$id_avaliacao = $array['id_avaliacao'];
						
						if(strcmp($id_avaliacao, '') == 0) 
						{
							$sql0 = mysql_query("SELECT * FROM avaliacoes ORDER BY id_avaliacao DESC");
							$array0 = mysql_fetch_array($sql0);
							$avaliacao = $array0['id_avaliacao'];
							$avaliacao++;
							$sql = mysql_query("UPDATE solicitacao_de_servico SET data_ss='$data', hora_ss='$hora', status_ss='$status', fk_id_avaliacao='$avaliacao' WHERE id_ss='$id_ss' ");
							$sql2 = mysql_query("INSERT INTO avaliacoes (descricao_avaliacao, estrelas_avaliacao, id_remetente, id_destinatario) values ('$descricao','$estrela','$id', '$id_terceiro')");
							echo "<script>alert('Solicitação Alterada com Sucesso')</script>";
							echo "<script> location.href='visualizar_solicitacao.php?id_terceiro=".$id_terceiro."&servico_ts=".$servico."&id_ss=".$id_ss."&statusg=".$status."'</script>";
							


							
						}

						else
						{
							
							$sql = mysql_query("UPDATE avaliacoes SET descricao_avaliacao='$descricao', estrelas_avaliacao='$estrela', id_remetente='$id', id_destinatario='$id_terceiro' WHERE id_avaliacao='$id_avaliacao'");
										

										echo "<script>alert('Solicitação Alterada com Sucesso')</script>";
									  	echo "<script> location.href='visualizar_solicitacao.php?id_terceiro=".$id_terceiro."&servico_ts=".$servico."&id_ss=".$id_ss."&statusg=".$statusg."'</script>";
									  	
						}
				
		
				}

	}


?>