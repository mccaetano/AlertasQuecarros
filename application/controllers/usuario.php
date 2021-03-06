<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	public function barra() {	
		$this->load->view('usuario_novo_barra');
	}
	
	public function novo() {
		$email =  $this->input->post('iEmail');
				
		$data["title"] = "Alertas QueCarros";
		$data["email"] = $email;
		$this->load->view('templates/header', $data);
		$this->load->view('usuario_novo_view', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function alteraemail() {
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('iNewEmail', 'Email', 'trim|required|xss_clean|valid_email|callback_checa_email_cadastrado');
		
		if($this->form_validation->run() == FALSE)	{
			$data["title"] = "Alertas QueCarros";
			$data["email"] = $email;
			$this->load->view('templates/header', $data);
			$this->load->view('login_altera_email_view', $data);
			$this->load->view('templates/footer', $data);
		} else 	{
			$newemail =  $this->input->post('iNewEmail');
			$this->load->model('eUsuario');
			$this->eUsuario->alteraemail($email, $newemail);
			
			$this->session->sess_destroy();
			redirect('home', 'refresh');
		}
	}
	
	public function alterasenha() {
		$session_data = $this->session->userdata('logged_in');
		$email = $session_data['email'];
		$cd_usuario = $session_data['cd_usuario'];
	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('iSenha', 'Senha', 'trim|required|xss_clean|max_length[10]|matches[iSenhaRep]');
		$this->form_validation->set_rules('iSenhaRep', 'Repetir Senha', 'trim|required|xss_clean|max_length[10]');
		
		if($this->form_validation->run() == FALSE)	{
			$data["title"] = "Alertas QueCarros";
			$data["email"] = $email;
			$data["cd_usuario"] = $cd_usuario;
			$this->load->view('templates/header', $data);
			$this->load->view('login_altera_senha_view', $data);
			$this->load->view('templates/footer', $data);
		} else 	{
			$senha =  $this->input->post('iSenha');
			$this->load->model('eUsuario');
			$this->eUsuario->alterasenha($email, $senha);
				
			$this->session->sess_destroy();
			redirect('home', 'refresh');
		}
	}
	
	function checa_email_cadastrado($email) {
		$this->load->model('eUsuario');
		$usuarioData = $this->eUsuario->buscaEmail($email);
		if ($usuarioData) {
			$this->form_validation->set_message('checa_email_cadastrado', 'Email já cadastrado');
			return FALSE;
		}
		return TRUE;
	}
	
	
	public function adicionar() {
	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('iEmail', 'Email', 'trim|required|xss_clean|valid_email|callback_checa_email_cadastrado');
		$this->form_validation->set_rules('iSenha', 'Senha', 'trim|required|xss_clean|max_length[10]|matches[iRepSenha]');
		$this->form_validation->set_rules('iRepSenha', 'Repetir Senha', 'trim|required|xss_clean|max_length[10]');
		$this->form_validation->set_rules('iAcc[]', 'Li e Concordo com o termo', 'required');
		
		if($this->form_validation->run() == FALSE)	{
			$this->novo();
		} else 	{
			$email =  $this->input->post('iEmail');
			$senha = $this->input->post('iSenha');
			$news = $this->input->post('iNews') == "on" ? TRUE : FALSE;
			
			$this->load->model('eUsuario');
			$this->eUsuario->adiciona($email, $senha, $news);
			
			$this->load->model('eUsuario');
			$usuarioData = $this->eUsuario->buscaEmail($email);
			
			$sess_array = array(
					'email' => $email,
					'cd_usuario' => $usuarioData[0]->cd_usuario
			);
			$this->session->set_userdata('logged_in', $sess_array);
			
			
			redirect("home", "refresh");			
		}
	}
	
	public function recupera() {
		
		$data["title"] = "Alertas QueCarros";
		$data["email"] = FALSE;
		$data["mensagem"] = FALSE;
		$this->load->view('templates/header', $data);
		$this->load->view('usuario_envia_senha.php', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function enviaemail() {
		$email =  $this->input->post('iEmail');

		$this->load->model('eUsuario');
		
		$usuario = $this->eUsuario->buscaEmail($email);
		
		$data['usuario'] = FALSE;
		if ($usuario) {
			$data['usuario'] = $usuario[0];
			
			$HTML =  $this->load->view('usuario_email_recupera', $data, TRUE);
			
			$this->load->library('email');
				
			$this->email->from('contato@querocarros.com', 'querocarros.com');
			$this->email->to($email);
			$this->email->subject('Recuperar senha do alerta QueroCarros.com');
			$this->email->message($HTML);
				
			if (!$this->email->send()) {
				$data["mensagem"] = $this->email->print_debugger();
			} else {
				$data["mensagem"] = 'Email enviado com sucesso, confira sua caixa postal e entre novamnte no Querocarros.com';
			}
			$data["title"] = "Alertas QueCarros";
			$data["email"] = $email;			
			$this->load->view('templates/header', $data);
			$this->load->view('usuario_envia_senha.php', $data);
			$this->load->view('templates/footer', $data);
		} else 	{
			$data["title"] = "Alertas QueCarros";
			$data["email"] = $email;
			$data["mensagem"] = 'Email não cadastrado no QueroCarros.com';
			$this->load->view('templates/header', $data);
			$this->load->view('usuario_envia_senha.php', $data);
			$this->load->view('templates/footer', $data);
		}
	}
	
	function cancelaremail($cd_usuario = FALSE) {
		
		if ($cd_usuario === FALSE) {
			$data["title"] = "Alertas QueCarros";
			$data["email"] = "";
			$data['cd_usuario'] = FALSE;
			$data["mensagem"] = 'Email não informado no QueroCarros.com';
			$this->load->view('templates/header', $data);
			$this->load->view('alertas_cancelar', $data);
			$this->load->view('templates/footer', $data);
			return FALSE;
		}
		
		$this->load->model('eUsuario');
		$usuario = $this->eUsuario->buscaUsuario($cd_usuario);
				
		if ($usuario) {
			$email =  $usuario[0]->st_email;
			$cd_usuario = $usuario[0]->cd_usuario;
			
			$this->load->model('eAlertas');
			$alertas = $this->eAlertas->listaAlertas($email);
			if ($alertas) {
				foreach ($alertas as $alerta) {
					$cod_identificacao = $alerta->cod_identificacao;
					$this->eAlertas->exclui($cod_identificacao);
				}
			}
			$cd_usuario= $usuario[0]->cd_usuario;
			$this->eUsuario->excluir($cd_usuario);
			
			$this->db->cache_delete('home', 'index');
			$this->db->cache_delete('usuario', 'cancelaremail');
			$this->db->cache_delete('login', 'validate');
			$this->session->sess_destroy();
			
			$data["title"] = "Alertas QueCarros";
			$data["email"] = FALSE;
			$data['cd_usuario'] = FALSE;
			$data["mensagem"] = "Email $email cancelado com sucesso no QueroCarros.com";
			$this->load->view('templates/header', $data);
			$this->load->view('alertas_cancelar', $data);
			$this->load->view('templates/footer', $data);
			return FALSE;
		} else {
			$data["title"] = "Alertas QueCarros";
			$data["email"] = FALSE;
			$data['cd_usuario'] = FALSE;
			$data["mensagem"] = 'Email não cadastrado no QueroCarros.com';
			$this->load->view('templates/header', $data);
			$this->load->view('alertas_cancelar', $data);
			$this->load->view('templates/footer', $data);
			return FALSE;
		}
	}
}