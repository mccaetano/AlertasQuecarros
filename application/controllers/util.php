<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Util extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url', 'cache'));
	}
	
	public function clearcache() {
		$this->cache->clean();
		
		redirect("home", "Refresh");
	}
}