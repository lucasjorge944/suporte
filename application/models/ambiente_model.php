<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Ambiente_model extends CI_Model{
		
		public function getAmbientes(){
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
	}	

?>