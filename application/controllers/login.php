<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('eUsuario', '', TRUE);
		$this->load->helper(array('form', 'url'));
	}
	
	function index() {
		if(!$this->session->userdata('logged_in')) {
			$data["title"] = "Alertas QueCarros";
			$this->load->view('templates/header', $data);
			$this->load->view('login_view');
			$this->load->view('templates/footer', $data);
			return;
		}
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];

		redirect('home', 'refresh');
		/*
		
		$this->load->model('eAlertas');
		$data["alertasLista"] = $this->eAlertas->listaAlertas($email);
		$data["title"] = "Alertas QueCarros";
		$data['email'] = $session_data['email'];
		$this->load->view('templates/header', $data);
		$this->load->view('home_view', $data);
		$this->load->view('templates/footer', $data);
		*/
		
	}
	
	function validate() {
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('iloginEmail', 'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('iloginSenha', 'Senha', 'trim|required|xss_clean|callback_check_database');
				
		if($this->form_validation->run() == FALSE)	{
			$this->index();			
		} else 	{
			redirect('home', 'refresh');
		}
	}
	
	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('iloginEmail');

		//query the database
		$result = $this->eUsuario->validaUsuario($username, $password);
	
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
				{
					$sess_array = array(
							'email' => $row->st_email
					);
					$this->session->set_userdata('logged_in', $sess_array);
				}
				return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Email ou Senha inválidos');
			return false;
		}
	}
	
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('home', 'refresh');
	}
	
	function alteraemail() {
		if(!$this->session->userdata('logged_in')) {
			$data["title"] = "Alertas QueCarros";
			$this->load->view('templates/header', $data);
			$this->load->view('login_view');
			$this->load->view('templates/footer', $data);
			return;
		}
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];

		$data["title"] = "Alertas QueCarros";
		$data["email"] = $email;
		$this->load->view('templates/header', $data);
		$this->load->view('login_altera_email_view', $data);
		$this->load->view('templates/footer', $data);
	}
	
	
}
