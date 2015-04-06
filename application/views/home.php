<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $titulo; ?></title>
		<meta name="description" content="">
		<meta name="author" content="ckt.lucas">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css'); ?>">
		<!-- Estilos -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/estilos.css'); ?>">
	</head>
	<body>
	<div class="top">
		<nav class="navbar navbar-inverse" id="navTop">
  			<div class="row">
			  <div class="col-md-6" id="titulo">
			  	<a href="<?php echo base_url(); ?>" style="text-decoration:none;"><h4 id="tituloTop"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Serviço de Suporte ao Usuário</h4></a>
			  </div>
			  <div class="col-md-6" style="text-align: center;">
			  	<?php
			  		if ($logado == TRUE){
				  		echo"
				  		<!-- Single button -->
						<div class='btn-group' id='menu'>
						  <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
						    Logado Como: ".  $sessao['username'] ." <span class='caret'></span>
						  </button>
						  <ul class='dropdown-menu' role='menu'>
						    <li><a href='restrita'>Restrita</a></li>
						    <li class='divider'></li>
						    <li><a href='#' id='btnSair'>Sair</a></li>
						  </ul>
						</div>";
				  	}
				  	else{
				  		echo "
				  		<form class='form-inline'>
				  			<div class='form-group'>
				  				<input type='text' class='form-control' id='txtUsuarioLogin' placeholder='Usuario'>
				  			</div>
				  			<div class='form-group'>
				  				<input type='password' class='form-control' id='txtSenhaLogin' placeholder='Senha'>
				  			</div>
				  			<div class='form-group'>
				  			<input type='button' class='btn btn-success btn-block' id='btnEntrar' value='Log In'>
				  			</div>
				  		</form>
			  		";
			  		}
			  	?>
			  </div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
			  <div class="col-md-4">
			  	<img src="<?php echo base_url('includes/imgs/hd.png'); ?>" class="img-responsive" alt="Responsive image">
			  </div>
			  <div class="col-md-4">
			  	<h4 style="margin-top: 100px; text-align: justify;">Bem vindo ao módulo de auxílio ao usuário. Nesta área você pode encontrar informações sobre nossos serviços, downloads dos nossos aplicativos, links de acesso e manuais do nosso sistema.</h4>
			  </div>
			  <div class="col-md-4">
			  	<img src="<?php echo base_url('includes/imgs/logoRotativo.png'); ?>" class="img-responsive" alt="Responsive image" id="imgRotativo" style="width: 100%;">
			  </div>
			</div>	
		</div>
	</div>
	<div class="container meio">
		<div class="row">
		  <div class="col-md-4">
		  	<h2>Downloads</h2>
		  	<p style="text-align:justify">Encontre as Apks, manuais e outras informações, referentes ao ambiente desejado, digitando seu Usuário e Senha nos campos que se encontram no canto superior direito da página.</p>
		  	<img src="<?php echo base_url('includes/imgs/imgMotog.png'); ?>" class="img-responsive" alt="Responsive image">
		  </div>
		  <div class="col-md-4">
		  	<h2>Nosso site</h2>
		  	<p style="text-align:justify">Acesse nosso site oficial e obtenha mais informações detalhadas sobre a ti.mob e o Rotativo Digital.</p>
		  	<a href="http://dev.timob.com.br/timob/" target="_blank"><img src="<?php echo base_url('includes/imgs/site.png'); ?>" class="img-responsive" alt="Responsive image" id="imgSite">
		  	<button type="button" class="btn btn-default btn-block">Clique e acesse!</button></a>
		  </div>
		  <div class="col-md-4">
		  	<h2>Contato</h2>
		  	<p style="text-align:justify">Quer deixar um comentário, sugestão ou crítica? 
		  		Preencha os campos abaixos! 
		  		Obs.: Preencha os campos corretamente para que possamos dar um feedback.</p>
		  	<form method="post">
		  		<div class="form-group">
		  			<input type="email" class="form-control" id="txtEmail" placeholder="Email">
		  		</div>
		  		<div class="form-group">
		  			<input type="text" class="form-control" id="txtNome" placeholder="Nome Completo">
		  		</div>
		  		<div class="form-group">
		  			<textarea type="text" class="form-control" id="txtMensagem" placeholder="Mensagem..."></textarea>
		  		</div>
		  		<button id="btnEnviarContato" type="button" name="contato" class="btn btn-default">Enviar</button>
		  	</form>
		  </div>
		</div>
		<hr>
	</div>
	<div class="container rodape">
		<p>© 2015 por ti.mob. Criado por LJAS.</p>
	</div>
</body>
</html>
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('includes/js/jquery-2.1.3.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('includes/ajax/post.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('includes/js/js.js')?>"></script>

	<!-- Bootstrap -->
	<script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>
