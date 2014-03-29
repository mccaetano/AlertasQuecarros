<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anuncios extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper(array('url,', 'form', 'email'));
	}
	
	public function sendmail($id) {
			
		$this->load->model('eAnuncio');
		
		$data['email'] = $email;
		$data['anuncios'] = $this->eAnuncio->BuscaAnuncios($id);
		
		$HTML = $this->load->view('anuncio_html_view', $data, TRUE);
		
		send_email($email, 'Anuncios Querocarros', $HTML);
		
	}
}