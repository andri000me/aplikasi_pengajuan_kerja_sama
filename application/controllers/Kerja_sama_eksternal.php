<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerja_sama_eksternal extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/view_kerja_sama_eksternal');
	}

	public function view_mitra()
	{
		$this->load->view('mitra/view_kerja_sama_eksternal');
	}

	public function view_anggota()
	{
		$this->load->view('anggota/view_kerja_sama_eksternal');
	}

}
