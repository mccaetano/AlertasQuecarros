<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {
	public function login() {
		$data["title"] = "Alertas QueCarros";
		$data["customcss"] = "<link href=\"" . base_url() . "assets/css/signin.css\" rel=\"stylesheet\">";
		$this->load->view('templates/header', $data);
		$this->load->view('login');
		$this->load->view('templates/footer', $data);
	}
	
	public function novo() {
		$data["title"] = "Alertas QueCarros";
		//$data["customcss"] = "<link href=\"" . base_url() . "assets/css/signin.css\" rel=\"stylesheet\">";
		$this->load->view('templates/header', $data);
		$this->load->view('caduser');
		$this->load->view('templates/footer', $data);
	}
}