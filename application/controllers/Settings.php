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

    public function profile_mitra()
	{
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
        
        $data['user'] = $this->m_user->get_user_by_id($this->session->userdata('id'))->result_array();
        $this->load->view('mitra/profile_edit', $data);

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }

    public function edit_data_admin($id){
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
           
            $username = $this->input->post("username");
            $password = $this->input->post("password");
            $email =  $this->input->post("email");
            $no_hp =  $this->input->post("no_hp");
            $alamat_mitra =  $this->input->post("alamat_mitra");


            // echo $username;
            // echo "<br>";
            // echo $password;
            // echo "<br>";
            // echo $email;
            // echo "<br>";
            // echo $no_hp;
            // echo "<br>";
            // echo $alamat_mitra;
            // echo "<br>";
            // echo $id;
            // die();

            $hasil = $this->m_user->update_user($username, $password, $email, $no_hp, $alamat_mitra, $id);
	
			if($hasil==false){
				$this->session->set_flashdata('eror_edit','eror_edit');
			
			}else{
				$this->session->set_flashdata('edit','edit');
			}
		

			redirect('Settings/profile_admin');

            }else{
                $this->session->set_flashdata('loggin_err','loggin_err');
                redirect('Login/index');
            }
    }


    
}