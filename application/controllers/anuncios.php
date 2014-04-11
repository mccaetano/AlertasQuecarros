<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anuncios extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form', 'email'));
	}
	
	public function sendmail($id) {
			
		$this->load->model('eAnuncios');
		
		$anuncios = $this->eAnuncios->BuscaAnuncios($id);
		$data['anuncios'] = $anuncios;
		
		$HTML = $this->load->view('anuncio_html_view', $data, true);
		send_email($anuncios[0]->email, 'Anuncios Querocarros', $HTML);
		
	}
}