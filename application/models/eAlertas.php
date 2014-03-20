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

	function buscaAlerta($cd_identificacao = 0) {
		$this->db->cache_on();
		$query  = $this->db->query("select * from wtb_alertas_querocarros where cd_identificacao = $cd_identificacao");

		$result = $query->result();
		if(count($result) > 0){
			return $result;
		}

	}

	function listaAlertas() {
		$this->db->cache_on();
		$query  = $this->db->get("wtb_alertas_querocarros");

		$result = $query->result();		
		if(count($result) > 0){
			return $result;
		}


	}
}