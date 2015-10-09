<nav class="navbar navbar-default sidebar" role="navigation" id="menu_lateral">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./admin_page.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Funcionários <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="./cadastro.php"> Cadastrar</a></li>
            <li><a href="./listar_funcionarios.php"> Editar</a></li>
            <li><a href="#"> Chat</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comandas <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-qrcode"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <li><a href="./criar_comandas.php"> Pedidos</a></li>
            <li><a href="./gerar_nota.php"> Gerar Nota</a></li>
            <li><a href="./relatorio.php"> Relatório</a></li>
          </ul>
        </li>
        <li ><a href="#">Gráficos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-picture"></span></a></li>
        
      </ul>
    </div>
  </div>
</nav>
