<?php
class eAlertas extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function adiciona($alerta) {
			
		$return = $this->db->insert('wtb_alertas_querocarros', $alerta);
		
		return $return;
		
	}
	
	function altera($alerta) {
	
		$this->db->update('wtb_alertas_querocarros', $alerta);
	
	}
	
	function exclui($alerta) {	
			
		$this->db->delete('wtb_alertas_querocarros', $alerta);
	
	}

	function buscaAlerta($cod_identificacao = 0) {
		$this->db->where('cod_identificacao', $cod_identificacao);
		$query  = $this->db->get('wtb_alertas_querocarros');

		$result = $query->result();
		if(count($result) > 0){
			return $result;
		} else {
			return FALSE;
		}

	}

	function listaAlertas($email) {
		
		$this->db->where('email', $email);
		$query  = $this->db->get("wtb_alertas_querocarros");

		$result = $query->result();		
		if(count($result) > 0){
			return $result;
		} else {
			return FALSE;
		}


	}
}