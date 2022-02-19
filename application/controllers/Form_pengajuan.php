<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pengajuan extends CI_Controller {

	public function form_pengajuan_admin()
	{
		$this->load->view('admin/form_pengajuan');
	}

	public function form_pengajuan_mitra()
	{
		$this->load->view('mitra/form_pengajuan');
	}

}
