<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Ambiente_model extends CI_Model{
		
		public function getAmbientes(){
			//$this->db->where($array_where);
			return $this->db->get('tbl_ambiente')->result();
		}
		
		public function getAmbienteById($id_ambiente=null){
			if ($id_ambiente != null){
				$this->db->where('id_ambiente', $id_ambiente);
				return $this->db->get('tbl_ambiente')->row();
			}
		}
		
		public function getMaxId(){
			$this->db->select_max('id_ambiente', 'id_max');
			return $this->db->get('tbl_ambiente');
		}
		
		public function insertAmbiente($dados){
			$this->db->insert('tbl_ambiente', $dados);
		}
		
		public function updateAmbiente($id_ambiente=null,$dados=null){
			if ($id_ambiente != null && $dados != null){
				$this->db->where('id_ambiente', $id_ambiente);
				$this->db->update('tbl_ambiente', $dados);
			}
		}
		
		public function insertAcesso($dados){
			$this->db->insert('tbl_acesso', $dados);
		}

		public function getAcessos(){
			return $this->db->get('tbl_acesso')->result();
		}

		public function getAcessos_id($id){
			$this->db->where('id_acesso', $id);
			return $this->db->get('tbl_acesso')->result();
		}

		public function insertApk($dados){
			$this->db->insert('tbl_apk', $dados);
		}

		public function getApks(){
			return $this->db->get('tbl_apk')->result();
		}

		public function getApks_id($id){
			$this->db->where('tbl_ambiente_id_ambiente', $id);
			return $this->db->get('tbl_apk')->result();
		}

		public function updateAcesso($id_acesso=null, $dados=null){
			if ($id_acesso != null && $dados != null){
				$this->db->where('id_acesso', $id_acesso);
				$this->db->update('tbl_acesso', $dados);
			}
		}
	}	

?>