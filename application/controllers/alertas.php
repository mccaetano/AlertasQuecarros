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
		$cd_usuario = $session_data['cd_usuario'];
		
		$data["email"] = $email;		
		$data['cd_usuario'] = $cd_usuario;
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
		$cd_usuario = $session_data['cd_usuario'];
		
				
		$this->load->model('eVeiculo');
		$this->load->model('eAlertas');
		$data["title"] = "Alertas QueCarros";
		//$data["marcas"] = $this->eVeiculo->BuscaMarcas();
		$data["email"] = $email;
		$data['cd_usuario'] = $cd_usuario;
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
		$cd_usuario = $session_data['cd_usuario'];
		
		
		
		$this->load->model('eAlertas');
		
		$alerta = array(
			'titulo'=>$this->input->post("inewalert"),
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
			'cidade'=>'',
			'estado'=>'',
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
			$this->db->cache_delete('alertas', 'edita');
			$insertID = $return[0]->insert_id;
			redirect("alertas/edita/$insertID", 'refresh');
		}
	}
	
	public function altera() {
		if(!$this->session->userdata('logged_in')) {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];
		$cd_usuario = $session_data['cd_usuario'];
	
	
	
		$this->load->model('eAlertas');
		$cod_identificacao = $this->input->post('iID');
		$alerta = array(
				'titulo'=>$this->input->post('iTitulo'),
				'precoDe'=>$this->input->post('iPrecoDe'),
				'precoAte'=>$this->input->post('iPrecoAte'),
				'anoDe'=>$this->input->post('iAnoDe'),
				'anoAte'=>$this->input->post('iAnoAte'),
				'numeroPortasDe'=>$this->input->post('iNumeroPortasDe'),
				'numeroPortasAte'=>$this->input->post('iNumeroPortasAte'),
				'quilometragemDe'=>$this->input->post('iQuilometragemDe'),
				'quilometragemAte'=>$this->input->post('iQuilometragemAte'),
				'marca'=>$this->input->post('iMarca'),
				'modelo'=>$this->input->post('iModelo'),
				'cidade'=>$this->input->post('iCidade'),
				'estado'=>$this->input->post('iEstado'),
				'fotos'=>$this->input->post('iFotos'),
				'tipocombustivel'=>$this->input->post('iTipoCombustivel'),
				'transmissao'=>$this->input->post('iTransmissao'),
				'tipo'=>$this->input->post('iTipo'),
				'frequencia'=>$this->input->post('iTipoAgendamento'),
				'precoReduzido'=>($this->input->post('iPrecoReduzido') == "on" ? 0 : 1),
				'email'=>$email
		);
		$return = $this->eAlertas->altera($cod_identificacao, $alerta);
		$this->db->cache_delete('home', 'index');
		$this->db->cache_delete('alertas', 'edita');
		redirect('home', 'refresh');
	}
	
	public function cancela($cod_identificacao) {
		if(!$this->session->userdata('logged_in')) {
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];
		$cd_usuario = $session_data['cd_usuario'];
	
	
		$this->load->model('eAlertas');
		$return = $this->eAlertas->exclui($cod_identificacao);
		$this->db->cache_delete('home', 'index');
		$this->db->cache_delete('alertas', 'edita');
		
		
		redirect('home', 'refresh');
	}
}