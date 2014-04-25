<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anuncios extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
	}
	
	public function sendmail($id) {
		ini_set('memory_limit', '-1');
		ini_set('max_input_time', '3600');
	
		
		$this->load->model('eAnuncios');
		$this->load->model('eAlertas');
		$alerta = $this->eAlertas->buscaAlertaPorId($id);
		$anuncios = $this->eAnuncios->BuscaAnuncios($id);
		
		if ($anuncios) {
			$data['anuncios'] = $anuncios;
			$data['alerta'] = $alerta;
			
			$HTML =  $this->load->view('anuncio_html_view', $data, TRUE);
						
			$this->load->library('email');
			
			$this->email->from('contato@querocarros.com', 'querocarros.com');
			$this->email->to($alerta[0]->email);
			$this->email->subject('Alertas querocarros.com');
			$this->email->message($HTML);
			
			if (!$this->email->send()) {
				echo $this->email->print_debugger();
			} else {		
				echo "envou email para " . $alerta[0]->email;
			}				
		}
		die();
	}
}