<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Implementasi_kerja_sama extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_implementasi_kerja_sama');
		$this->load->model('m_user');
	}

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['implementasi_kerja_sama'] = $this->m_implementasi_kerja_sama->get_implementasi_kerja_sama();
			$data['user'] = $this->m_user->get_user();

		$this->load->view('admin/view_implementasi_kerja_sama', $data);

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}

	public function view_mitra()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$this->load->view('mitra/view_implementasi_kerja_sama');

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}

	public function view_anggota()
	{
		$this->load->view('anggota/view_implementasi_kerja_sama');
	}

}
