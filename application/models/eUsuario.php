<?php

class eUsuario extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function adiciona($email, $senha, $recebenws = FALSE) {
		
		$usuario = array(
			"st_usuario"=>$email,
			"st_email"=>$email,
			"st_senha"=>$senha);
		
		$this->db->insert('wrl_usuarios_querocarros', $usuario);
		
		
		$news = array(
				"st_email"=>$email,
				"st_nome"=>$email,
				"fl_receber"=>$recebenws,
				"dt_cadastro"=>date('Y-m-d H:i:s.u', time())
		);
		$this->db->insert('wtb_receber_promocoes', $news);
	}
}