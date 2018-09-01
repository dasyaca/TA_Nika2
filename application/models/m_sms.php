<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_sms extends CI_Model {
		
		function getNoTelp(){		
			$hasil=$this->db->query("SELECT `no_telp`.`id_notelp`,`tps`.`nama_tps`,`tps`.`id_tps`, `kelurahan`.`nama_kel`, `kecamatan`.`nama_kec`, `no_telp`.`no_telp` FROM no_telp right join tps on tps.id_tps=no_telp.id_tps inner JOIN kelurahan on tps.id_kel=kelurahan.id_kel INNER JOIN kecamatan on kelurahan.id_kec=kecamatan.id_kec  ");
			return $hasil;
		}
		
		function insertNope($table,$where){
			$this->db->insert($table,$where);
			
		}
		
		function getIdNoTelp(){		
			$hasil=$this->db->query("select coalesce(max(id_notelp),0) as id_notelp from no_telp");
			return $hasil;
		}
		
		function getIdMsg(){		
			$hasil=$this->db->query("select id_pesan from inbox");
			return $hasil;
		}
		
		function getNoInTS(){		
			$hasil=$this->db->query("select id_notelp from total_suara");
			return $hasil;
		}
		
		function getIdNoTelpOne($notelp){		
			$hasil=$this->db->query("select id_notelp from no_telp where no_telp='$notelp'");
			return $hasil;
		}
		
		function getIdTS(){		
			$hasil=$this->db->query("select coalesce(max(id_ts),0) as id_ts from total_suara");
			return $hasil;
		}
		
		function getNoEdit($id){		
			$hasil=$this->db->query("SELECT `no_telp`.`id_notelp`,`tps`.`nama_tps`, `kelurahan`.`nama_kel`, `kecamatan`.`nama_kec`, `no_telp`.`no_telp` FROM no_telp, kecamatan, kelurahan, tps where no_telp.id_tps=tps.id_tps AND tps.id_kel=kelurahan.id_kel AND kelurahan.id_kec=kecamatan.id_kec AND no_telp.id_notelp='$id'");
			return $hasil;
		}
		
		function getInbox(){		
			$hasil=$this->db->query("SELECT * from inbox order by date desc");
			return $hasil;
		}
		
		function getSms($id){		
			$hasil=$this->db->query("SELECT * from inbox where id_pesan='$id'");
			return $hasil;
		}
		
		function getKandidat(){		
			$hasil=$this->db->query("SELECT * from calon");
			return $hasil;
		}
		
		function getKandidatBy($id){		
			$hasil=$this->db->query("SELECT * from calon where id_calon='$id'");
			return $hasil;
		}
		
		function editKandidat($id, $no, $namacalon, $namawakilcalon){		
			$hasil=$this->db->query("UPDATE calon set no_urut='$no', nama_calon='$namacalon', nama_wakil_calon='$namawakilcalon' where id_calon='$id'");
			return $hasil;
		}
		
		function editFoto($id, $foto){		
			$hasil=$this->db->query("UPDATE calon set foto='$foto' where id_calon='$id'");
			return $hasil;
		}
		
		function editNope($id, $nope){		
			$hasil=$this->db->query("UPDATE no_telp set no_telp='$nope' where id_notelp='$id'");
			return $hasil;
		}
		
		function addInbox($table,$where){		
			$hasil=$this->db->insert($table,$where);
			return $hasil;
		}
		
		function getIdPesan(){		
			$hasil=$this->db->query("select coalesce(max(id_pesan),0) as id_pesan from inbox");
			return $hasil;
		}
		
		
		function cekNo(){		
			$hasil=$this->db->query("SELECT * from tps");
			return $hasil;
		}

		function insertData($table,$where){
			$this->db->insert($table,$where);
		}
		
		function getData($table,$where){		
			return $this->db->get_where($table,$where);
		}
		
		function getIdTPS(){
			$hasil=$this->db->query("select id_tps from tps");
			return $hasil;
		}
		
		function cekNoTps($phone,$tps){		
			$hasil=$this->db->query("SELECT n.id_notelp, t.nama_tps,n.no_telp FROM no_telp n, tps t where n.id_tps = t.id_tps AND n.no_telp='$phone' AND t.nama_tps='$tps' ");
			return $hasil;
		}
		
		function getTotalSuaraKec(){
			$hasil=$this->db->query("SELECT * from kecamatan");
			return $hasil;
		}
		
		function getSuaraKec(){
			$hasil=$this->db->query("select * from (SELECT kecamatan.id_kec,kecamatan.nama_kec, tps.id_tps FROM tps, kecamatan,kelurahan where kecamatan.id_kec=kelurahan.id_kec AND kelurahan.id_kel=tps.id_kel) b LEFT JOIN (Select sum(total_suara.sts) as sts, sum(total_suara.dpt) as dpt, no_telp.id_tps from total_suara, no_telp,tps,kelurahan,kecamatan where total_suara.id_notelp=no_telp.id_notelp AND no_telp.id_tps=tps.id_tps AND tps.id_kel=kelurahan.id_kel AND kecamatan.id_kec=kelurahan.id_kec group by kecamatan.id_kec) a ON a.id_tps= b.id_tps GROUP BY b.id_kec ");
			return $hasil;
		}
		
		function getTotalSuaraKel($id_kec){
			$hasil=$this->db->query("select * from (SELECT kelurahan.id_kel,kelurahan.id_kec,kelurahan.nama_kel, tps.id_tps FROM tps,kelurahan where kelurahan.id_kel=tps.id_kel and kelurahan.id_kec='$id_kec') b LEFT JOIN (Select sum(total_suara.sts) as sts, sum(total_suara.dpt) as dpt, no_telp.id_tps from total_suara, no_telp,tps,kelurahan where total_suara.id_notelp=no_telp.id_notelp AND no_telp.id_tps=tps.id_tps AND tps.id_kel=kelurahan.id_kel group by kelurahan.id_kel) a ON a.id_tps= b.id_tps GROUP BY b.id_kel ");
			return $hasil;
		}
		
		function getSuaraKel(){
			$hasil=$this->db->query("select * from (SELECT kelurahan.id_kel,kelurahan.id_kec,kelurahan.nama_kel, tps.id_tps FROM tps,kelurahan where kelurahan.id_kel=tps.id_kel) b LEFT JOIN (Select sum(total_suara.sts) as sts, sum(total_suara.dpt) as dpt, no_telp.id_tps from total_suara, no_telp,tps,kelurahan where total_suara.id_notelp=no_telp.id_notelp AND no_telp.id_tps=tps.id_tps AND tps.id_kel=kelurahan.id_kel group by kelurahan.id_kel) a ON a.id_tps= b.id_tps GROUP BY b.id_kel ");
			return $hasil;
		}
		
		function getTotalSuaraTPS($id_kel){
			$hasil=$this->db->query("select * from (SELECT tps.nama_tps, tps.id_tps FROM tps where tps.id_kel='$id_kel' ) b LEFT JOIN (Select total_suara.sts, total_suara.dpt, no_telp.id_tps, total_suara.id_ts from total_suara, no_telp where total_suara.id_notelp=no_telp.id_notelp ) a ON a.id_tps= b.id_tps ");
			return $hasil;
		}
		
		function getHasilSuara(){
			$hasil=$this->db->query("select a.ts, tps.id_tps, a.id_ts, a.id_calon from (select tps.id_tps as no, total_kandidat.id_calon, total_kandidat.total_suara as ts, total_suara.id_ts FROM total_kandidat, total_suara, no_telp, tps where total_kandidat.id_ts=total_suara.id_ts and total_suara.id_notelp=no_telp.id_notelp and no_telp.id_tps=tps.id_tps )a RIGHT JOIN tps ON tps.id_tps=a.no ");
			return $hasil;
		}
		
		function getHasilSuara1(){
			$hasil=$this->db->query("select a.ts, kecamatan.id_kec, a.id_calon from (select kecamatan.id_kec as no, total_kandidat.id_calon, SUM(total_kandidat.total_suara) ts FROM total_kandidat, total_suara, no_telp, tps, kelurahan, kecamatan where total_kandidat.id_ts=total_suara.id_ts and total_suara.id_notelp=no_telp.id_notelp and no_telp.id_tps=tps.id_tps and tps.id_kel=kelurahan.id_kel and kelurahan.id_kec=kecamatan.id_kec group by kecamatan.id_kec,total_kandidat.id_calon order by total_kandidat.id_calon asc)a RIGHT JOIN kecamatan ON kecamatan.id_kec=a.no");
			return $hasil;
		}
		
		function getHasilSuara2(){
			$hasil=$this->db->query("select a.ts, kelurahan.id_kel, a.id_calon from (select kelurahan.id_kel as no, total_kandidat.id_calon, SUM(total_kandidat.total_suara) ts FROM total_kandidat, total_suara, no_telp, tps, kelurahan where total_kandidat.id_ts=total_suara.id_ts and total_suara.id_notelp=no_telp.id_notelp and no_telp.id_tps=tps.id_tps and tps.id_kel=kelurahan.id_kel group by kelurahan.id_kel,total_kandidat.id_calon order by total_kandidat.id_calon asc)a RIGHT JOIN kelurahan ON kelurahan.id_kel=a.no ");
			return $hasil;
		}
		
		function getHasilSuara3(){
			$hasil=$this->db->query("select * FROM total_kandidat");
			return $hasil;
		}
		
		function getHasilSuaraFix(){
			$hasil=$this->db->query("select id_calon, sum(total_suara) as tot FROM total_kandidat group by id_calon");
			return $hasil;
		}
		
		function getDpt(){
			$hasil=$this->db->query("select sum(dpt) as total from total_suara");
			return $hasil;
		}
		
		function getMonitoring(){
			$hasil=$this->db->query("SELECT * FROM(SELECT tps.nama_tps, no_telp.no_telp,no_telp.id_notelp FROM no_telp, tps WHERE tps.id_tps=no_telp.id_tps) a LEFT JOIN (SELECT id_notelp as id FROM total_suara) b ON a.id_notelp = b.id");
			return $hasil;
		}
		
		public function getPieData(){
			$query=$this->db->query("select id_calon,sum(total_suara) as jumlah from total_kandidat group by id_calon");
			return $query;
		}
		
		public function getTotalKel(){
			$query=$this->db->query("SELECT kecamatan.nama_kec,kecamatan.id_kec, kelurahan.id_kel, count(id_kel) as total FROM kecamatan, kelurahan WHERE kecamatan.id_kec=kelurahan.id_kec group by kecamatan.id_kec");
			return $query;
		}
		
		public function getTotalTPS(){
			$query=$this->db->query("select * from (SELECT sum(total_suara.dpt) as total, kelurahan.nama_kel as ara, kelurahan.id_kel as ada FROM total_suara, no_telp, tps, kelurahan, kecamatan WHERE total_suara.id_notelp=no_telp.id_notelp and no_telp.id_tps=tps.id_tps and tps.id_kel=kelurahan.id_kel and kelurahan.id_kec=kecamatan.id_kec GROUP BY kelurahan.id_kel) a RIGHT JOIN kelurahan ON a.ada = kelurahan.id_kel JOIN kecamatan ON kelurahan.id_kec=kecamatan.id_kec ");
			return $query;
		}
		
		public function getTotalSemua(){
			$query=$this->db->query("SELECT kecamatan.nama_kec,kecamatan.id_kec, kelurahan.id_kel, count(id_kel) as total FROM kecamatan, kelurahan WHERE kecamatan.id_kec=kelurahan.id_kec group by kecamatan.id_kec ");
			return $query;
		}
		
		public function getTotalDrill(){
			$query=$this->db->query("select * from (SELECT tps.nama_tps,kelurahan.nama_kel, tps.id_tps FROM tps, kelurahan where tps.id_kel=kelurahan.id_kel) b LEFT JOIN (Select total_suara.sts, total_suara.dpt, no_telp.id_tps, total_suara.id_ts from total_suara, no_telp where total_suara.id_notelp=no_telp.id_notelp ) a ON a.id_tps= b.id_tps ");
			return $query;
		}


		
}
?>
