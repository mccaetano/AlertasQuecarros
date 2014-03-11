<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculo extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function BuscaMarcas() {		
		$query = $this->db->get('wtb_marcaspordescricao');
		return $query->result();
	}
}