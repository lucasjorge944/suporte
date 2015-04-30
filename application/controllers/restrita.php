<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Restrita extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('ambiente_model');
			$this->load->model('usuario_model');
		}
		
		public function index(){
			
			$dados = array(
				'sessao' => $this->session->all_userdata(),
				'ambientes' => null,
				'num_ambientes' => null,
				'acesso' => null,
				'acessos_ambientes' => null,
				'num_acessos' => null,
				'apks' => null,
				'num_apks' => null,
			);
			
			$sessao_on = $dados['sessao'];
			
			if (array_key_exists('username', $sessao_on)){
				
			}
			else{
				header("Location: home");
			}
			
			
			$resultado = $this->ambiente_model->getAmbientes();
			$result_acessos = $this->ambiente_model->getAcessos();
			$result_apks = $this->ambiente_model->getApks();
			$resultado_usu = $this->usuario_model->getUsuario($dados['sessao']['username']);
			$rows = count($resultado);			
			
			$dados['ambientes'] = $resultado;
			$dados['num_ambientes'] = $rows;
			$dados['acesso'] = $resultado_usu->acesso;
			$dados['acessos_ambientes'] = $result_acessos;
			$dados['num_acessos'] = count($result_acessos);
			$dados['apks'] = $result_apks;
			$dados['num_apks'] = count($result_apks);
			
			$valid_formats = array("apk");
			$max_file_size = 1024 * 1024 * 10; // 10Mb			
			$count = 0;
			
			if(isset($_POST['btnUpload']) and $_SERVER['REQUEST_METHOD'] == "POST"){
				$path = $_POST['caminho']; // Upload directory
				$id_ambiente = $_POST['id_ambiente'];

				//Loop $_FILES to exeicute all files
				foreach ($_FILES['files']['name'] as $f => $name) {     
				    if ($_FILES['files']['error'][$f] == 4) {
				        continue; // Skip file if any error found
				    }	       
				    if ($_FILES['files']['error'][$f] == 0) {	           
				        if ($_FILES['files']['size'][$f] > $max_file_size) {
				            $message[] = "$name is too large!.";
				            continue; // Skip large files
				        }
						elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
							$message[] = "$name is not a valid format";
							continue; // Skip invalid file formats
						}
				        else{ // No error found! Move uploaded files 
				            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name))
				            $count++; // Number of successfully uploaded file

				        	$dados_apk = array(
				        		'id_apk' 					=> null,
								'nome_apk' 					=> $_FILES['files']['name'][0],
								'path_apk' 					=> $path.$_FILES['files']['name'][0],
								'tbl_ambiente_id_ambiente' 	=> $id_ambiente,
							);
							
							$resultado_apks = $this->ambiente_model->getApks_id($dados_apk['tbl_ambiente_id_ambiente']);
							$array_paths = array('');
	
							foreach ($resultado_apks as $res) {
								array_push($array_paths, $res->path_apk);
							}

							if (in_array($dados_apk['path_apk'], $array_paths)){
								
							}
							else{
								$this->ambiente_model->insertApk($dados_apk);
							}
				        }
				    }
				}
			}
			$this->load->view('restrita', $dados);
		}

		public function excluirApk(){
		 	$caminho = $_POST['caminho_arquivo'];
		 	$this->db->where('path_apk', $caminho);
			$this->db->delete('tbl_apk'); 
		 	unlink($caminho);
		}
		
		public function novoAmbiente(){
			if (isset($_POST['btnSalvarAmb'])){
				
				$nome_cidade = $_POST['nome_cidade'];
				
				$resultado = $this->ambiente_model->getMaxId()->result();

				$id_max = ($resultado[0]->id_max) + 1;
				$_nome_cidade = substr(strtolower($nome_cidade), 0, 3);
				$path = 'repositorio/versoes/' . $id_max . '_' . $_nome_cidade . '/apks/';
				mkdir($path, 0777, true);
				
				$dados = array(
					'nome_ambiente' 				=> $nome_cidade,
					'ativo' 				=> 'S',
					'path_apk' 				=> $path,
				);
				
				$this->ambiente_model->insertAmbiente($dados);
			}
		}

		public function novoAcesso(){
			if (isset($_POST['btnSalvarAcesso'])){
				
				$id_ambiente = $_POST['id_ambiente'];
				$nome_acesso = $_POST['nome_acesso'];
				$link = $_POST['link'];
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];

				$dados = array(
					'nome_acesso' 				=> $nome_acesso,
					'link' 						=> $link,
					'usuario' 					=> $usuario,
					'senha' 					=> $senha,
					'tbl_ambiente_id_ambiente'	=> $id_ambiente,
				);
				
				$this->ambiente_model->insertAcesso($dados);
			}
		}
		
		public function novoUsuario(){
			$nome = $_POST['nome'];
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];
			$email = $_POST['email'];
			$acesso = $_POST['acesso'];
			
			$resultado = $this->usuario_model->getUsuario($usuario);
			
			if (count($resultado) > 0){
				echo '0';
			}
			
			else{
				echo '1';
				$_senha = md5($senha);
				
				$dados = array(
						'nome' 		=> $nome,
						'usuario' 	=> $usuario,
						'senha' 	=> $_senha,
						'email' 	=> $email,
						'acesso' 	=> $acesso,
					);
				
				$this->usuario_model->insertUsuario($dados);
			}
			
		}
		
		public function getUsuario(){
			$resultado = $this->usuario_model->getUsuario($_POST['usuario_logado']);
			echo json_encode($resultado);
		}

		public function editAcesso(){
			$id_acesso = $_POST['id_acesso'];
			$result = $this->ambiente_model->getAcessos_id($id_acesso);
			echo json_encode($result[0]);
		}

		public function updateAcesso(){
			$id_acesso = $_POST['id_acesso'];
			$nome_acesso = $_POST['nome_acesso'];
			$link = $_POST['link'];
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];

			$dados = array(
				'nome_acesso' 	=> $nome_acesso,
				'link' 			=> $link,
				'usuario' 		=> $usuario,
				'senha' 		=> $senha,
			);

			$this->ambiente_model->updateAcesso($id_acesso, $dados);
		}

		public function saveEdit(){		
			$senha_nova = $_POST['senha_nova'];
			$senha_nova2 = $_POST['senha_nova2'];
			$id_usuario = $_POST['id_usuario'];
	
			$_senha_nova = md5($senha_nova);
				
			$dados = array(
				'senha' => $_senha_nova,
			);
				
			$this->usuario_model->updateUsuario($id_usuario, $dados);
		}

		public function editAmbiente(){
			$id_ambiente = $_POST['id_selecionado'];
			
			$resultado = $this->ambiente_model->getAmbienteById($id_ambiente);
			echo json_encode($resultado);			
		}
		
		public function saveEditAmbiente(){
			$id_ambiente = $_POST['id_ambiente'];
			
			
			
			$dados = $arrayName = array(
				'nome' => $_POST['nome'],
				'url_master' => $_POST['url_master'],
				'url_cliente' => $_POST['url_cliente'],
				'url_distribuidor' => $_POST['url_distribuidor'],
				'login_master' => $_POST['login_master'],
				'senha_master' => $_POST['senha_master'],
				'login_gestor' => $_POST['login_gestor'],
				'senha_gestor' => $_POST['senha_gestor'],
				'login_distribuidor' => $_POST['login_distribuidor'],
				'senha_distribuidor' => $_POST['senha_distribuidor'],
				'senha_pdv' => $_POST['senha_pdv'],
				'login_coletor' => $_POST['login_coletor'],
				'senha_coletor' => $_POST['senha_coletor'],
				'login_fiscal' => $_POST['login_fiscal'],
				'senha_fiscal' => $_POST['senha_fiscal'], 
				'login_monitor' => $_POST['login_monitor'], 
				'senha_monitor' => $_POST['senha_monitor'], 
			);
			
			$this->ambiente_model->updateAmbiente($id_ambiente, $dados);
		}
		
		public function sair(){
			if (isset($_POST['btnSair'])){
				$this->session->sess_destroy();		
			}
		}
	}

?>