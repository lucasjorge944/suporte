<?php 
  header("Content-Type: text/html; charset=UTF-8");
?>
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
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
							<span class='glyphicon glyphicon-menu-down' aria-hidden='true'></span> ".$ambientes[$i]->nome_ambiente."
						</a>
					</h4>
				</div>
				<div id='collapse".$i."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading".$i."'>
					<div class='panel-body'>
						<div class='row'>";
						for ($x=0; $x < $num_acessos; $x++) { 
									if ($ambientes[$i]->id_ambiente == $acessos_ambientes[$x]->tbl_ambiente_id_ambiente){
							echo "
							<div class='col-xs-12 col-sm-6 col-md-6'>
										<h3><span id='bold'>".$acessos_ambientes[$x]->nome_acesso."</span></h3>
										<h4><span id='bold'>Link:</span> <a target='_blank' href='".$acessos_ambientes[$x]->link."'>".$acessos_ambientes[$x]->link."</a></h4>";
										if ($acesso == "A" || $acesso == "G"){
											echo "
											<button id='".$acessos_ambientes[$x]->id_acesso."' class='btn btn-info btn-lg btnEditAcesso' onclick='editAcesso(this.id)'> 
												<span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Editar
											</button>";
										}
										echo "
										<h4><span id='bold'>Usuário:</span> ".$acessos_ambientes[$x]->usuario."</h4>
										<h4><span id='bold'>Senha:</span> ".$acessos_ambientes[$x]->senha."</h4>
						
							</div>";
								}
							}
						echo "
						</div>	";	

						if ($acesso == "A" || $acesso == "G"){
						echo"			
							<div class='row'>
							  <div class='col-md-6'>
							  	<button id='".$ambientes[$i]->id_ambiente."' type='button' class='btn btn-primary btn-lg btn-block' data-toggle='modal' data-target='#modalNovoAcesso' onclick='novoAcesso(this.id)'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Novo Acesso</button>
							  </div>
							</div>";
						}

						echo "
						<hr>
						<div class='row'>";
							for ($x=0; $x < $num_apks; $x++) { 
								if ($ambientes[$i]->id_ambiente == $apks[$x]->tbl_ambiente_id_ambiente){
									echo "
									<div class='col-xs-6 col-sm-4 col-md-2'>
										<div class='btn-group'>
										  <button style='margin-top:10px;' type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><span class='glyphicon glyphicon-phone' aria-hidden='true'></span>
										    ".$apks[$x]->nome_apk." <span class='caret'></span>
										  </button>
										  <ul class='dropdown-menu' role='menu'>
										    <li><a href='".$apks[$x]->path_apk."'><span class='glyphicon glyphicon-cloud-download' aria-hidden='true'></span> Download</a></li>";

										    if ($acesso == "A" || $acesso == "G"){

										    	echo"
										    	<li><a href='#' id='".$apks[$x]->path_apk."' onclick='excluirApk(this.id)'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Excluir</a></li>";
											}
										    echo "
										  </ul>
										</div>
									</div>
									";
								}
							}
						echo "
						</div>";
				
						if ($acesso == "A" || $acesso == "G"){
						
						echo "	<hr>
								<form enctype='multipart/form-data' method='post'>
								   <label>Upload Apk</label>
								    <input type='text' name='caminho' style='display: none;' value='".$ambientes[$i]->path_apk."' />
								    <input type='text' name='id_ambiente' style='display: none;' value='".$ambientes[$i]->id_ambiente."' />
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
<?php require_once('includes/modal/modal.php'); ?>
