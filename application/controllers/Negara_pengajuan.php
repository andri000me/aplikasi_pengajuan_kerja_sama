<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Negara_pengajuan extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_negara_asal_pengajuan');
    }

    public function dashboard_admin()
    {
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $data['negara_pengajuan'] = $this->m_negara_asal_pengajuan->get_negara_asal_pengajuan();
            $this->load->view('admin/negara_pengajuan', $data);
        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    
}