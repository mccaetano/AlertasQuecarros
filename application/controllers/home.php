<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('eAlertas');
		$data["alertasLista"] = $this->eAlertas->listaAlertas();
		$data["title"] = "Alertas QueCarros";
		$data["customcss"] = "";
		$this->load->view('templates/header', $data);
		$this->load->view('home', $data);
		$this->load->view('templates/footer', $data);

	}
}
