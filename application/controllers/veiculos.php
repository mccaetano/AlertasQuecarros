<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculos extends CI_Controller {
	public function marcacombo() {
		
		$this->load->model('Veiculo');
		$data["marcas"] = $this->Veiculo->BuscaMarcas();
		$this->load->view('veiculomarcas', $data);
		
	}
	
	public function modelocombo($cd_marca = 0) {
		
		$this->load->model('Veiculo');		
		$data["modelos"] = $this->Veiculo->BuscaModelos($cd_marca);		
		$this->load->view('veiculomodelo', $data);
	}
}