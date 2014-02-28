<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadalertas extends CI_Controller {
	public function index() {
		$data["title"] = "Alertas QueCarros";
		//$data["customcss"] = "<link href=\"" . base_url() . "assets/css/signin.css\" rel=\"stylesheet\">";
		$this->load->view('templates/header', $data);
		$this->load->view('cadalertas');
		$this->load->view('templates/footer', $data);
	}
}