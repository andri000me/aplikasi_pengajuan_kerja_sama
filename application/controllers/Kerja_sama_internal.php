<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerja_sama_internal extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/view_kerja_sama_internal');
	}

	public function view_mitra()
	{
		$this->load->view('mitra/view_kerja_sama_internal');
	}

}
