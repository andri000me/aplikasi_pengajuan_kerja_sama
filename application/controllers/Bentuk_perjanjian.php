<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bentuk_perjanjian extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_bentuk_perjanjian');
    }

    public function dashboard_admin()
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

    
}