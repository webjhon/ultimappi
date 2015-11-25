<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php require_once '../dependencias/config.php'; ?> <!-- Dependencias para correto funcionamento -->
  <title>RD3PI - Repositório de Projetos de Prática Profissional Integrada</title>
</head>
<body>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	
	
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-inverse " role="navigation">
			
					<div class="navbar-header">
						<a class="navbar-brand bg-primary" href="index.php" id="titulo">RD3PI</a>
					</div>
	
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>
								<a href="projeto.php">O projeto</a>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias<strong class="caret"></strong></a>
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
								</ul>
							</li>
						</ul>
						<!--#############################################################################
						<form class="navbar-form navbar-right" role="search">
							<div class="form-group">
									<button type="submit" class="btn btn-default btn-primary">
										Pesquisar
									</button>
								<input class="form-control" type="text">
							</div>
						</form>
						##############################################################################-->
					</div>
				</nav>
		</div>
    </div>
	
	
    <div class="row">
		<div class="col-md-12">
		
			<img id="Image-Maps-Com-mapa-categorias" src="../img/roda_link.png" border="0" width="628" height="628" orgWidth="628" orgHeight="628" usemap="#mapa-categorias" alt="Roda de navegação" class="img-responsive center-block"/>
				<map name="mapa-categorias" id="mapa-categorias">
					<area id="filtros" alt="Página de filtros de pesquisa" title="Projetos PPI" href="filtro.php" shape="poly" coords="116,312,3,310,4,260,21,198,57,136,96,80,135,55,164,37,199,21,250,6,311,0,310,114,262,120,211,142,172,175,135,228,120,276" style="outline:none;" target="_self"  onmouseover="if(document.images) document.getElementById('Image-Maps-Com-image-maps-2015-11-24-162903').src= '';"   />
					<area id="eventos" alt="Página de eventos" title="Eventos" href="eventos.php" shape="poly" coords="316,114,318,0,361,2,396,11,452,32,511,69,557,116,596,176,616,225,625,270,627,311,511,309,503,259,472,197,439,160,398,135,353,118" style="outline:none;" target="_self"     />
					<area id="mostras" alt="Página de mostras de projetos" title="Página de mostras de projetos" href="mostras.php" shape="poly" coords="627,316,620,380,602,437,575,491,536,535,491,572,444,600,379,622,316,628,316,509,371,500,422,476,470,428,496,384,508,316" style="outline:none;" target="_self"     />
					<area id="dissertacoes" alt="Página de dissertações" title="Página de dissertações" href="dissertacoes.php" shape="poly" coords="0,316,116,316,124,366,144,412,173,452,212,482,256,501,313,509,312,628,260,623,204,608,136,573,92,536,46,476,20,426,4,370" style="outline:none;" target="_self"     />
				</map>
		
		<!-- Imagem Original ################
		<img alt="Links de Navegação" src="../img/roda_link.png" id="roda_link" class="img-responsive center-block tamanho">
		-->
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
