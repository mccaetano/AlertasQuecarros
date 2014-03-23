<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alertas extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form'));
	}
	
	public function novo() {
		if(!$this->session->userdata('logged_in')) {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];
		
		$data["email"] = $email;
		$data["title"] = "Alertas QueCarros";
		$this->load->view('templates/header', $data);
		$this->load->view('alertas_novo_view');
		$this->load->view('templates/footer', $data);
	}
	
	public function edita($id) {
		if(!$this->session->userdata('logged_in')) {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];
		
				
		$this->load->model('eVeiculo');
		$this->load->model('eAlertas');
		$data["title"] = "Alertas QueCarros";
		$data["marcas"] = $this->eVeiculo->BuscaMarcas();
		$data["email"] = $email;
		$data["alerta"] = $this->eAlertas->buscaAlerta($id);
		
		$this->load->view('templates/header', $data);
		$this->load->view('alertas_edita_view', $data);
		$this->load->view('templates/footer', $data);
		
	}
	
	public function adiciona() {
		if(!$this->session->userdata('logged_in')) {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];
		
		
		
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
			'email'=>$email
		);
		$return = $this->eAlertas->adiciona($alerta);
		if (!$return) {
			redirect(base_url() ."alertas/novo");
		} else {
			$this->db->cache_delete('home', 'index');
			redirect('home', 'refresh');
		}
	}
}