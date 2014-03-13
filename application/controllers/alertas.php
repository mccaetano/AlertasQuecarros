<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alertas extends CI_Controller {
	public function novo() {
		$data["title"] = "Alertas QueCarros";
		//$data["customcss"] = "<link href=\"" . base_url() . "assets/css/signin.css\" rel=\"stylesheet\">";
		$this->load->view('templates/header', $data);
		$this->load->view('cadalertas');
		$this->load->view('templates/footer', $data);
	}
	
	public function edita() {
		
		$this->load->model('Veiculo');
		
		$data["title"] = "Alertas QueCarros";
		$data["marcas"] = $this->Veiculo->BuscaMarcas();
		$data["modelos"] = $this->Veiculo->BuscaModelos($data["marcas"][0]->cd_marca);
		
		$this->load->view('templates/header', $data);
		$this->load->view('editalertas');
		$this->load->view('templates/footer', $data);
	}
}