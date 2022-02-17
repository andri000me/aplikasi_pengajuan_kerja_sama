<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function dashboard_admin()
	{
		$this->load->view('admin/admin_dashboard');
	}

	public function dashboard_mitra()
	{
		$this->load->view('mitra/mitra_dashboard');
	}
}
