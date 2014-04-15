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
		$alerta = $this->eAlertas->buscaAlerta($id);
		$anuncios = $this->eAnuncios->BuscaAnuncios($id);
		
		if ($anuncios) {
			$data['anuncios'] = $anuncios;
			$data['alerta'] = $alerta;
			
			$HTML =  $this->load->view('anuncio_html_view', $data, true);
			
			$this->email->from("marcelo.cheruti@gmail.com");
			$this->email->to($alerta->email);
			$this->email->subject('Anuncios Querocarros');
			$this->email->message($HTML);
			$this->email->send();
		}
	}
}