<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro de Projetos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../dependencias/config.php'; ?>
    <!-- Bootstrap -->

  </head>


  <body>


    <form class="form-horizontal">
    <fieldset>

    <!-- Formulario de Cadastro de Projetos -->
    <legend>Cadastro de Projetos</legend>

    <!-- Text input Titulo do Projeto-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_titulo">Título do Projeto</label>
      <div class="col-md-6">
      <input id="input_titulo" name="input_titulo" type="text" placeholder="Digite aqui o título do projeto" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Text input Autores-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_autores">Autor (es)</label>
      <div class="col-md-6">
      <input id="input_autores" name="input_autores" type="text" placeholder="Ex.: TAL, Fulano de; TAL, Siclano de;" class="form-control input-md" required="">
      <span class="help-block">Separados por ( ; )</span>
      </div>
    </div>

    <!-- Text input Orientadores-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_orientadores">Orientador (es)</label>
      <div class="col-md-6">
      <input id="input_orientadores" name="input_orientadores" type="text" placeholder="Ex.: TAL, Fulano de; TAL, Siclano de;" class="form-control input-md" required="">
      <span class="help-block">Separados por ( ; )</span>
      </div>
    </div>

    <!-- Text input Palavras Chave-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_keyword">Palavras-chave</label>
      <div class="col-md-5">
      <input id="input_keyword" name="input_keyword" type="text" placeholder="exemplo; de; keyword;" class="form-control input-md" required="">
      <span class="help-block">Separados por ( ; )</span>
      </div>
    </div>

    <!-- Select Basic Anos-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="select_ano">Ano</label>
      <div class="col-md-2">
        <select id="select_ano" name="select_ano" class="form-control">
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
        </select>
      </div>
    </div>

    <!-- Text input Link externo-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="input_link">Link de arquivos</label>
      <div class="col-md-4">
      <input id="input_link" name="input_link" type="text" placeholder="insira aqui o link de arquivos complementares" class="form-control input-md">
      <span class="help-block">*se tiver arquivos complementares</span>
      </div>
    </div>

    <!-- Textarea Resumo-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textarea_resumo">Resumo</label>
      <div class="col-md-4">
        <textarea class="form-control" id="textarea_resumo" name="textarea_resumo">Resumo até 300 palavras.</textarea>
      </div>
    </div>

    <!-- File Button inserir arquivos-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button_arquivos">Anexar relatório</label>
      <div class="col-md-4">
        <input id="button_arquivos" name="button_arquivos" class="input-file" type="file">
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
