<!DOCTYPE html>
<?php
	include "carregaDados.php";
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo "Bem-Vindo $_COOKIE[nome]";?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="navbar-header">
						 
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
						</button> <a class="navbar-brand" href="#" id="font-menu"><?php echo "$_COOKIE[nome]";?></a>
					</div>
					
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background:#34495e;font-color:white;">
						<ul class="nav navbar-nav">
							<li>
								<a href="#" id="font-menu">Meus Anuncios</a>
							</li>
							<li>
								<a href="#" id="font-menu">Link</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="logout.php" id="font-menu">Sair</a>
							</li>
						</ul>
					</div>
					
				</nav>
			</div>
		</div><br><br><br><br><br><br>
		<div class="row">
			<div class="col-md-2" style="padding-left:50px">
				<img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
			</div>
			<div class="col-md-8">
				<form class="form-horizontal" role="form">
					<div class="form-group">
						 
						<label for="txtnome" class="col-sm-2 control-label">
							Nome
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="txtnome" value=<?php echo "$nome";?>>
						</div>
					</div>
					<div class="form-group">
						 
						<label for="txtempresa" class="col-sm-2 control-label">
							Empresa
						</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="txtempresa" value=<?php echo"$empresa";?>>
						</div>
					</div>
					<div class="form-group">
						 
						<label for="inputEmail3" class="col-sm-2 control-label">
							Email
						</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3" value=<?php echo"$email";?>>
						</div>
					</div>
					<div class="form-group">
						 
						<label for="inputPassword3" class="col-sm-2 control-label">
							Password
						</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword3" value=<?php echo"$senha";?>>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-5">
							 
							<button class="btn btn-default">
								Salvar
							</button>
							<a href="deletaAnunciante.php" class="btn btn-default" role="button">Excluir</a>
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