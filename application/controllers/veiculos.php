<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculos extends CI_Controller {
	public function marcacombo() {
		
		$this->load->model('eVeiculo');
		$data["marcas"] = $this->eVeiculo->BuscaMarcas();
		$this->load->view('veiculomarcas', $data);
		
	}
	
	public function modelocombo($cd_marca = 0) {
		
		$this->load->model('eVeiculo');		
		$data["modelos"] = $this->eVeiculo->BuscaModelos($cd_marca);		
		$this->load->view('veiculomodelo', $data);
	}
}