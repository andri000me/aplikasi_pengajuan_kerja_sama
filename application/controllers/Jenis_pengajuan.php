<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_pengajuan extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_jenis_pengajuan');
    }

    public function view_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $data['jenis_pengajuan'] = $this->m_jenis_pengajuan->get_jenis_pengajuan();
            // echo var_dump($data);
            // die();
            $this->load->view('admin/jenis_pengajuan', $data);
        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function input_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $jenis_pengajuan = $this->input->post("jenis_pengajuan");

            $hasil = $this->m_jenis_pengajuan->tambah_jenis_pengajuan($jenis_pengajuan );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}

			redirect('Jenis_pengajuan/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function edit_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $jenis_pengajuan = $this->input->post("jenis_pengajuan");
            $id_jenis_pengajuan = $this->input->post("id_jenis_pengajuan");

            $hasil = $this->m_jenis_pengajuan->update_jenis_pengajuan($jenis_pengajuan, $id_jenis_pengajuan );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('edit','edit');
			
			}

			redirect('Jenis_pengajuan/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    
}