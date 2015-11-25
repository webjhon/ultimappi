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
			
		<form id='form1' class="form-horizontal well" action="salvarCadastro.php" method="POST" enctype="multipart/form-data">
		<fieldset>
			<!-- Resultado de Cadastro de Projetos -->
			<legend>Dados do projeto</legend>

			
				<!-- ######   Tabela de resultados   ###### -->
				<div class="col-md-1 row-clearfix"></div>
				<div class="col-md-10 row-clearfix">
					<table class="table">
						<thead>
							<tr>
								<th>Título do Projeto</th>
								<td><em class="glyphicon glyphicon-superscript blue"></em> <?=$row[titulo]?></td>
							</tr>
							<tr>
								<th>Autores</th>
								<td><em class="glyphicon glyphicon-edit blue"></em> <?=$row[autores]?></td>
							</tr>
							<tr>
								<th>Orientadores</th>
								<td><em class="glyphicon glyphicon-comment blue"></em> <?=$row[orientadores]?></td>
							</tr>
							<tr>
								<th>Palavras-chave</th>
								<td><em class="glyphicon glyphicon-flag blue"></em> <?=$row[palavrachave]?></td>
							</tr>
							<tr>
								<th>Ano</th>
								<td><em class="glyphicon glyphicon-calendar blue"></em> <?=$row[ano]?></td>
							</tr>
							<tr>
								<th>Link de arquivos</th>
								<td><em class="glyphicon glyphicon-file blue"></em> <?=$row[arquivos]?></td>
							</tr>
							<tr>
								<th>Resumo</th>
								<td><em class="glyphicon glyphicon-pencil blue"></em> <?=$row[resumo]?></td>
							</tr>
							<tr>
								<th>Anexos</th>
								<td><em class="glyphicon glyphicon-paperclip blue"></em> <a href='<?="../backend/Anexo/projeto_$_GET[id]/$row[anexo]";?>' download><?=$row[anexo]?></a></td>
							</tr>
						</thead>
					</table>
				</div>
				<div class="col-md-1 row-clearfix"></div>
	
		</fieldset>
		</form>
	
	</body>
</html>
