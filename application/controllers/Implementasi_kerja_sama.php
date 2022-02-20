<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Implementasi_kerja_sama extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/view_implementasi_kerja_sama');
	}

	public function view_mitra()
	{
		$this->load->view('mitra/view_implementasi_kerja_sama');
	}

	public function view_anggota()
	{
		$this->load->view('anggota/view_implementasi_kerja_sama');
	}

}
