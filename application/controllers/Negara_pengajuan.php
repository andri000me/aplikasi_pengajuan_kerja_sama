<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negara_pengajuan extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_negara_asal_pengajuan');
    }

    public function view_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $data['negara_pengajuan'] = $this->m_negara_asal_pengajuan->get_negara_asal_pengajuan();
            $this->load->view('admin/negara_pengajuan', $data);
        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function input_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $negara_pengajuan = $this->input->post("negara_pengajuan");

            $hasil = $this->m_negara_asal_pengajuan->tambah_negara_pengajuan($negara_pengajuan );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}

			redirect('Negara_pengajuan/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function edit_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $negara_pengajuan = $this->input->post("negara_pengajuan");
            $id_negara_pengajuan = $this->input->post("id_negara_pengajuan");

            $hasil = $this->m_negara_asal_pengajuan->update_negara_pengajuan($negara_pengajuan, $id_negara_pengajuan );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('edit','edit');
			
			}

			redirect('Negara_pengajuan/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    
}