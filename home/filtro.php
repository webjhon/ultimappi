<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php require_once '../dependencias/config.php';?>
  <?php require_once '../banco/conecta.php'; ?>
   <?php require_once '../banco/filtrar.php'; ?>
  
  <title>FILTRO DE BUSCA</title>
</head>
<body>
    <div class="col-md-offset-2 col-md-8">
  <form class="form-horizontal" method="POST">
    <fieldset>

      <!-- Form Name -->
      <legend>Filtro de Projetos</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Pesquisa geral</label>
        <div class="col-md-6">
          <input id="textinput" name="pequisa_geral" type="text" placeholder="Conteúdo" class="form-control input-md" >

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Autor/Orientador/Outro</label>
        <div class="col-md-6">
          <input id="textinput" name="autor" type="text" placeholder="Nome" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Título</label>
        <div class="col-md-6">
          <input id="textinput" name="titulo" type="text" placeholder="Título do Trabalho" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Palavras Chave</label>
        <div class="col-md-6">
          <input id="textinput" name="assunto" type="text" placeholder="Assunto, conteúdo" class="form-control input-md">

        </div>
      </div>

      <!-- Select Multiple -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="selectmultiple">Tipo</label>
        <div class="col-md-6">
          <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
            <option value="1">Todos</option>
            <option value="2">Anais de Evento</option>
            <option value="3">Trabalho publicado em evento</option>
            <option value="4">Prática Profissional Integrada</option>
          </select>
        </div>
      </div>

      <!-- Select Basic -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Ano</label>
        <div class="col-md-6">
          <select id="selectbasic" name="ano" class="form-control">
            <option value="">Selecionar Ano</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
          </select>
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
            <button id="singlebutton" name="botao_pesquisar" class="btn btn-primary">Pesquisar</button>
        </div>
      </div>
      </div>
        <div class="col-md-offset-2 col-md-8">
        <?php
        if (isset($_POST['botao_pesquisar'])) {
            resultados($geral);
        }
       ?>
        </div>
      </div>
    </fieldset>
  </form>
</body>
</html>
