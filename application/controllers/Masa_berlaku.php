<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masa_berlaku extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_masa_berlaku');
    }

    public function view_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $data['masa_berlaku'] = $this->m_masa_berlaku->get_masa_berlaku();
            // echo var_dump($data);
            // die();
            $this->load->view('admin/masa_berlaku', $data);
        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function input_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $masa_berlaku = $this->input->post("masa_berlaku");

            $hasil = $this->m_masa_berlaku->tambah_masa_berlaku($masa_berlaku );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}

			redirect('Masa_berlaku/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function edit_data_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $masa_berlaku = $this->input->post("masa_berlaku");
            $id_masa_berlaku = $this->input->post("id_masa_berlaku");

            $hasil = $this->m_masa_berlaku->update_masa_berlaku($masa_berlaku, $id_masa_berlaku );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('edit','edit');
			
			}

			redirect('Masa_berlaku/view_admin');

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    
}