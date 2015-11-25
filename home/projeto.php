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
			<!-- Formulario de Cadastro de Projetos -->
			<legend>Resultado da busca</legend>
	
		<!-- Text input Titulo do Projeto-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="input_titulo">Título do Projeto <br><i class="glyphicon glyphicon-superscript"></i></label>
				<div class="col-md-6 bg-primary">
					<?=$row[titulo]?>
				</div>
		</div>
	
		<!-- Text input Autores-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="input_autores">Autor (es) <br><i class="glyphicon glyphicon-edit"></i></label>
				<div class="col-md-6 bg-info">
				<?=$row[autores]?>
	
				</div>
		</div>
	
		<!-- Text input Orientadores-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="input_orientadores">Orientador (es) <br><i class="glyphicon glyphicon-comment"></i></label>
				<div class="col-md-6 bg-primary">
					<?=$row[orientadores]?>
		
				</div>
		</div>
	
		<!-- Text input Palavras Chave-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="input_keyword">Palavras-chave <br><i class="glyphicon glyphicon-flag"></i></label>
				<div class="col-md-6 bg-info">
					<?=$row[palavrachave]?>
			
				</div>
		</div>
	
		<!-- Select Basic Anos-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="select_ano">Ano <br><i class="glyphicon glyphicon-calendar"></i></label>
				<div class="col-md-6 bg-primary">
					<?=$row[ano]?>
				</div>
		</div>
	
		<!-- Text input Link externo-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="input_link">Link de arquivos <br><i class="glyphicon glyphicon-file"></i></label>
				<div class="col-md-6 bg-info">
					<?=$row[arquivos]?>
				
				</div>
		</div>
	
		<!-- Textarea Resumo-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="textarea_resumo">Resumo <br><i class="glyphicon glyphicon-pencil"></i></label>
				<div class="col-md-6 bg-primary">
					<?=$row[resumo]?>
				</div>
		</div>
		
		
		<!-- Anexo -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="input_link">Anexos <br><i class="glyphicon glyphicon-paperclip"></i></label>
		
				<div class="col-md-6 bg-info">
					<a href='<?="../backend/Anexo/projeto_$_GET[id]/$row[anexo]";?>' download><?=$row[anexo]?></a>
				</div>
		</div>
	
		</fieldset>
		</form>
	
	</body>
</html>
