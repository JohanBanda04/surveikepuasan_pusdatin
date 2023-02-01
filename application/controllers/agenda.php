<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class agenda extends CI_Controller {
	public function index()
	{
		$ceks 	 = $this->session->userdata('token_katamaran');

		if(!isset($ceks)) {
			redirect('web/login');
		} else {
			redirect('dashboard');
		}

	}

	public function v()
	{
	    echo "agenda tess";
	}

}