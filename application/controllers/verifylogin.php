<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('eUsuario', '', TRUE);
	}
	
	function index() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('iEmail', 'iEmail', 'trim|required|xss_clean');
		$this->form_validation->set_rules('iSenha', 'iSenha', 'trim|required|xss_clean|callback_check_database');
		
		if($this->form_validation->run() == FALSE) 	{
			//Field validation failed.  User redirected to login page
			$this->load->view('usuario/login');
		} else {
			//Go to private area
			redirect('home', 'refresh');
		}		
	}
	
	function check_database($password)	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('iEmail');
	
		//query the database
		$result = $this->eUsuario->validaUsuario($username, $password);
	
		if($result)	{
			$sess_array = array();
			foreach($result as $row) {
				$sess_array = array(
					'id' => $row->id,
					'email' => $row->email
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		} else 	{
			$this->form_validation->set_message('check_database', 'Email e senha inválidos');
			return false;
		}
	}	
}