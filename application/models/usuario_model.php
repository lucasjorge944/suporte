<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Usuario_model extends CI_Model{
		
		public function login($usuario=null, $senha=null){
			if ($usuario != null && $senha != null){
				$this->db->where('usuario', $usuario);
				$this->db->where('senha', $senha);
				$this->db->limit(1);
				return $this->db->get('tbl_usuario')->row();
			}
			else{
				return false;
			}
		}
		
		public function getUsuario($usuario=null){
			if ($usuario != null){
				$this->db->select('id_usuario, nome, usuario, email, acesso');
				$this->db->where('usuario', $usuario);
				$this->db->limit(1);
				return $this->db->get('tbl_usuario')->row();
			}
			else{
				return false;
			}
		}
		
		public function updateUsuario($id_usuario=null, $dados=null){
			if ($id_usuario != null && $dados != null){
				$this->db->where('id_usuario', $id_usuario);
				$this->db->update('tbl_usuario', $dados);
			}
		}
		
		
		public function insertUsuario($dados){
			$this->db->insert('tbl_usuario', $dados);
		}
	}

?>

