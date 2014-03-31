<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Veiculos extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form'));
	}
	public function marcacombo($selectedvalue = 0) {
		
		$this->load->model('eVeiculo');
		$data["marcas"] = $this->eVeiculo->BuscaMarcas();
		$data["selectedvalue"] = $selectedvalue;
		$this->load->view('veiculo_marcas_view', $data);
		
	}
	
	public function modelocombo($cd_marca = 0, $selectedvalue = 0) {
		log_message('debug', 'Marca: ' . $cd_marca);
		$this->load->model('eVeiculo');		
		$data["modelos"] = $this->eVeiculo->BuscaModelos($cd_marca);	
		$data["selectedvalue"] = $selectedvalue;	
		$this->load->view('veiculo_modelo_view', $data);
	}
	
	public function cambiocombo($selectedvalue = 0) {
	
		$this->load->model('eVeiculo');
		$data["cambios"] = $this->eVeiculo->BuscaCambios();
		$data["selectedvalue"] = $selectedvalue;
		$this->load->view('veiculo_cambios_view', $data);
	
	}
}