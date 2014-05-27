<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Anuncios extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
	}
	
	public function sendmail($id) {
		ini_set('memory_limit', '-1');
		ini_set('max_input_time', '3600');
		setlocale (LC_ALL, 'pt_BR');
		ini_set('mssql.charset', 'utf-8');
	
		
		$this->load->model('eAnuncios');
		$this->load->model('eAlertas');
		$this->load->model('eUsuario');
		$alerta = $this->eAlertas->buscaAlertaPorId($id);
		$anuncios = $this->eAnuncios->BuscaAnuncios($id);
		
		$email = $alerta[0]->email;
		$usuario = $this->eUsuario->buscaEmail($email);
		
		
		if ($anuncios) {
			$data['anuncios'] = $anuncios;
			$data['alerta'] = $alerta;
			$data['usuario'] = $usuario;
			
			$HTML =  $this->load->view('anuncio_html_view', $data, TRUE);
						
			$this->load->library('email');
			
			$this->email->from('contato@querocarros.com', 'querocarros.com');
			$this->email->to($email);
			$frequencia = $alerta[0]->frequencia = 1 ? "Diário" : "Semanal";
			$this->email->subject('Seu alerta '  . $frequencia . ' (' . $alerta[0]->titulo . ') de veículos QueroCarros.com');
			$this->email->message($HTML);
			
			if (!$this->email->send()) {
				echo $this->email->print_debugger();
			} else {		
				echo "envou email para " . $email;
			}	
			echo $HTML;			
		} else {
			echo "Não encontrou anuncio para email " . $email;
		}
		//die(); 
	}
}
