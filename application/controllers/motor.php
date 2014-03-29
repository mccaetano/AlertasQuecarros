<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Motor extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));	
	}
	
	public function cron() {
		
		$this->load->module('eAlertas');
		$alertas = $this->eAlertas->listaAlertasMotor();
		
		if ($alertas) {
			foreach ($alertas as $alerta) {
				$alerta->dataultimapesuisa = date("Y-m-d H:i:s", time());
				$this->eAlertas->altera($alerta->cod_identificacao, $alerta);
				
				$url = base_url() . 'anuncios/sendmail/' . $alerta->cod_identificacao;
				$this->curl_post_async($url, $alerta);	
			}
		}
	}
	
	
	
	function curl_post_async($url, $params)
	{
		
		foreach ($params as $key => &$val) {
			if (is_array($val)) $val = implode(',', $val);
			$post_params[] = $key.'='.urlencode($val);
		}
		$post_string = implode('&', $post_params);
	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, ‘curl’);
		curl_setopt($ch, CURLOPT_TIMEOUT, 1);
		$result = curl_exec($ch);
		curl_close($ch);
	}
}