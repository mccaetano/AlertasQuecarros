<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anuncios extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form', 'email'));
	}
	
	public function sendmail($id) {
			
		$this->load->model('eAnuncios');
		
		log_message('debug', 'Passou aqui:' . PHP_EOL . $id);
		$data['anuncios'] = array(''); //$this->eAnuncios->BuscaAnuncios($id);
		
		$HTML = $this->load->view('anuncio_html_view', $data, true);
		send_email($email, 'Anuncios Querocarros', $HTML);
		
	}
}