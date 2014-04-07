<?php
class eAlertas extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function adiciona($alerta) {
		$this->db->trans_begin();
		$mail = $alerta['email'];
		$this->db->set('titulo', $alerta['titulo']);
		$this->db->set('email', $mail);
		$return = $this->db->insert('wtb_alertas_querocarros');
		if ($return) {
			$return = $this->db->query("select max(cod_identificacao) as insert_id from wtb_alertas_querocarros where email = '$mail'")->result();			
			$this->db->trans_commit();
		}
		else {
			$this->db->trans_rollback();
			$return = FALSE;
		}
		
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