<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_kerja_sama extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_status_kerja_sama');
    }

    public function view_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $data['status_kerja_sama'] = $this->m_status_kerja_sama->get_status_kerja_sama();
            // echo var_dump($data);
            // die();

            $this->load->view('admin/status_kerja_sama', $data);
        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function input_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $status_kerja_sama = $this->input->post("status_kerja_sama");

            $hasil = $this->m_status_kerja_sama->tambah_status_kerja_sama($status_kerja_sama );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}

			redirect('Status_kerja_sama/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function edit_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $status_kerja_sama = $this->input->post("status_kerja_sama");
            $id_status_kerja_sama = $this->input->post("id_status_kerja_sama");

            $hasil = $this->m_status_kerja_sama->update_status_kerja_sama($status_kerja_sama, $id_status_kerja_sama );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('edit','edit');
			
			}

			redirect('Status_kerja_sama/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    
}