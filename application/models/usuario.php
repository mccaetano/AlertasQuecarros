<?php

class Usuario extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function adiciona($usuario) {
		$this->db->insert('dbo.wbt_usuario', $usuario);
	}
	
	function adiciona($usuario) {
		$this->db->insert('dbo.wbt_usuario', $usuario);
	}
}