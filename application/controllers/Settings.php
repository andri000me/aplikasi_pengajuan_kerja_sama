<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
		
    }

    public function profile_admin()
	{
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
        
        $data['user'] = $this->m_user->get_user_by_id($this->session->userdata('id'))->result_array();
        $this->load->view('admin/profile_edit', $data);

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }


    
}