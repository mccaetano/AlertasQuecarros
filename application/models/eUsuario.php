<?php

class eUsuario extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function adiciona($email, $senha, $recebenws = FALSE) {
		
		try {
			$usuarioData = $this->buscaEmail($email); 
			if (!$usuarioData) {
				throw new Exception("Usuário já cadastrado");			
			}		
		
			$usuario = array(
				"st_usuario"=>$email,
				"st_email"=>$email,
				"st_senha"=>base64_encode($senha));
			
			$this->db->insert('wrl_usuarios_querocarros', $usuario);
			
			
			$news = array(
					"st_email"=>$email,
					"st_nome"=>$email,
					"fl_receber"=>$recebenws,
					"dt_cadastro"=>date('Y-m-d H:i:s.u', time())
			);
			$this->db->insert('wtb_receber_promocoes', $news);
			
		} catch (Exception $e) {
			throw  new RuntimeException($e->getMessage());
		} 
	}
	
	function buscaEmail($email = '') {
		$this->db->cache_on();
		$this->db->from('wrl_usuarios_querocarros');
		$this->db->where('email', $email);
		$query  = $this->db->get();
		
		$result = $query->result();
		if(count($result) > 0) {
			return $result;
		}		
		
	}
	
	function validaUsuario($email = '',  $senha = '') {
		$senha = base64_encode($senha);
		
		$this->db->cache_on();
		$this->db->select('email. senha');
		$this->db->from('wrl_usuarios_querocarros');
		$this->db->where('email', $email);
		$this->db->where('senha', $senha);
		$query  = $this->db->get();
	
		if($query->num_rows() == 1){
			return $query->result();
		} else {
			return FALSE;
		}
		
		
	}
}