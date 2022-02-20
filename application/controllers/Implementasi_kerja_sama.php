<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Implementasi_kerja_sama extends CI_Controller {

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$this->load->view('admin/view_implementasi_kerja_sama');

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
