<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anuncios extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper(array('url,', 'form', 'mail'));
	}
	
	public function sendmail($id) {
		
	}
}