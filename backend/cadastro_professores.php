<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php require_once '../dependencias/config.php'; ?>
  <title></title>
</head>
<body>
  <form class="form-horizontal">
    <fieldset>

      <!-- Form Name -->
      <legend>Cadastro de Professores</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nome</label>
        <div class="col-md-6">
          <input id="textinput" name="textinput" type="text" placeholder="Nome" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Formação</label>
        <div class="col-md-6">
          <input id="textinput" name="textinput" type="text" placeholder="Título de Graduação" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Lattes</label>
        <div class="col-md-6">
          <input id="textinput" name="textinput" type="text" placeholder="Link do Currículo" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Eixo</label>
        <div class="col-md-6">
          <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">

        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Login</label>
        <div class="col-md-6">
          <input id="textinput" name="textinput" type="text" placeholder="Nome para Login" class="form-control input-md">

        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="passwordinput">Senha</label>
        <div class="col-md-6">
          <input id="passwordinput" name="passwordinput" type="password" placeholder="Até 6 digitos" class="form-control input-md">

        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
          <button id="singlebutton" name="singlebutton" class="btn btn-success">CADASTRAR</button>
        </div>
      </div>

    </fieldset>
  </form>

</body>
</html>
