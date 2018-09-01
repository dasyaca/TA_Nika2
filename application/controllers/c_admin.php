<?php
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('username') == null){
			redirect('auth');
		}
			$this->load->model('m_sms');
	}

	public function index() {
		$x['kec']=$this->m_sms->getTotalKel();
		$x['kel']=$this->m_sms->getTotalTPS();
		$x['kel2']=$this->m_sms->getTotalSuaraKec();
		$x['tps']=$this->m_sms->getTotalDrill();
		$x['hasil']=$this->m_sms->getHasilSuara3();
		$this->load->view('dashboard',$x);
	}
	

	public function logout() {
		$this->session->unset_userdata('username');
		session_destroy();
		redirect('auth');
	}

}
?>