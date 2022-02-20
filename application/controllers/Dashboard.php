<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		
	}

	public function dashboard_admin()
	{
		$data['user'] = $this->session->all_userdata();
		
		$this->load->view('admin/admin_dashboard');
	}

	public function dashboard_mitra()
	{
		$this->load->view('mitra/mitra_dashboard');
	}

	public function dashboard_anggota()
	{
		$this->load->view('anggota/anggota_dashboard');
	}
}
