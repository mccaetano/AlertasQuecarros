<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
		
	public function novo() {
		$data["title"] = "Alertas QueCarros";
		$this->load->view('templates/header', $data);
		$this->load->view('caduser');
		$this->load->view('templates/footer', $data);
	}
	
	public function adicionar() {
		$email = isset($_POST['iEmail']) ? $_POST['iEmail'] : "";
		$senha = isset($_POST['iSenha']) ? $_POST['iSenha'] : "";
		$news = isset($_POST['iNews']) ? TRUE : FALSE;
		
		$this->load->model('eUsuario');
		$this->eUsuario->adiciona($email, $senha, $news);
		index_page();
		
	}
}