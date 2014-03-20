<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		$this->load->helper(array('form'));
		
		$data["title"] = "Alertas QueCarros";
		$this->load->view('templates/header', $data);
		$this->load->view('login_view');
		$this->load->view('templates/footer', $data);
	}
	
}
