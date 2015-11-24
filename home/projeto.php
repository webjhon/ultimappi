
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

  <body
	
    <form id='form1' class="form-horizontal" action="salvarCadastro.php" method="POST" enctype="multipart/form-data">
    <fieldset>

    <!-- Formulario de Cadastro de Projetos -->
    <legend>Projeto</legend>

    <!-- Text input Titulo do Projeto-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_titulo">Título do Projeto</label>
      <div class="col-md-6">
      <?=$row[titulo]?>
      </div>
    </div>

    <!-- Text input Autores-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_autores">Autor (es)</label>
      <div class="col-md-6">
      <?=$row[autores]?>
 
      </div>
    </div>

    <!-- Text input Orientadores-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_orientadores">Orientador (es)</label>
      <div class="col-md-6">
       <?=$row[orientadores]?>
      
      </div>
    </div>

    <!-- Text input Palavras Chave-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_keyword">Palavras-chave</label>
      <div class="col-md-5">
      <?=$row[palavrachave]?>
      
      </div>
    </div>

    <!-- Select Basic Anos-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="select_ano">Ano</label>
      <div class="col-md-2">
       <?=$row[ano]?>
      </div>
    </div>

    <!-- Text input Link externo-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_link">Link de arquivos</label>
      <div class="col-md-4">
      <?=$row[arquivos]?>
     
      </div>
    </div>

    <!-- Textarea Resumo-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textarea_resumo">Resumo</label>
      <div class="col-md-4">
        <?=$row[resumo]?>
      </div>
    </div>
	
	 <div class="form-group">
      <label class="col-md-4 control-label" for="input_link">Anexo</label>
      <div class="col-md-4">
     
     <a href='<?="../backend/Anexo/projeto_$_GET[id]/$row[anexo]";?>' download><?=$row[anexo]?></a>
      </div>
    </div>

    </fieldset>
    </form>

  </body>
</html>
