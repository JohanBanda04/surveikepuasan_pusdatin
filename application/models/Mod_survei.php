<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_survei extends CI_Model {
	public function GetResult(){
		$tgl = date("Y-m-d");
		$senang = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '1' AND tanggal = '$tgl'")->row_array();
		$cukup = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '2' AND tanggal = '$tgl'")->row_array();
		$kurang = $this->db->query("SELECT count(*) as data FROM data WHERE respon = '3' AND tanggal = '$tgl'")->row_array();
		$res = array(
			"senang" => $senang['data'],
			"cukup" => $cukup['data'],
			"kurang" => $kurang['data']
		);
		return $res;
	}
	public function InsertData($tabel, $data){
		$res = $this->db->insert($tabel, $data);
		return $res;
	}

	public function getJumlahResponden($tgl_awal, $tgl_akhir){
        $jumlahResponden = $this->db->query("SELECT COUNT(id) as jml_responden 
FROM data where tanggal between '$tgl_awal' and '$tgl_akhir'");
        foreach ($jumlahResponden->result() as $row)
        {
            $jmlResponden = $row->jml_responden;

        }
	    return $jmlResponden;
    }

    public function getRating($tgl_awal, $tgl_akhir){
        $jumlahBintang = $this->db->query("SELECT SUM(bintang) as jml_bintang
FROM data WHERE tanggal between '$tgl_awal' and '$tgl_akhir'");
        foreach ($jumlahBintang->result() as $row){
            $jmlBintang = $row->jml_bintang;
        }

        return $jmlBintang;
    }



}
