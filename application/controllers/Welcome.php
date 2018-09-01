<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_sms');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$x['kec']=$this->m_sms->getTotalKel();
		$x['kel']=$this->m_sms->getTotalTPS();
		$x['kel2']=$this->m_sms->getTotalSuaraKec();
		$x['tps']=$this->m_sms->getTotalDrill();
		$x['hasil']=$this->m_sms->getHasilSuara3();
		$this->load->view('dashboard',$x);
	}
	
	public function getTotalSuaraKec(){
		$x['data']=$this->m_sms->getTotalSuaraKec();
		$x['kandidat']=$this->m_sms->getKandidat();
		$x['kec']=$this->m_sms->getSuaraKec();
		$x['kan']=$this->m_sms->getHasilSuara1();
		$this->load->view('total_suara',$x);
	}
	
	public function getTotalSuaraKel(){
		$id_kec = $this->uri->segment(3);
		$x['kandidat']=$this->m_sms->getKandidat();
		$x['data']=$this->m_sms->getTotalSuaraKel($id_kec);
		$x['kel']=$this->m_sms->getSuaraKel();
		$x['kan']=$this->m_sms->getHasilSuara2();
		$this->load->view('total_suara2',$x);
	}
	
	public function getTotalSuaraTPS(){
		$id_kel = $this->uri->segment(3);
		$id_kec = $this->uri->segment(4);
		$x['data']=$this->m_sms->getTotalSuaraTPS($id_kel);
		$x['kandidat']=$this->m_sms->getKandidat();
		$x['kec']= $id_kec;
		$x['hasil']=$this->m_sms->getHasilSuara();

		$this->load->view('total_suara3',$x);
	}
	
	public function getHasilPerhitungan(){
		$data['grafikPie'] = $this->m_sms->getPieData();
		$data['kandidat'] = $this->m_sms->getKandidat();
		$data['hasil_kandidat'] = $this->m_sms->getHasilSuaraFix();
		$data['dpt'] = $this->m_sms->getDpt();
		$this->load->view('perhitugan_suara',$data);
		}
}
