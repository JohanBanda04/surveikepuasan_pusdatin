<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$data['status'] = "";

		if (isset($_POST['simpan'])){

			$tgl = date("Y-m-d");
			$data = array(
				"tanggal" => $tgl,
				"bintang" => $_POST['stars']
			);
			$this->mod_survei->InsertData('data', $data);

			$data['status'] = "berhasil";
		}

		$this->load->view('header', $data);
		$this->load->view('survei', $data);
		$this->load->view('footer', $data);
	}

    public function laporan(){
	    echo "laporan";
    }




}
