<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php require_once '../dependencias/config.php';?>
        <title>FILTRO DE BUSCA</title>
    </head>
    <body>
           <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Filtro de Projetos</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Pesquisa geral</label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="text" placeholder="Conteúdo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Autor/Orientador/Outro</label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="text" placeholder="Nome" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Título</label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="text" placeholder="Título do Trabalho" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Assunto</label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="text" placeholder="Assunto, conteúdo" class="form-control input-md">
    
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
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">2012</option>
      <option value="2">2013</option>
      <option value="3">2014</option>
      <option value="4">2015</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Pesquisar</button>
  </div>
</div>

</fieldset>
</form>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				 <a href="#" class="list-group-item active">Resultados 2015</a>
				<div class="list-group-item">
                                    <h4 class="list-group-item-heading">
					Projeto Logicando
                                    </h4>    
				</div>
				<div class="list-group-item">
					<h4 class="list-group-item-heading">
						Automação Residencial com Arduino
					</h4>
					</div>
				<div class="list-group-item">
					<span class="badge">12</span>
                                        <h4 class="list-group-item-heading">
                                        Ano anterior
                                        </h4>
				</div> <a class="list-group-item active"><span class="badge">3</span>Total de Resultados (2015)</a>
			</div>
		</div>
	</div>
</div>
    </body>
</html>
