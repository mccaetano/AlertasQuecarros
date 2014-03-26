<?php

class eUsuario extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function adiciona($email, $senha, $recebenws = FALSE) {
		
		//$this->db->set('st_usuario', $email);
		$this->db->set('st_email', $email);
		$this->db->set('st_senha', $senha);		
		$retorno = $this->db->insert('wrl_usuarios_querocarros');
		
		$this->db->set('st_email', $email);
		$this->db->set('st_nome', $email);
		$this->db->set('fl_receber', $recebenws);
		$this->db->set('dt_cadastro', date('Y-m-d H:i:s.u', time()));
		$this->db->insert('wtb_receber_promocoes');			
		
		return $retorno;
	}
	
	function buscaEmail($email = '') {
		$this->db->from('wrl_usuarios_querocarros');
		$this->db->where('st_email', $email);
		$query  = $this->db->get();
		
		$result = $query->result();
		if(count($result) > 0) {
			return $result;
		}		
		
	}
	
	function validaUsuario($email = '',  $senha = '') {
		//$senha = base64_encode($senha);
		
		$this->db->select('st_email, st_senha');
		$this->db->from('wrl_usuarios_querocarros');
		$this->db->where('st_email', $email);
		$this->db->where('st_senha', $senha);
		$query  = $this->db->get();
	
		if($query->num_rows() == 1){
			return $query->result();
		} else {
			return FALSE;
		}
		
		
	}
	
	function alteraemail($email, $newemail) {
	
		//$this->db->set('st_usuario', $email);
		$this->db->set('st_email', $newemail);
		$this->db->where('st_email', $email);
		$retorno = $this->db->update('wrl_usuarios_querocarros');
		
		$this->db->set('st_email', $newemail);
		$this->db->where('st_email', $email);
		$this->db->update('wtb_receber_promocoes');
		
		$this->db->set('email', $newemail);
		$this->db->where('email', $email);
		$this->db->update('wtb_alertas_querocarros');
	
		return $retorno;
	}
	
	function alterasenha($email, $senha) {
	
		$this->db->set('st_senha', $senha);
		$this->db->where('st_email', $email);
		$retorno = $this->db->update('wrl_usuarios_querocarros');
	
		return $retorno;
	}
}