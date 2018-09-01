<?php
class C_sms extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('username') == null){
			redirect('auth');
		}
		$this->load->model('m_sms');
	}

	public function daftar_notelp() {
		$x['data']=$this->m_sms->getNoTelp();
        $this->load->view('daftar_notelp',$x);
		
	}

	// dijalankan saat kecamatan di klik
	
	public function edit_nope() {
		$id = $this->uri->segment(3);
		$z['id_tps']=$this->uri->segment(4);
		$z['no_telp']="0";
		$table="no_telp";
		
		if(empty($id)){
			$query=$this->m_sms->insertNope($table,$z);
			$query1=$this->m_sms->getIdNoTelp();
			foreach($query1->result_array() AS $row) {
			$id= $row['id_notelp'];
			}
			$data['hasil'] = $this->m_sms->getNoEdit($id);
			$this->load->view('edit_nope',$data);
		}
		else{
			$data['hasil'] = $this->m_sms->getNoEdit($id);
			$this->load->view('edit_nope',$data);
		}
	}
	
	public function aksi_edit() {
		$id = $this->input->post('id_notelp');
		$nope = $this->input->post('notelp');
		$x['data']=$this->m_sms->getNoTelp();
	
	$edit = $this->m_sms->editNope($id, $nope);
	$x['data']=$this->m_sms->getNoTelp();
	if ($edit) {
		echo"<script>alert('Data Berhasil Diedit');</script>";
		 $this->load->view('daftar_notelp',$x);
	} else {
		echo"<script>alert('Data GAGAL Diedit');</script>";
		 $this->load->view('daftar_notelp', $x);
	}
	}
	
	public function getKandidat() {
		$x['data']=$this->m_sms->getKandidat();
        $this->load->view('daftar_kandidat',$x);
	}
	
	public function edit_kandidat() {
		$id = $this->uri->segment(3);
		$data['query'] = $this->m_sms->getKandidatBy($id);
		$this->load->view('edit_kandidat',$data);
	}
	
	public function aksi_edit_kandidat() {
		$id = $this->input->post('id_calon');
		$no = $this->input->post('no_urut');
		$nama_calon = $this->input->post('nama_calon');
		$nama_wakil_calon = $this->input->post('nama_wakil_calon');
		
	$edit = $this->m_sms->editKandidat($id, $no, $nama_calon, $nama_wakil_calon);
	$x['data']=$this->m_sms->getKandidat();
	if ($edit) {
		echo"<script>alert('Data Berhasil Diedit');</script>";
		 $this->load->view('daftar_kandidat',$x);
	} else {
		echo"<script>alert('Data GAGAL Diedit');</script>";
		 $this->load->view('daftar_kandidat', $x);
	}
	}
	
	public function edit_foto() {
		$id = $this->uri->segment(3);
		$data['query'] = $this->m_sms->getKandidatBy($id);
		$this->load->view('edit_foto',$data);
	}
	
	public function aksi_edit_foto() {
		$id = $this->input->post('id_calon');
		$foto = $this->input->post('foto');
		$error="";
		$upload_data='';
		
		$fileName = $this->input->post('foto');
		$filePath = './assets/images/';
		$config['upload_path'] = $filePath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = true;

		$this->upload->initialize($config);

		if (!empty($_FILES['foto'])) {

		  if (!$this->upload->do_upload('foto')) {

			   $error="gagal";

		  } else {

			   $upload_data = $this->upload->data();
			     $error="sukses";

		  }
		}
		else{
			echo "empty";
		}
		
	$nama=$upload_data['file_name'];
	$edit = $this->m_sms->editFoto($id, $nama);
	$x['data']=$this->m_sms->getKandidat();
	if ($error=="sukses" AND $edit) {
		echo"<script>alert('Data Berhasil Diedit');</script>";
		 $this->load->view('daftar_kandidat',$x);
	} else {
		echo"<script>alert('Data GAGAL Diedit');</script>";
		 $this->load->view('daftar_kandidat', $x);
	}
	}
	
	public function getInbox() {
		
	include "assets/vendor/autoload.php";
		
	$array_fields['status'] = '';
	$array_fields['device_id'] = 100281; //id smsgateway

	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzNTU0OTA5MiwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjU4NzA3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.akNX5Qv3s6Gtl6V3nQD9rQQOC4TRIGQ8S6QWidqOtoY"; //token smsgateway

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://smsgateway.me/api/v4/message/search",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 1000,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "[  " . json_encode($array_fields) . "]",
		CURLOPT_HTTPHEADER => array(
			"authorization: $token",
			"cache-control: no-cache"
		),
	));
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	/*if ($err) {
		echo "cURL Error #:" . $err;
	} else {
		print_r($response);
	}*/
		
		$data = array();
		//$hasil=array();
		$data['data'] = json_decode($response);
		$hasil['x']=json_decode($response); //
		$table="inbox";
	
		
		foreach($hasil['x']->results as $i) { //looping manggil data ke server
			$id=$i->id; 
			$data2['id_pesan']= $i->id;
			$data2['no_telp']= $i->phone_number;
			$phone=$data2['no_telp'];
			$data2['pesan']= $i->message;
			$pesan=$data2['pesan']= $i->message;
			$data2['status']= $i->status;
			foreach($i->log as $obj){
				$data2['date']= $obj->occurred_at;
			}
			$dim = array('no_telp' => $phone); 
			$cek_phone = $this->m_sms->getData("no_telp",$dim)->num_rows();
			$cek_phoneTS = $this->m_sms->getIdNoTelpOne($phone)->result_array();
			$cek_phoneTS2 = $this->m_sms->getNoInTS()->result_array();
			$aidi="";
			foreach($cek_phoneTS AS $i) { //
						$aidi= $i['id_notelp'];
			}
			
			if($data2['status']=="received" and substr($data2['no_telp'],0,4)=="+628" and preg_match("/#/", $pesan) and (substr($data2['pesan'],0,3)=="TPS" OR substr($data2['pesan'],0,5)=="RALAT" )){ //pengecekan nomor yang diawali +628, mengecek sms yang ada tanda #, dan format awal yang sesuai (diawali TPS atau RALAT)
				
				$msg=$this->m_sms->getIdMsg()->result_array();
				
				if($cek_phone > 0){
					foreach($cek_phoneTS2 AS $i) {
						$aidi2= $i['id_notelp'];
						//echo $aidi; echo "------>";echo "$aidi2";echo "<br>";
						if($aidi != $aidi2){ 
							if($this->m_sms->getIdMsg()->num_rows()>0){
							foreach($msg AS $i) {
								//echo $id; echo "---->";
								$idmsg= $i['id_pesan'];
								//echo $idmsg;echo"<br>";
								if($idmsg == $id){
									break;
								}
								else{
									$this->countVote($pesan,$phone); //pergi ke method countvote
									$input=$this->m_sms->addInbox($table,$data2); //insert ke db
									$this->sendReply($phone,"sukses"); //mengirimkan sms sukses
								}
							}
							}
							else{
								$this->countVote($pesan,$phone);
								$input=$this->m_sms->addInbox($table,$data2);
								$this->sendReply($phone,"sukses");
							}
						}
					}
					
					
				}else{
					$this->sendReply($phone,"noregist");
				}
			
			}
			}
		
		//$this->sendReply();
		
		$a['inbox']=$this->m_sms->getInbox();
		
        $this->load->view('daftar_inbox',$a);
	}
	
	public function countVote($pesan,$phone) {
		$where = array('no_telp' => $phone);
		$temp = explode("#", $pesan);
		$tps=$temp[0];
		$where2=array('no_telp' => $phone, 'no_telp' => $phone);
		
		$cek_phone = $this->m_sms->getData("no_telp",$where)->num_rows();
		$cek_notps = $this->m_sms->cekNoTps($phone,$tps)->num_rows();
		$id_no = $this->m_sms->cekNoTps($phone,$tps)->result_array();
		$id_no2 = $this->m_sms->getNoInTS()->result_array();
		$cek_kandidat = $this->m_sms->getKandidat()->num_rows();
		$awal=(int)$cek_kandidat;
		$total_kandidat = $awal+3;
		$hasil_tps="";
		$hasil_dpt="";
		$hasil_sts="";
		$idnotelp="";
		$id_ts="";
		
		if($cek_phone > 0){ //cek no terdaftar atau engga
			if(preg_match("/#/", $pesan)) { //cek format #
				if($cek_notps>0){ //cek apakah no tps sesuai dengan no telp
					$temp = explode("#", $pesan);
					$a = count($temp);
					if($a==$total_kandidat){
						$hasil_kandidat=array(0);
						for($i=0;$i<$a;$i++){
							if(substr($temp[$i],0,3)=="TPS"){
								$hasil_tps=$temp[$i]; //pengecekan nama TPS
							}else if(substr($temp[$i],0,1)=="K"){
								$k=substr($temp[$i],1,1);
								if($k==1){
									$hasil_kandidat[$k-1]=0;
									$hasil_kandidat[$k]=substr($temp[$i],3);
								}
								else{
									$hasil_kandidat[$k]=substr($temp[$i],3); //pengecekan suara dari setiap kandidat
								}						
							}else if(substr($temp[$i],0,3)=="STS"){
								$hasil_sts=substr($temp[$i],4); //pengecekan suara STS
							}else if(substr($temp[$i],0,3)=="DPT"){
								$hasil_dpt=substr($temp[$i],4); //pengecekan suara DPT
							}
						} 
						//print_r($hasil_kandidat);
						foreach($id_no AS $i) {
						$idnotelp= $i['id_notelp'];
						}
						
						if($this->m_sms->getNoInTS()->num_rows()>0){
							foreach($id_no2 AS $d) {
								if($idnotelp!=$d['id_notelp']){
									$tab1="total_suara";
									$tab2="total_kandidat";
									$dimana1 = array('id_notelp' => $idnotelp, 'sts'=> $hasil_sts, 'dpt' => $hasil_dpt);
									//print_r($dimana1);
									$hitung_total= $this->m_sms->insertData($tab1,$dimana1); //insert ke db hasil perhitungan
									
									$query_idts=$this->m_sms->getIdTS();
									foreach($query_idts->result_array() AS $row) {
										$id_ts= $row['id_ts'];
									}
									
									for($q=1; $q<=$cek_kandidat; $q++){
										$dimana2 = array('id_ts' => $id_ts, 'id_calon'=> $q, 'total_suara'=>$hasil_kandidat[$q]);
										//print_r($dimana2);
										$hitung_kandidat = $this->m_sms->insertData($tab2,$dimana2); //insert ke db hasil perhitungan 
									}
								}
							}
						}else{
									$tab1="total_suara";
									$tab2="total_kandidat";
									$dimana1 = array('id_notelp' => $idnotelp, 'sts'=> $hasil_sts, 'dpt' => $hasil_dpt);
									//print_r($dimana1);
									$hitung_total= $this->m_sms->insertData($tab1,$dimana1);
									
									$query_idts=$this->m_sms->getIdTS();
									foreach($query_idts->result_array() AS $row) {
										$id_ts= $row['id_ts'];
									}
									
									for($q=1; $q<=$cek_kandidat; $q++){
										$dimana2 = array('id_ts' => $id_ts, 'id_calon'=> $q, 'total_suara'=>$hasil_kandidat[$q]);
										//print_r($dimana2);
										$hitung_kandidat = $this->m_sms->insertData($tab2,$dimana2);
									}
						}
						
						
					}
					else{
						$this->sendReply($phone,"formatsalah");
					}
				}
				else{
					$this->sendReply($phone,"gakcocok");
				}
				  
			}
			else{
				$this->sendReply($phone,"formatsalah");
			}
			
			
		}else{
					$this->sendReply($phone,"noregist");
				}
		
		//echo $hasil_tps."<br>";
		//echo $hasil_sts."<br>";
		//echo $hasil_dpt."<br>";
		//echo $this->$hasil_kandidat[0];
	
	}
	
	public function buat_pesan(){

	$id_pesan = $this->uri->segment(3);
	$x['hasil']=$this->m_sms->getSms($id_pesan);
	$this->load->view('form_pesan',$x);
		
	}
	
	
	public function balas_pesan() {
		include "assets/vendor/autoload.php";	
	$notelp = $this->input->post('nomor');
	$surat = $this->input->post('balasan');
	
	$array_fields['device_id'] = 100281;
	$array_fields['phone_number'] = $notelp;
	$array_fields['message'] = $surat;

	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzNTU0OTA5MiwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjU4NzA3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.akNX5Qv3s6Gtl6V3nQD9rQQOC4TRIGQ8S6QWidqOtoY"; //token smsgateway

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://smsgateway.me/api/v4/message/send",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 1000,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "[  " . json_encode($array_fields) . "]",
		CURLOPT_HTTPHEADER => array(
			"authorization: $token",
			"cache-control: no-cache"
		),
	));
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	
	$a['inbox']=$this->m_sms->getInbox();
		
        $this->load->view('daftar_inbox',$a);
	}
	
	
	
	
	public function sendReply($phone,$stat) {
		include "assets/vendor/autoload.php";
		
	$array_fields['device_id'] = 100281;
	$array_fields['phone_number'] = $phone;
	
	if($stat=="noregist"){
		$array_fields['message'] = "Nomor anda tidak terdaftar";
	}else if($stat=="formatsalah"){
		$array_fields['message'] = "Format yang anda kirimkan Salah Silahkan Ikuti Format : NAMA TPS#K1_JUMLAHSUARA#STS_JUMLAH STS#DPT_JUMLAH DPT";
	}else if($stat=="gakcocok"){
		$array_fields['message'] = "TPS yang anda inputkan belum tepat, silahkan periksa kembali SMS anda";
	}else if($stat=="sukses"){
		$array_fields['message'] = "SMS anda telah diterima, suara telah dihitung. Terimakasih.";
	}


	$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTUzNTU0OTA5MiwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjU4NzA3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.akNX5Qv3s6Gtl6V3nQD9rQQOC4TRIGQ8S6QWidqOtoY"; //token smsgateway

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://smsgateway.me/api/v4/message/send",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 1000,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "[  " . json_encode($array_fields) . "]",
		CURLOPT_HTTPHEADER => array(
			"authorization: $token",
			"cache-control: no-cache"
		),
	));
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);
	}
	
	public function tambah_kandidat(){
		  $this->load->view('tambah_kandidat');
	}
	
	public function aksi_tambah_kandidat(){
		$no_urut = $this->input->post('no_urut');
		$nama_calon = $this->input->post('nama_calon');
		$nama_wakil_calon = $this->input->post('nama_wakil_calon');
		$foto = $this->input->post('foto');
		$error='';
		$upload_data='';
		//echo "ini nama file : ".$foto;
		 
		$fileName = $this->input->post('foto');
		$filePath = './assets/images/';
		$config['upload_path'] = $filePath;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = true;

		$result=$this->upload->initialize($config);


		if (!empty($_FILES['foto'])) {

		  if (!$this->upload->do_upload('foto')) {

			   $error="gagal";

		  } else {

			   $upload_data = $this->upload->data();
			   
			  $error="sukses";

		  }
		}else{
			echo"<script>alert('Kosong');</script>";
		}
	
		$guru=array(
			'no_urut'=>$no_urut,
			'nama_calon'=>$nama_calon,
			'nama_wakil_calon'=>$nama_wakil_calon,
			'foto'=> $upload_data['file_name']
			);
			
		//simpan data 
		$upl=$this->m_sms->insertData("calon",$guru);
		if($error=="sukses" AND $upl){
			$x['data']=$this->m_sms->getKandidat();
			echo"<script>alert('Data Berhasil Ditambah');</script>";
			$this->load->view('daftar_kandidat',$x);
			
		}else{
			$x['data']=$this->m_sms->getKandidat();
			echo"<script>alert('Data Berhasil Ditambah');</script>";
			$this->load->view('daftar_kandidat',$x);
		}
		
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
	
	public function getMonitoring(){
		$x['monitor']=$this->m_sms->getMonitoring();
		$this->load->view('daftar_log',$x);
	}
	
	public function getHasilPerhitungan(){
		$data['grafikPie'] = $this->m_sms->getPieData();
		$data['kandidat'] = $this->m_sms->getKandidat();
		$data['hasil_kandidat'] = $this->m_sms->getHasilSuaraFix();
		$data['dpt'] = $this->m_sms->getDpt();
		$this->load->view('perhitugan_suara',$data);
		}
	
	
	public function logout() {
		$this->session->unset_userdata('username');
		session_destroy();
		redirect('auth');
	}

}
?>