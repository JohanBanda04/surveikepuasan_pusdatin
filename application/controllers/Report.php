<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf_report');
        $this->load->library('session');
//        $this->load->model('Guzzle_model');
        $this->load->helper('security');
    }

    public function index()
    {
        $data['judul_web'] = "Laporan";
//        echo "reportss";
        date_default_timezone_set('Asia/Singapore');
//        $p = "laporan_data";
        $data['tgl_awal_sql'] = "kosong";
        $data['tgl_akhir_sql'] = "kosong";
        $data['id_divisi_selected'] = "kosong";
        $hari_ini = date("Y-m-d");
        $data['filter_date_dari'] = $this->input->post('dari_tgl');
        $data['filter_date_sampai'] = $this->input->post('sampai_tgl');
        $data["tgl_now"] = $this->Mcrud->tgl_id_new($hari_ini, 'full');
        $data['agenda_data'] = "";

        $this->load->view("header_report", $data);
        $this->load->view("laporan_data", $data);
        $this->load->view("footer_report", $data);

    }

//    public function v($aksi='',$tanggal='',$tanggal2=''){
    public function v($aksi = '', $tanggal = '', $tanggal2 = '')
    {
        $data['judul_web'] = "Laporan";
//        echo "reportss";
        date_default_timezone_set('Asia/Singapore');
//        $p = "laporan_data";
        $data['tgl_awal_sql'] = "kosong";
        $data['tgl_akhir_sql'] = "kosong";
        $data['id_divisi_selected'] = "kosong";
        $hari_ini = date("Y-m-d");
        $data['filter_date_dari'] = $this->input->post('dari_tgl');
        $data['filter_date_sampai'] = $this->input->post('sampai_tgl');


        $data['tgl_awal_sql']=$this->Mcrud->tgl_sql($data['filter_date_dari']);
        $data['tgl_akhir_sql']=$this->Mcrud->tgl_sql($data['filter_date_sampai']);

        $data['tgl_awal_full'] = $this->Mcrud->tgl_idn($data['tgl_awal_sql'], "full");
        $data['tgl_akhir_full'] = $this->Mcrud->tgl_idn($data['tgl_akhir_sql'], "full");

        $data["tgl_now"] = $this->Mcrud->tgl_id_new($hari_ini, 'full');



        $jmlResponden = $this->mod_survei->getJumlahResponden($data['tgl_awal_sql'],$data['tgl_akhir_sql']);
        $jmlRating = $this->mod_survei->getRating($data['tgl_awal_sql'],$data['tgl_akhir_sql']);

        $data['jumlah_responden'] = $jmlResponden;
        if($jmlResponden >  0){
//            $jmlRating = $this->mod_survei->getRating($data['tgl_awal_sql'],$data['tgl_akhir_sql']);
            $data['rating'] = number_format((float)$jmlRating/$jmlResponden, 2, '.', '');
        } else if ($jmlResponden <= 0) {
//            $jmlRating = 0;
//            $data['rating'] = 0;
            $data['rating'] = number_format((float)0, 2, '.', '');
        }
//        $data['rating'] = number_format((float)$jmlRating/$jmlResponden, 2, '.', '');
        $data['agenda_data'] = "";
        $p = 'laporan_data';
        $this->load->view("header_report", $data);
        $this->load->view("laporan_data", $data);
        $this->load->view("footer_report", $data);
    }


}
