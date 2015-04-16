$(document).ready(function(){
	$("#btnEntrar").click(function(){

		var usuario = document.getElementById('txtUsuarioLogin').value;
		var senha = document.getElementById('txtSenhaLogin').value;
		
        $.post('home/login', {btnLogin:'btnLogin', usuario:usuario, senha:senha}, 
        function(data){
        	if (data == 1){
        		window.location.assign('restrita');
        	}
        	else{
        		alert('Usuário e Senha Digitados não Coincidem!');
        	}
        });
    });
});

$(document).ready(function(){
	$("#btnSair").click(function(){
		
        $.post('restrita/sair', {btnSair:'btnSair'}, 
        function(data){
        	window.location.assign('home');
        });
    });
});

$(document).ready(function(){
	$("#btnSalvarAmb").click(function(){
		
		var nome_cidade = $("#nome_cidade").val();

        $.post('restrita/novoAmbiente', {btnSalvarAmb:'btnSalvarAmb', nome_cidade:nome_cidade}, 
        function(data){
        	window.location.reload();
        });
    });
});

function novoAcesso(clicked_ambiente){

	var id_ambiente = clicked_ambiente;

	$(document).ready(function(){
		$("#btnSalvarAcesso").click(function(){
			
			var nome_acesso = $("#nome_acesso").val();
			var link = $("#link").val();
			var usuario = $("#usuario").val();
			var senha = $("#senha").val();

	        $.post('restrita/novoAcesso', {btnSalvarAcesso:'btnSalvarAcesso', id_ambiente:id_ambiente, nome_acesso:nome_acesso, link:link, usuario:usuario, senha:senha}, 
	        function(data){
	        	window.location.reload();
	        });
	    });
	});
}

$(document).ready(function(){
	$("#btnSalvarUsu").click(function(){
		
		var nome = $("#txtNome").val();
		var usuario = $("#txtUsuario").val();
		var senha = $("#txtSenha").val();
		var senha2 = $("#txtSenha2").val();
		var email = $("#txtEmail").val();
		var acesso = $("#acesso").val();

		
			if (senha == senha2){
				$.ajax({
				url: 'restrita/novoUsuario',
				type: 'POST',
				data: {nome:nome, usuario:usuario, senha:senha, email:email, acesso:acesso},
				})
				.done(function(data) {
					if (data == 0){
						alert('Esse nome de usuário já existe, por favor escolha outro!');
					}
					else if (data == 1){
						$('#myModalCriado').modal('show');
					}
				})
				.fail(function() {
					//alert("error");
				})
				.always(function() {
					//alert("complete");
				});
			}		
			else{
				alert("As senhas Digitadas não coincidem!");
			}

    });
});

$(document).ready(function(){
	$("#btnPerfil").click(function(){
		var usuario_logado = $("#usuario_logado").text();
				
		$.ajax({
			url: 'restrita/getUsuario',
			type: 'POST',
			data: { usuario_logado:usuario_logado },
			})
			.done(function(data) {
				var _usu_logado = data;
				var usu_logado = JSON.parse(_usu_logado);
				
				var id_usuario = usu_logado.id_usuario;
				var nome = usu_logado.nome;
				var usuario = usu_logado.usuario;
				var email = usu_logado.email;
				
				
				$("#txtIdP").val(id_usuario);
				$("#txtNomeP").val(nome);
				$("#txtUsuarioP").val(usuario);
				$("#txtEmailP").val(email);
				
			})
			.fail(function() {
				//alert("error");
			})
			.always(function() {
				//alert("complete");
			});

	});
});

$(document).ready(function(){
	$("#btnUpdateUsuario").click(function(){
		
		var senha_nova = $("#txtSenhaP2").val();
		var senha_nova2 = $("#txtSenhaP3").val();
		var id_usuario = $("#txtIdP").val();
		
    	var n = senha_nova.length;

		if (n > 5){
			
			if (senha_nova == senha_nova2){
				$.ajax({
				url: 'restrita/saveEdit',
				type: 'POST',
				data: { senha_nova:senha_nova, senha_nova2:senha_nova2, id_usuario:id_usuario },
				})
				.done(function(data) {
					$('#myModalUpdateSenha').modal('show');
				})
				.fail(function() {
					
				})
				.always(function() {
					
				});
			}
			
			else{
				alert('As novas senhas digitas não coincidem!');
			}
		}
		
		else{
			alert('Digite uma senha de no mínimo 6 digitos!');
		}

		
		
	});
});


function editAmbiente(clicked_value){
	var id_selecionado = clicked_value;
	
	$.ajax({
	url: 'restrita/editAmbiente',
	type: 'POST',
	data: {id_selecionado: id_selecionado},
	})
	.done(function(data) {
		var ambiente = JSON.parse(data);
		
		$("#nome_cidadeE").val(ambiente.nome);
		$("#url_masterE").val(ambiente.url_master);
		$("#url_clienteE").val(ambiente.url_cliente);
		$("#url_distribuidorE").val(ambiente.url_distribuidor);
		$("#login_masterE").val(ambiente.login_master);
		$("#senha_masterE").val(ambiente.senha_master);
		$("#login_gestorE").val(ambiente.login_gestor);
		$("#senha_gestorE").val(ambiente.senha_gestor);
		$("#login_distribuidorE").val(ambiente.login_distribuidor);
		$("#senha_distribuidorE").val(ambiente.senha_distribuidor);
		$("#senha_pdvE").val(ambiente.senha_pdv);
		$("#login_coletorE").val(ambiente.login_coletor);
		$("#senha_coletorE").val(ambiente.senha_coletor);
		$("#login_fiscalE").val(ambiente.login_fiscal);
		$("#senha_fiscalE").val(ambiente.senha_fiscal);
		$("#login_monitorE").val(ambiente.login_monitor);
		$("#senha_monitorE").val(ambiente.senha_monitor);
		$("#id_ambienteE").val(ambiente.id_ambiente);
	})
	.fail(function() {
		//console.log("error");
	})
	.always(function() {
		//console.log("complete");
	});

}

function excluirApk(value_select){
	var caminho_arquivo = value_select;
	$('#myModalExcluirApk').modal('show');

	$(document).ready(function() {
		$("#btnConfirmarApk").click(function() {
			
			$.ajax({
				url: 'restrita/excluirApk',
				type: 'POST',
				data: {caminho_arquivo: caminho_arquivo},
			})
			.done(function(data) {
				
			})
			.fail(function() {
				
			})
			.always(function() {
				location.reload();
			});
			

		});;
	});
}

$(document).ready(function(){
	$("#btnSalvarEditAmb").click(function(){
		
		var id_ambiente = $("#id_ambienteE").val();
		var nome = $("#nome_cidadeE").val();
		var url_master = $("#url_masterE").val();
		var url_cliente = $("#url_clienteE").val();
		var url_distribuidor = $("#url_distribuidorE").val();
		var login_master = $("#login_masterE").val();
		var senha_master = $("#senha_masterE").val();
		var login_gestor = $("#login_gestorE").val();
		var senha_gestor = $("#senha_gestorE").val();
		var login_distribuidor = $("#login_distribuidorE").val();
		var senha_distribuidor = $("#senha_distribuidorE").val();
		var senha_pdv = $("#senha_pdvE").val();
		var login_coletor = $("#login_coletorE").val();
		var senha_coletor = $("#senha_coletorE").val();
		var login_fiscal = $("#login_fiscalE").val();
		var senha_fiscal = $("#senha_fiscalE").val();
		var login_monitor = $("#login_monitorE").val();
		var senha_monitor = $("#senha_monitorE").val();
		
		
		$.ajax({
		url: 'restrita/saveEditAmbiente',
		type: 'POST',
		data: {
			id_ambiente: id_ambiente,
			nome: nome, 
			url_master: url_master, 
			url_cliente: url_cliente, 
			url_distribuidor: url_distribuidor, 
			login_master: login_master, 
			senha_master: senha_master, 
			login_gestor: login_gestor, 
			senha_gestor: senha_gestor, 
			login_distribuidor: login_distribuidor, 
			senha_distribuidor: senha_distribuidor, 
			senha_pdv: senha_pdv, 
			login_coletor: login_coletor, 
			senha_coletor: senha_coletor, 
			login_fiscal: login_fiscal, 
			senha_fiscal: senha_fiscal, 
			login_monitor: login_monitor,
			senha_monitor: senha_monitor, 
			},
		})
		.done(function() {
			$('#myModalUpdateAmb').modal('show');
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
});





