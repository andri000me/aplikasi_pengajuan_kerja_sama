<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pengajuan extends CI_Controller {

	public function form_pengajuan_admin()
	{
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

        $this->load->view('admin/form_pengajuan');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
	}

	public function form_pengajuan_mitra()
	{
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

        $this->load->view('mitra/form_pengajuan');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
            redirect('Login/index');
        }
    }
    
    public function form_pengajuan_anggota()
	{
		$this->load->view('anggota/form_pengajuan');
	}

}