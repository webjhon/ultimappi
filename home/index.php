<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php require_once '../dependencias/config.php'; ?> <!-- Dependencias para correto funcionamento -->
  <title></title>
</head>
<body>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	
	
		<div class="row">
			<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> <a class="navbar-brand" href="#">Brand</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">Link</a>
					</li>
					<li>
						<a href="#">Link</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">One more separated link</a>
							</li>
						</ul>
					</li>
				</ul>
				
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control">
							<button type="submit" class="btn btn-default btn-primary right-block">
								Pesquisar
							</button>
					</div>
				</form>

			</div>
		</nav>
		
		
		
      </div>
    </div>
	
	
    <div class="row">
		
		<div class="col-md-12">
			<img alt="Links de Navegação" src="../img/roda_links.png" id="roda_link" class="img-responsive center-block tamanho">
		</div>
		
    </div>
    
    <div class="row" id="nomobile">
		<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
			<div class="navbar-text pull-left" id="rodape">
				<ul class="list-inline text-center">
					<a href="#"><li class="col-md-3">INSTRUÇÃO AOS AUTORES</li></a>
					<a href="#"><li class="col-md-3">LOGIN</li></a>
					<a href="#"><li class="col-md-3">CONTATO</li></a>
					<a href="#"><li class="col-md-3">AJUDA</li></a>
				</ul>
			</div>          
		</div>
    </div>
  </div>
</body>
</html>
