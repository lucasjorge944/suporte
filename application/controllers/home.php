<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('usuario_model');
			
		}
		
		public function index(){
							
			$dados = array(
				'titulo' => 'ti.mob - Info & Downloads',
				'sessao' => $this->session->all_userdata(),
				'logado' => FALSE,
			);
			
			$sessao_on = $dados['sessao'];
			
			if (array_key_exists('username', $sessao_on)){
				$dados['logado'] = TRUE;
			}
			else{
				

			}
			
			$this->load->view('home', $dados);
		}
		
		public function login(){
			if (isset($_POST['btnLogin'])){
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];
				
				$senha = md5($senha);
				
				$resultado = $this->usuario_model->login($usuario, $senha);

				$rows = count($resultado);
				
				if ($rows == 1){
					$newdata = array(
	                   'username'  => $resultado->usuario,
	                   'acesso'     => $resultado->acesso,
	                   'logged_in' => TRUE
               		);

					$this->session->set_userdata($newdata);
					echo 1;
				}
				else{
					echo 0;
				}
			}
		}	
	}

?>