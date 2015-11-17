<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php require_once '../dependencias/config.php'; ?>
  <title>ACESSO RESTRITO</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="img-responsive login-title text-center">
          <img src="../img/logoiff.png" alt="Logo do Site" id="logo" class="img-thumbnail">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" method="POST" action="../banco/importabanco.php">
          <h2 class="text-center login-title"> Acesso Restrito</h2>
          <label for="login" class="sr-only"></label>
          <input type="text" name="backend_login" class="form-control" autofocus="" required="" placeholder="Digite o Login"><br>
          <label for="senha" class="sr-only"></label>
          <input type="password" name="backend_senha" class="form-control" autofocus="" required="" placeholder="Digite a senha"><br>
          <button id="login_envia" name="login_envia" class="btn btn-lg btn-primary btn-block">ENTRAR</button>
        </form>
          
      </div>
    </div>
  </div>
</body>
</html>
