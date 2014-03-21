<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	public function novo() {
		
		
		$data["title"] = "Alertas QueCarros";
		$this->load->view('templates/header', $data);
		$this->load->view('usuario_novo_view');
		$this->load->view('templates/footer', $data);
	}
	
	public function adicionar() {
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('iEmail', 'Email', 'trim|required|xss_clean|valid_email|callback_checa_email_cadastrado');
		$this->form_validation->set_rules('iSenha', 'Senha', 'trim|required|xss_clean|matches[iRepSenha]');
		$this->form_validation->set_rules('iRepSenha', 'Repetir Senha', 'trim|required|xss_clean');
		
		if($this->form_validation->run() == FALSE)	{
			$this->novo();
		} else 	{
			$email =  $this->input->post('iEmail');
			$senha = $this->input->post('iSenha');
			$news = $this->input->post('iNews') == "on" ? TRUE : FALSE;
			$this->load->model('eUsuario');
			$this->eUsuario->adiciona($email, $senha, $news);
			redirect("home", "refresh");
		}
	}
	
	function checa_email_cadastrado($email) {
		$this->load->model('eUsuario');
		$usuarioData = $this->eUsuario->buscaEmail($email);
		if (!is_null($usuarioData)) {
			$this->form_validation->set_message('checa_email_cadastrado', 'Email já cadastrado');
			return FALSE;
		}
		return TRUE;
	}
}