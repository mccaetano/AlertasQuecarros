<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->load->helper(array('form'));
		
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
							
			$this->load->model('eAlertas');
			$data["alertasLista"] = $this->eAlertas->listaAlertas();
			$data["title"] = "Alertas QueCarros";
			$data['email'] = $session_data['email'];
			$this->load->view('templates/header', $data);
			$this->load->view('home', $data);
			$this->load->view('templates/footer', $data);
		} else { 
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}		

	}
}
