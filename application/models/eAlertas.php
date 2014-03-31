<?php
class eAlertas extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function adiciona($alerta) {
		$this->db->set('titulo', $alerta['titulo']);
		$this->db->set('email', $alerta['email']);
		$return = $this->db->insert('wtb_alertas_querocarros');
		
		return $return;
		
	}
	
	function altera($cod_identificacao, $alerta) {
		$this->db->set('dataalteracao', date("Y-m-d H:i:s", time()));
		$this->db->where('cod_identificacao', $cod_identificacao);
		$return = $this->db->update('wtb_alertas_querocarros', $alerta);
		return $return;
	}
	
	function exclui($cod_identificacao) {
		$this->db->where('cod_identificacao', $cod_identificacao);
		$return = $this->db->delete('wtb_alertas_querocarros');
		return $return;
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
	
	function listaAlertasMotor() {
	
		$query  = $this->db->query("busca_alertas_querocarros");
	
		$result = $query->result();
		if(count($result) > 0){
			return $result;
		} else {
			return FALSE;
		}
	
	
	}
}