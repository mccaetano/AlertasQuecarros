<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eAnuncios extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	public function BuscaAnuncios($id) {
		$query  = $this->db->query("busca_anuncios_querocarros '$id'");

		$result = $query->result();
		if(count($result) > 0){
			return $result;
		} else {
			return FALSE;
		}
	}
}
