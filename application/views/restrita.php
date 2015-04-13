<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Restrita - ti.mob - Info & Donwloads</title>
		<meta name="description" content="">
		<meta name="author" content="ckt.lucas">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="icon" type="image/png" href="<?php echo base_url('icon.png'); ?>">
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url('icon.png'); ?>">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css'); ?>">
		<!-- Estilos -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/css/estilos.css') ?>">
		<!-- Font -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('includes/webfontkit/stylesheet.css'); ?>">
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('includes/js/jquery-2.1.3.js'); ?>"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js'); ?>"></script>
	</head>
	<body>
	<div class="top">
		<nav class="navbar navbar-inverse" id="navTop">
  			<div class="row">
			  <div class="col-md-6" id="titulo">
			  	<a href="<?php echo base_url(); ?>" style="text-decoration:none;"><h4 id="tituloTop"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Serviço de Suporte ao Usuário</h4></a>
			  </div>
			  <div class="col-md-6" style="text-align: center;">
			  	<!-- Single button -->
				<div class='btn-group' id='menu'>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				    Logado Como: <span id="usuario_logado"><?php echo $sessao['username']; ?></span> <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				  	<li><a href="home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
				    <li><a href="" id="btnPerfil" data-toggle='modal' data-target='#myModalPerfil'><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
				    <li><a href="#"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> Tutoriais</a></li>
				    <li class="divider"></li>
				    <li><a href="#" id="btnSair"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Sair</a></li>
				  </ul>
				</div>
			  	
			  </div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
			  <?php
			  	if ($acesso == "A" || $acesso == "G"){
			  		
					echo"
				  <div class='col-md-4'>  
				  	<button type='button' id='btnNovoAmb' class='btn btn-default btn-lg btn-block' data-toggle='modal' data-target='#modalNovoAmb'> <span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Novo Ambiente</button>
				  </div>
				 	";
				}
			   if ($acesso == "A"){
				
				echo "
				  <div class='col-md-4'>
				  	<button type='button' id='btnNovoUsu' class='btn btn-default btn-lg btn-block' data-toggle='modal' data-target='#myModalNovoUser'> <span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Novo Usuário</button>
				  </div>
			  	";
			  }
			  if ($acesso == "A"){
			  	echo "
				  <div class='col-md-4'>
				  	<button type='button' id='btnUsuarios' class='btn btn-default btn-lg btn-block' data-toggle='modal' data-target=''> <span class='glyphicon glyphicon-user' aria-hidden='true'></span> Usuários</button>
				  </div>
			  	";
			  }
			  ?>
			</div>			
		</div>
	</div>
	<div class="container meio">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php	
			for ($i=0; $i < $num_ambientes; $i++) {
				echo "
			<div class='panel panel-default'>
				<div class='panel-heading' role='tab' id='heading".$i."'>
					<h4 class='panel-title'>
						<a class='collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapse".$i."' aria-expanded='false' aria-controls='collapse".$i."'>
							<span class='glyphicon glyphicon-menu-down' aria-hidden='true'></span> ".$ambientes[$i]->nome."
						</a>
					</h4>
				</div>
				<div id='collapse".$i."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading".$i."'>
					<div class='panel-body'>
						<p>Url Master: <a href='".$ambientes[$i]->url_master."'>".$ambientes[$i]->url_master."</a> </p>
						<p>Url Cliente: <a href='".$ambientes[$i]->url_cliente."'>".$ambientes[$i]->url_cliente."</a> </p>
						<p>Url Distribuidor: <a href='".$ambientes[$i]->url_distribuidor."'>".$ambientes[$i]->url_distribuidor."</a> </p>
						<hr>
						<div class='row'>
						  <div class='col-md-6'>
						  	<div class='item'>
						  		<p>Login Master: ".$ambientes[$i]->login_master."</p>
						  		<p>Senha Master: ".$ambientes[$i]->senha_master."</p>
						  	</div>
						  	<hr>
						  	<div class='item'>
						  		<p>Login Gestor: ".$ambientes[$i]->login_gestor."</p>
						  		<p>Senha Gestor: ".$ambientes[$i]->senha_gestor."</p>
						  	</div>
						  	<hr>
						  	<div class='item'>
						  		<p>Login Distribuidor: ".$ambientes[$i]->login_distribuidor."</p>
						  		<p>Senha Distribuidor: ".$ambientes[$i]->senha_distribuidor."</p>
						  	</div>
						  	<hr>
						  	<div class='item'>
						  		<p>Senha PDV: ".$ambientes[$i]->senha_pdv."</p>
						  	</div>
						  </div>
						  <div class='col-md-6'>
						  	<div class='item'>
						  		<p>Login Coletor: ".$ambientes[$i]->login_coletor."</p>
						  		<p>Senha Coletor: ".$ambientes[$i]->senha_coletor."</p>
						  	</div>
						  	<hr>
						  	<div class='item'>
						  		<p>Login Fiscal: ".$ambientes[$i]->login_fiscal."</p>
						  		<p>Senha Fiscal: ".$ambientes[$i]->senha_fiscal."</p>
						  	</div>
						  	<hr>
						  	<div class='item'>
						  		<p>Login Monitor: ".$ambientes[$i]->login_monitor."</p>
						  		<p>Senha Monitor: ".$ambientes[$i]->senha_monitor."</p>
						  	</div>
						  	<hr>";
							if ($acesso == "A" || $acesso == "G"){
						  	echo"	  	
						  	<div class='item'>
						  		<button id='btnEditAmb' onclick='editAmbiente(this.value)' type='button' class='btn btn-primary btn-lg' data-toggle='modal' data-target='#modalEditAmb' value='".$ambientes[$i]->id_ambiente."'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Editar</button>
						  	</div>";
							}
						  echo"
						  </div>
						</div>
						<hr>
						<div class='row'>
						";
						
						$path = $ambientes[$i]->path_apks;
						$diretorio = dir($path);
						while($arquivo = $diretorio -> read()){
							if ($arquivo == "." || $arquivo == ".."){
								
							}
							else{
					     		echo "<div class='col-md-1'>";

					     				if ($acesso == "A" || $acesso == "G"){
							     			echo "<button id='btnExcluirApk' onclick='excluirApk(this.value)' value='".$path.$arquivo."' type='button' class='btn btn-default btn-sm btn-danger' aria-label='Left Align'>
							     					<span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span>
							     				  </button>";
					     				}
					     		echo 	"<a href='".$path.$arquivo."'>
					     					<img src='".base_url('includes/imgs/androidlogo.png')."' style='width: 50px; margin-left: 10px;' >
					     					<p>".$arquivo."</p>
					     				</a>
					     			  </div>";
					   		}
					   }
					   $diretorio -> close();
					   
				
				echo "	</div>";
				
				if ($acesso == "A" || $acesso == "G"){
				
				echo "	<hr>
						<form enctype='multipart/form-data' method='post'>
						   <label>Upload Apk</label>
						    <input type='text' name='caminho' style='display: none;' value='".$ambientes[$i]->path_apks."' />
							<input type='file' id='file' name='files[]' multiple='multiple' />
							<button name='btnUpload' type='submit'  class='btn btn-success'><span class='glyphicon glyphicon-cloud-upload' aria-hidden='true'></span> Enviar</button> 
						</form>";
				}
				echo "
					</div>
				</div>
			</div>";
				
			}
			
			?>
		</div>
		<hr>
	</div>
	<div class="container rodape">
		<p>© 2015 por ti.mob. Criado por LJAS.</p>
	</div>
</body>
</html>
	<script type="text/javascript" src="<?php echo base_url('includes/js/js.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('includes/ajax/post.js')?>"></script>
