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
		$query  = $this->db->query("select * from wrl_usuarios_querocarros where email = '$email'");
		
		$result = $query->result();
		if(count($result) > 0){
			return $result;
		}		
		
	}
	
	function validaUsuario($email = '',  $senha = '') {
		$senha = base64_encode($senha);
		
		$this->db->cache_on();
		$query  = $this->db->query("select * from wrl_usuarios_querocarros where email = '$email' and senha = '$senha'");
	
		$result = $query->result();
		if(count($result) > 0){
			return TRUE;
		} else {
			return FALSE;
		}
		
		
	}
}