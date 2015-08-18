<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Event_model extends CI_Model{
		
		public function newEvent($dados){
			$this->db->insert('events', $dados);
		}

		public function getEvents(){
			return $this->db->get('events')->result();
		}
	}

?>

