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
		<link rel="icon" type="image/png" href="<?php echo base_url('icon.ico'); ?>">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url('icon.ico'); ?>">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css'); ?>">
		<!-- Estilos -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/estilos.css'); ?>">
		<!-- Font -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/webfontkit/stylesheet.css'); ?>">
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
						  <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-expanded='false'> Logado Como: ".  $sessao['username'] ." <span class='caret'></span>
						  </button>
						  <ul class='dropdown-menu' role='menu'>
						    <li><a href='restrita'><span class='glyphicon glyphicon-lock' aria-hidden='true'></span> Restrita</a></li>
						    <li><a href='#''><span class='glyphicon glyphicon-play' aria-hidden='true'></span> Tutoriais</a></li>
						    <li class='divider'></li>
						    <li><a href='#' id='btnSair'><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span> Sair</a></li>
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
				  			<button type='button' class='btn btn-success btn-block' id='btnEntrar'><span class='glyphicon glyphicon-log-in' aria-hidden='true'></span> Log In
				  			</button>
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
			  	<h4 style="margin-top: 100px; text-align: justify;">Bem vindo ao módulo de auxílio ao cliente/usuário. Nesta área você pode encontrar informações sobre nossos serviços, downloads dos nossos aplicativos, links de acesso, manuais, vídeo aulas e tutoriais referentes ao nosso sistema.</h4>
			  </div>
			  <div class="col-md-4">
			  	<img src="<?php echo base_url('includes/imgs/logoRotativo.png'); ?>" class="img-responsive" alt="Responsive image" id="imgRotativo" style="width: 100%;">
			  </div>
			</div>	
		</div>
	</div>
	<div class="container meio">
		<center><h1><strong>Nosso Conteúdo</strong></h1></center>
		<div class="row" id="itensConteudo" style="margin-top:30px;">
		  <div class="col-md-4">
		  	<a style="text-decoration:none;color:#333333;" href="#" target="_blank">
			  	<h2><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Downloads/Infos</h2>
			  	<div class="containText">
			  		<p style="text-align:justify">Encontre as versões de nossas aplicações, manuais e outras informações referentes ao ambiente desejado. Acesse com seu Usuário e Senha no canto superior direito da página e veja nossas disponibilizações.</p>
			  	</div>
			  	<img src="<?php echo base_url('includes/imgs/imgMotog.png'); ?>" class="img-responsive" alt="Responsive image">
		  	</a>
		  </div>
		  <div class="col-md-4">
		  	<a style="text-decoration:none;color:#333333;" href="#" target="_blank">
			  	<h2><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Help Desk</h2>
			  	<div class="containText">
			  		<p style="text-align:justify">Problemas no sistema? Abra agora uma solicitação de suporte à nossa equipe e resolveremos no menor tempo possível!</p>
			  	</div>
			  	<center><img src="<?php echo base_url('includes/imgs/helpdesk.png'); ?>" class="img-responsive" alt="Responsive image" id="imgSite"></center>
		  	</a>
		  </div>
		  	<div class="col-md-4">
			  	<a style="text-decoration:none;color:#333333;" href="#" target="_blank">
				  	<h2><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Vídeo Aulas</h2>
				  	<div class="containText">
				  		<p style="text-align:justify">Ache a todo momento a solução para suas dúvidas, a partir de tutoriais em vídeos que auxiliam em todos processos que nossos usúarios e clientes necessitam.</p>
				  	</div>
				  	<center><img src="<?php echo base_url('includes/imgs/video.png'); ?>" class="img-responsive" alt="Responsive image"></center>
				</a>
			</div>
		</div>
		<hr>
		<div class="row" id="contato">
			<div class="col-md-12">
				<h2><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contato</h2>
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
		<div class="col-md-6">
			<p>© 2015 por ti.mob. Criado por LJAS.</p>
		</div>
		<div class="col-md-6" style="text-align:right;">
			<img width="40px;" src="<?php echo base_url('includes/imgs/chrome.jpg'); ?>">
			<img width="40px;" src="<?php echo base_url('includes/imgs/ie.png'); ?>">
			<img width="40px;" src="<?php echo base_url('includes/imgs/firefox.png'); ?>">
			<img width="40px;" src="<?php echo base_url('includes/imgs/safari.jpg'); ?>">
		</div>
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
