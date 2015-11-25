<!DOCTYPE html>
<html>
	<head>
		<title>Projeto</title>
		<meta charset="UTF-8">
		<?php require_once '../dependencias/config.php'; ?> <!-- Dependencias para correto funcionamento -->  
	</head>
  
		<?php
			require_once "../banco/conecta.php";
			conecta_banco();
			$sql = "select * from projeto where id = $_GET[id]";
			if( !$ref = mysql_query($sql) ):
				die('erro').mysql_error();
			endif;
			$row = mysql_fetch_assoc($ref);
		?>

	<body>
		<div class="container">
			<div class="col-md-offset-2">
				<div class="col-md-10">
					<form id='form1' class="form-horizontal" action="salvarCadastro.php" method="POST" enctype="multipart/form-data">
					
						<!-- Resultado de Cadastro de Projetos -->
						<legend>Dados do projeto</legend>
			
							<!-- ######   Tabela de resultados   ###### -->
							
								<table class="table">
									<thead>
										<tr>
											<th>Título do Projeto</th>
											<td><em class="glyphicon glyphicon-superscript"></em> <?=$row[titulo]?></td>
										</tr>
										<tr>
											<th>Autores</th>
											<td><em class="glyphicon glyphicon-edit"></em> <?=$row[autores]?></td>
										</tr>
										<tr>
											<th>Orientadores</th>
											<td><em class="glyphicon glyphicon-comment"></em> <?=$row[orientadores]?></td>
										</tr>
										<tr>
											<th>Palavras-chave</th>
											<td><em class="glyphicon glyphicon-flag"></em> <?=$row[palavrachave]?></td>
										</tr>
										<tr>
											<th>Ano</th>
											<td><em class="glyphicon glyphicon-calendar"></em> <?=$row[ano]?></td>
										</tr>
										<tr>
											<th>Link de arquivos</th>
											<td><em class="glyphicon glyphicon-file"></em> <?=$row[arquivos]?></td>
										</tr>
										<tr>
											<th>Resumo</th>
                                                                                        <td><em class="glyphicon glyphicon-pencil"></em><textarea class="form-control" readonly="true" id="textarea" name="textarea"><?=$row[resumo]?></textarea></td>
										</tr>
										<tr>
											<th>Anexos</th>
											<td><em class="glyphicon glyphicon-paperclip"></em> <a href='<?="../backend/Anexo/projeto_$_GET[id]/$row[anexo]";?>' download><?=$row[anexo]?></a></td>
										</tr>
									</thead>
								</table>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
