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
		
		$this->load->model('eVeiculo');
		
		$data["title"] = "Alertas QueCarros";
		$data["marcas"] = $this->eVeiculo->BuscaMarcas();
		$data["modelos"] = $this->eVeiculo->BuscaModelos($data["marcas"][0]->cd_marca);
		
		$this->load->view('templates/header', $data);
		$this->load->view('editalertas');
		$this->load->view('templates/footer', $data);
	}
	
	public function adiciona() {
	
		$this->load->model('eAlertas');
		
		$alerta = array(
			'titulo'=>$_POST["inewalert"],
			'precoDe'=>0,
			'precoAte'=>0,
			'anoDe'=>0,
			'anoAte'=>0,
			'numeroPortasDe'=>0,
			'numeroPortasAte'=>0,
			'quilometragemDe'=>0,
			'quilometragemAte'=>0,
			'marca'=>0,
			'modelo'=>0,
			'cidade'=>0,
			'estado'=>0,
			'fotos'=>0,
			'tipocombustivel'=>0,
			'transmissao'=>0,
			'tipo'=>0,
			'frequencia'=>0,
			'precoReduzido'=>0,
			'email'=>"marcelo.cheruti@gmail.com"
		);
		$return = $this->eAlertas->adiciona($alerta);
		if (!$return) {
			redirect(base_url() ."alertas/novo");
		} else {
			redirect(base_url());
		}
	}
}