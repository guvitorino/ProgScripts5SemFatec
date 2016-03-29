<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Anunciar</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
    .erro{
    	border: #C42924 solid 1px;
    }


    </style>

  </head>
  <body>

    <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="navbar-header">
						 
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
						</button> <a class="navbar-brand" href="home.html" id="font-menu">TheBestOferta</a>
					</div>
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background:#34495e;">
						<ul class="nav navbar-nav">
							<li>
								<a href="#" id="font-menu">Anuncios</a>
							</li>
							<li>
								<a href="#" id="font-menu">Anunciar</a>
							</li>
							<li>
								<a href="#" id="font-menu">Empresas</a>
							</li>
							<li>
								<a href="#" id="font-menu">Contato</a>
							</li>
							<li>
								<a href="#" id="font-menu">Login</a>
							</li>
						</ul>
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Buscar">
							</div> 
							<button type="submit" class="btn btn-default">
								<span class="glyphicon glyphicon-search"></span> Buscar
							</button>
						</form>
						
					</div>
					
				</nav>
			</div>
		</div><br><br><br><br><br><br><br>
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8" style="padding: 20px;">
				<h3 class="text-center">
					Anunciar
				</h3>
				<form class="form-horizontal" role="form" id="cadastro"  action="inserirAnunciante.php" method="post">
					<div class="form-group">
						 
						<label for="txtnome" class="col-sm-2 control-label">
							Nome
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="txtnome" name="nome">
						</div>
					</div>
					<div class="form-group">
						 
						<label for="txtnomeempresa" class="col-sm-2 control-label">
							Nome Empresa
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="txtnomeempresa" name="empresa">
						</div>
					</div>
					<div class="form-group">
						 
						<label for="txtemail" class="col-sm-2 control-label">
							Email
						</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="txtemail" name="email">
						</div>
					</div>
					<div class="form-group">
						 
						<label for="txtsenha" class="col-sm-2 control-label">
							Senha
						</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="txtsenha" name="senha">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								 
								<label>
									<input type="checkbox" /> <b>Li e Concordo com os <a href="#" style="text-decoration:none; color:green;">Termos e Condições de Uso</a>!
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							 
							<button type="submit" class="btn btn-default">
								Cadastrar
							</button>
							<span style="color:#C42924; display:none;" class="msgerro">Preencha todos os campos corretamente</span>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-2">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation"style="background:#34495e;">
					<center class="footer">The Best Oferta © 2016<p>Gustavo Vitorino - <a href="http://hu3tech.blogspot.com.br/" class="footer">Hu3Tech
					</a></p></center>					
				</nav>
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>