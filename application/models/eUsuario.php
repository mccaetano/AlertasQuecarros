<?php

class eUsuario extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function adiciona($email, $senha, $recebenws = FALSE) {
		$this->db->trans_begin();
		//$this->db->set('st_usuario', $email);
		$this->db->set('st_email', $email);
		$this->db->set('st_senha', $senha);		
		$retorno = $this->db->insert('wrl_usuarios_querocarros');
		
		$this->db->set('st_email', $email);
		$this->db->set('st_nome', $email);
		$this->db->set('fl_receber', $recebenws);
		$this->db->set('dt_cadastro', date('Y-m-d H:i:s.u', time()));
		$retorno = $this->db->insert('wtb_receber_promocoes');			
		$this->db->trans_commit();
		$this->db->cache_delete_all();
		
		return $retorno;
	}
	
	
	function buscaUsuario($cd_usuario = '') {
		$this->db->from('wrl_usuarios_querocarros');
		$this->db->where('cd_usuario', $cd_usuario);
		$query  = $this->db->get();
	
		$result = $query->result();
		if(count($result) > 0) {
			return $result;
		} else {
			return FALSE;
		}
	
	}
	
	function buscaEmail($email = FALSE) {
		$this->db->from('wrl_usuarios_querocarros');
		$this->db->where('st_email', $email);
		$query  = $this->db->get();
		
		$result = $query->result();
		if(count($result) > 0) {
			return $result;
		} else {
			return FALSE;
		}	
		
	}
	
	function validaUsuario($email = '',  $senha = '') {
		//$senha = base64_encode($senha);
		
		$this->db->select('st_email, st_senha, cd_usuario');
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
		$this->db->trans_begin();
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
		$this->db->trans_commit();
		$this->db->cache_delete_all();
		
		return $retorno;
	}
	
	function alterasenha($email, $senha) {
		$this->db->trans_begin();
		$this->db->set('st_senha', $senha);
		$this->db->where('st_email', $email);
		$retorno = $this->db->update('wrl_usuarios_querocarros');
		$this->db->trans_commit();
		$this->db->cache_delete_all();
		
		return $retorno;
	}
	


	function excluir($cd_usuario = '') {
		$this->db->trans_begin();
		$this->db->where('cd_usuario', $cd_usuario);
		$retorno = $this->db->delete('wrl_usuarios_querocarros');
		$this->db->trans_commit();
		$this->db->cache_delete_all();
		return $retorno;
	
	}
}