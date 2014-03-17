<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eVeiculo extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function BuscaMarcas() {		
		$this->db->cache_on();		
		$query  = $this->db->query('select * from wtb_marcaspordescricao');
				
		$result = $query->result();
		if(count($result) > 0){
			return $result;
		}
	}
	
	function BuscaModelos($marca = FALSE) {
		$this->db->cache_on();
		if (!$marca) {			
			$query  = $this->db->query('select * from wtb_modelospordescricao');
		}
		else {
			$query  = $this->db->query("select * from wtb_modelospordescricao where cd_marca = $marca");
		}		
		
		$result = $query->result();		
		if(count($result) > 0){
			return $result;
		}
	}
}