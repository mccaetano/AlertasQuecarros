<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form'));
	}
	
	public function index()
	{	
		if(!$this->session->userdata('logged_in')) {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];
			
		$this->load->model('eAlertas');
		$data['email'] = $email;
		$data["alertasLista"] = $this->eAlertas->listaAlertas($email);
		$data["title"] = "Alertas QueCarros";
		
		$this->load->view('templates/header', $data);
		$this->load->view('home_view', $data);
		$this->load->view('templates/footer', $data);
	
	}
	
	public function internal($id = '')
	{
		if ($id == '') {
			redirect('login', 'refresh');
		}
				
		$this->load->model('eUsuario');
		$usuario = $this->eUsuario->buscaUsuario($id);
		if (!$usuario) {
			redirect('login', 'refresh');
		}
		
		$email = $usuario[0]->st_email;
		$sess_array = array(
				'email' => $email
		);
		$this->session->set_userdata('logged_in', $sess_array);
		redirect('home', 'refresh');
		
	}
}
