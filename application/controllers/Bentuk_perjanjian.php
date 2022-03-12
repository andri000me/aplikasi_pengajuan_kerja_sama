<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bentuk_perjanjian extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_bentuk_perjanjian');
    }

    public function view_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $data['bentuk_perjanjian'] = $this->m_bentuk_perjanjian->get_bentuk_perjanjian();
            // echo var_dump($data);
            // die();

            $this->load->view('admin/bentuk_perjanjian', $data);
        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function input_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $bentuk_perjanjian = $this->input->post("bentuk_perjanjian");

            $hasil = $this->m_bentuk_perjanjian->tambah_bentuk_perjanjian($bentuk_perjanjian );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}

			redirect('Bentuk_perjanjian/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function edit_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $bentuk_perjanjian = $this->input->post("bentuk_perjanjian");
            $id_bentuk_perjanjian = $this->input->post("id_bentuk_perjanjian");

            $hasil = $this->m_bentuk_perjanjian->update_bentuk_perjanjian($bentuk_perjanjian, $id_bentuk_perjanjian );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('edit','edit');
			
			}

			redirect('Bentuk_perjanjian/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    
}