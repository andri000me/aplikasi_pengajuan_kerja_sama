<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		
	}

	public function dashboard_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['user'] = $this->session->all_userdata();
		$this->load->view('admin/admin_dashboard');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function dashboard_mitra()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

			$data['user'] = $this->session->all_userdata();
			$this->load->view('mitra/mitra_dashboard');
	
			}else{
	
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
	
			}
	}

	public function dashboard_anggota()
	{
		$this->load->view('anggota/anggota_dashboard');
	}
}
