<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_pengajuan extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_jenis_pengajuan');
    }

    public function dashboard_admin()
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

    
}