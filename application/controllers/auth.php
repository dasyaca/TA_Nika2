<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function index() {
		$this->load->view('index');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function aksi_login() {
		$this->load->model('m_admin');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => $password
				);
	$cek = $this->m_admin->getData("user",$where)->num_rows();
	if($cek > 0){
 
		$data_session = array(
			'username' => $username,
			'status' => "login"
			);
 
		$this->session->set_userdata($data_session);
		redirect('c_admin');
		
	}else{
		redirect('auth');
	}
	}
	
	public function aksi_logout() {
		$this->session->unset_userdata('username');
		session_destroy();
		redirect('auth');
	}

	
}

?>
