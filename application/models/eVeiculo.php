<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eVeiculo extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function BuscaMarcas() {		
		$this->db->order_by("st_marca", "asc");
		$query  = $this->db->get("wtb_marcas");
				
		$result = $query->result();
		if(count($result) > 0){
			return $result;
		} else {
			return FALSE;
		}
	}
	
	function BuscaModelos($marca = FALSE) {
		if ($marca) {			
			$this->db->where("cd_marca", $marca);
		}	
		$this->db->order_by("st_modelo", "asc");		
		$query  = $this->db->get("wtb_modelos");
		
		$result = $query->result();		
		if(count($result) > 0){
			return $result;
		} else {
			return FALSE;
		}
	}
}