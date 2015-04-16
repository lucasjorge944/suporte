<!-- Modal Novo Ambiente-->
<div class="modal fade" id="modalNovoAmb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo Ambiente</h4>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal" method="post">
      		<div class="form-group">
			   <label for="nome_cidade" class="col-sm-2 control-label">Cidade: </label>
			   <div class="col-sm-10">
			     <input type="text" class="form-control" id="nome_cidade" placeholder="">
			   </div>
			 </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" id="btnSalvarAmb" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Novo Acesso-->
<div class="modal fade" id="modalNovoAcesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Novo Acesso</h4>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal" style="padding:10px;">
      		<div class="form-group">
				<input type="text" class="form-control" id="nome_acesso" placeholder="Nome do Acesso">
			 </div>
			 <div class="form-group">
				<input type="text" class="form-control" id="link" placeholder="Link do Acesso">
			 </div>
			 <div class="form-group">
			 	<div class="row">
			 		<div class="col-md-6"><input type="text" class="form-control" id="usuario" placeholder="Usuario do Acesso"></div>
			 		<div class="col-md-6"><input type="text" class="form-control" id="senha" placeholder="Senha do Acesso"></div>
				</div>
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" id="btnSalvarAcesso" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Ambiente-->
<div class="modal fade bs-example-modal-lg" id="modalEditAmb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Ambiente</h4>
      </div>
      <div class="modal-body">
      	<form class="form-horizontal" method="post">
      		<div class="form-group">
			   <label for="nome_cidade" class="col-sm-2 control-label">Cidade: </label>
			   <div class="col-sm-10">
			     <input type="text" class="form-control" id="nome_cidadeE" placeholder="">
			   </div>
			 </div>
	      	<div class="form-group">
			   <label for="url_master" class="col-sm-2 control-label">Url Master: </label>
			   <div class="col-sm-10">
			     <input type="text" class="form-control" id="url_masterE" placeholder="">
			   </div>
			 </div>
			 <div class="form-group">
			   <label for="url_cliente" class="col-sm-2 control-label">Url Cliente: </label>
			   <div class="col-sm-10">
			     <input type="text" class="form-control" id="url_clienteE" placeholder="">
			   </div>
			 </div>
			 <div class="form-group">
			   <label for="url_distribuidor" class="col-sm-2 control-label">Url Distribuidor: </label>
			   <div class="col-sm-10">
			     <input type="text" class="form-control" id="url_distribuidorE" placeholder="">
			   </div>
			 </div>
	      	<div class="row">
			  <div class="col-md-6" style="padding: 30px;">
			  	<div class="form-group">
		    		<label for="login_master">Login Master: </label>
		    		<input type="text" class="form-control" id="login_masterE" placeholder="">
		    		<label for="senha_master">Senha Master: </label>
		    		<input type="text" class="form-control" id="senha_masterE" placeholder="">
		  		</div>
		  		<div class="form-group">
		    		<label for="login_gestor">Login Gestor: </label>
		    		<input type="text" class="form-control" id="login_gestorE" placeholder="">
		    		<label for="senha_gestor">Senha Gestor: </label>
		    		<input type="text" class="form-control" id="senha_gestorE" placeholder="">
		  		</div>
		  		<div class="form-group">
		    		<label for="login_distribuidor">Login Distribuidor: </label>
		    		<input type="text" class="form-control" id="login_distribuidorE" placeholder="">
		    		<label for="senha_distribuidor">Senha Distribuidor: </label>
		    		<input type="text" class="form-control" id="senha_distribuidorE" placeholder="">
		  		</div>
		  		<div class="form-group">
		    		<label for="senha_pdv">Senha PDV: </label>
		    		<input type="text" class="form-control" id="senha_pdvE" placeholder="">
		  		</div>
			  </div>
			  <div class="col-md-6" style="padding: 30px;">
			  	<div class="form-group">
		    		<label for="login_coletor">Login Coletor: </label>
		    		<input type="text" class="form-control" id="login_coletorE" placeholder="">
		    		<label for="senha_coletor">Senha Coletor: </label>
		    		<input type="text" class="form-control" id="senha_coletorE" placeholder="">
		  		</div>
		  		<div class="form-group">
		    		<label for="login_fiscal">Login Fiscal: </label>
		    		<input type="text" class="form-control" id="login_fiscalE" placeholder="">
		    		<label for="senha_fiscal">Senha Fiscal: </label>
		    		<input type="text" class="form-control" id="senha_fiscalE" placeholder="">
		  		</div>
		  		<div class="form-group">
		    		<label for="login_monitor">Login Monitor: </label>
		    		<input type="text" class="form-control" id="login_monitorE" placeholder="">
		    		<label for="senha_monitor">Senha Monitor: </label>
		    		<input type="text" class="form-control" id="senha_monitorE" placeholder="">
		    		<input type="text" class="form-control" id="id_ambienteE" placeholder="" style="display: none;">
		  		</div>
			  </div>
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" id="btnSalvarEditAmb" class="btn btn-primary">Salvar Alterações</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Novo Usuario -->
<div class="modal fade" id="myModalNovoUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Usuário</h4>
      </div>
      <div class="modal-body">
        <form>
		  <div class="form-group">
		    <input type="text" class="form-control" id="txtNome" placeholder="Nome Completo">
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="txtUsuario" placeholder="Usuário">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" id="txtSenha" placeholder="Senha">
		  </div>
		  <div class="form-group">
		    <input type="password" class="form-control" id="txtSenha2" placeholder="Digite sua senha novamente">
		  </div>
		  <div class="form-group">
		    <input type="email" class="form-control" id="txtEmail" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <select id="acesso" class="form-control">
			  <option value="A">Administrador</option>
			  <option value="G">Gerenciador</option>
			  <option value="V">Visitante</option>
			</select>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id="btnSalvarUsu">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Perfil -->
<div class="modal fade" id="myModalPerfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Meu Perfil</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group" style="display: none;">
		    <input type="text" class="form-control" id="txtIdP" disabled>
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="txtNomeP" placeholder="Nome Completo" disabled>
		  </div>
		  <div class="form-group">
		    <input type="text" class="form-control" id="txtUsuarioP" placeholder="Usuário" disabled>
		  </div>
		  <div class="form-group">
		    <input type="email" class="form-control" id="txtEmailP" placeholder="Email" disabled>
		  </div>
		  <div style="border: 1px solid gray; border-radius:20px; padding: 10px;">
		  	<h4><span class="label label-primary">Alterar Senha</span></h4>
			  <div class="form-group">
			    <input type="password" class="form-control" id="txtSenhaP2" placeholder="Digite sua nova senha">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="txtSenhaP3" placeholder="Digite sua nova senha novamente">
			  </div>
		  </div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id="btnUpdateUsuario">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Usuario Criado -->
<div class="modal fade bs-example-modal-sm" id="myModalCriado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-lg btn-success" aria-label="Left Align" onclick="window.location.reload()">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span style="font-size: 16px;">Usuário Criado com Sucesso!</span>
		</button>
      </div>
      <div class="modal-footer"> 
      </div>
    </div>
  </div>
</div>

<!-- Modal Senha Alterada -->
<div class="modal fade bs-example-modal-sm" id="myModalUpdateSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-lg btn-success" aria-label="Left Align" onclick="window.location.reload()">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span style="font-size: 16px;">Senha Alterada com Sucesso!</span>
		</button>
      </div>
      <div class="modal-footer"> 
      </div>
    </div>
  </div>
</div>

<!-- Modal Ambiente Alterado -->
<div class="modal fade bs-example-modal-sm" id="myModalUpdateAmb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-lg btn-success" aria-label="Left Align" onclick="window.location.reload()">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span style="font-size: 14px;">Ambiente Atualizado com Sucesso!</span>
		</button>
      </div>
      <div class="modal-footer"> 
      </div>
    </div>
  </div>
</div>

<!-- Modal Contato Enviado -->
<div class="modal fade bs-example-modal-sm" id="myModalEnviarContato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
      	<button type="button" class="btn btn-success" aria-label="Left Align" onclick="window.location.reload()">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
		</button> Contato Enviado
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
		 <span style="font-size: 14px;">Em breve entraremos em contato, pelo email informado!</span>
      </div>
      <div class="modal-footer">
      Equipe ti.mob agradece pela colaboração. 
      </div>
    </div>
  </div>
</div>

<!-- Modal Excluir Apk-->
<div class="modal fade bs-example-modal-sm" id="myModalExcluirApk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Deseja realmente excluir a APK?</h4>
      </div>
      <div class="modal-body">
        <button type="button" id='btnConfirmarApk' class="btn btn-success" aria-label="Left Align">
		  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span style="font-size: 16px;">Sim</span>
		</button>
		<button type="button" id='btnConfirmarApk' class="btn btn-danger" aria-label="Left Align" style="float:right;" onclick="location.reload();">
		  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <span style="font-size: 16px;">Não</span>
		</button>
      </div>
      <div class="modal-footer"> 
      </div>
    </div>
  </div>
</div>
  