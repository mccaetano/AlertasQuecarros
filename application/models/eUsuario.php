<?php

class eUsuario extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function adiciona($email, $senha, $recebenws = FALSE) {
		
		$this->db->set('st_usuario', $email);
		$this->db->set('st_email', $email);
		$this->db->set('st_senha', base64_encode($senha));
		
		$retorno = $this->db->insert('wrl_usuarios_querocarros');
		
		
		$news = array(
				"st_email"=>$email,
				"st_nome"=>$email,
				"fl_receber"=>$recebenws,
				"dt_cadastro"=>date('Y-m-d H:i:s.u', time())
		);
		$this->db->insert('wtb_receber_promocoes', $news);			
		
		return $retorno;
	}
	
	function buscaEmail($email = '') {
		$this->db->cache_on();
		$this->db->from('wrl_usuarios_querocarros');
		$this->db->where('st_email', $email);
		$query  = $this->db->get();
		
		$result = $query->result();
		if(count($result) > 0) {
			return $result;
		}		
		
	}
	
	function validaUsuario($email = '',  $senha = '') {
		$senha = base64_encode($senha);
		
		$this->db->cache_on();
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
}