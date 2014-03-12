<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculo extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function BuscaMarcas() {		
		$query  = $this->db->query('select * from wtb_marcaspordescricao');		
		$result = $query->result_array();
		if(count($result) > 0){
			return $result;
		}
	}
}