<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro de Projetos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../dependencias/config.php'; ?>
    <!-- Bootstrap -->
  </head>
  <script src="../js/jquery-2.1.4.min.js"></script>
  
  <script>
    jQuery(document).ready(function($) {

        $('#arquivo1').bind('change', function() {

          // this.files[0].size gets the size of your file.
          //alert(this.files[0].size);
		  var fileName = $(this).val();
          var arrExt = fileName.split('.');
		  var position = (arrExt.length)-1;
		  var ext = arrExt[position];
		  if(ext != 'pdf' || ext.length == 0 ){
			$(this).val('');
			alert('Precisa ser um pdf');
		  }	     
		});
	  
      });
  </script>

  <body>
	<?php
	if ( isset($_GET['status']) ) {
       echo "<script>alert('Cadastrado com Sucesso.');</script>";
    }

	?>

    <form id='form1' class="form-horizontal" action="salvarCadastro.php" method="POST" enctype="multipart/form-data">
    <fieldset>

    <!-- Formulario de Cadastro de Projetos -->
    <legend>Cadastro de Projetos</legend>

    <!-- Text input Titulo do Projeto-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_titulo">Título do Projeto</label>
      <div class="col-md-6">
      <input id="titulo" name="titulo" type="text" placeholder="Digite aqui o título do projeto" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input Autores-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_autores">Autor (es)</label>
      <div class="col-md-6">
      <input id="autores" name="autores" type="text" placeholder="Ex.: TAL, Fulano de; TAL, Siclano de;" class="form-control input-md" required="">
      <span class="help-block">Separados por ( ; )</span>
      </div>
    </div>

    <!-- Text input Orientadores-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_orientadores">Orientador (es)</label>
      <div class="col-md-6">
      <input id="orientadores" name="orientadores" type="text" placeholder="Ex.: TAL, Fulano de; TAL, Siclano de;" class="form-control input-md" required="">
      <span class="help-block">Separados por ( ; )</span>
      </div>
    </div>

    <!-- Text input Palavras Chave-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_keyword">Palavras-chave</label>
      <div class="col-md-5">
      <input id="palavrachave" name="palavrachave" type="text" placeholder="exemplo; de; keyword;" class="form-control input-md" required="">
      <span class="help-block">Separados por ( ; )</span>
      </div>
    </div>

    <!-- Select Basic Anos-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="select_ano">Ano</label>
      <div class="col-md-2">
        <select id="ano" name="ano" class="form-control">
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
		  <option value="2016">2017</option>
        </select>
      </div>
    </div>

    <!-- Text input Link externo-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_link">Link de arquivos</label>
      <div class="col-md-4">
      <input id="arquivos" name="arquivos" type="text" placeholder="insira aqui o link de arquivos complementares" class="form-control input-md">
      <span class="help-block">*se tiver arquivos complementares</span>
      </div>
    </div>

    <!-- Textarea Resumo-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textarea_resumo">Resumo</label>
      <div class="col-md-4">
        <textarea class="form-control" id="resumo" name="resumo" placeholder="Resumo até 300 palavras"></textarea>
      </div>
    </div>

    <!-- File Button inserir arquivos-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button_arquivos" >Anexar Relatório</label>
      <div class="col-md-4">
        <input type='file' id='arquivo1' name='arquivo1' required="">
      </div>
    </div>
	
    <!-- Button Cadastro-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button_cadastrar"></label>
      <div class="col-md-4">
        <button id="button_cadastrar" name="button_cadastrar" class="btn btn-inverse">Enviar projeto</button>
      </div>
    </div>

    </fieldset>
    </form>

  </body>
</html>
