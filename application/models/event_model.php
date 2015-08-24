<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Event_model extends CI_Model{
		
		public function newEvent($dados){
			$this->db->insert('events', $dados);
		}

		public function getEvents(){
			return $this->db->get('events')->result();
		}

		public function dragEvent($id, $dados){
			$this->db->where('id', $id);
			$this->db->update('events', $dados); 
		}

		public function updateEvent($id, $dados){
			$this->db->where('id', $id);
			$this->db->update('events', $dados); 
		}

		public function deleteEvent($id){
			$this->db->where('id', $id);
			$this->db->delete('events', $dados); 
		}

		public function resizeEvent($id, $dados){
			$this->db->where('id', $id);
			$this->db->update('events', $dados); 
		}
	}

?>

