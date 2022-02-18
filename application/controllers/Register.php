<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('register');
    }

    public function proses()
	{
		$username = $this->input->post("username");
		$no_hp = $this->input->post("no_hp");
		$email = $this->input->post("email");
		$nama_mitra = $this->input->post("nama_mitra");
		$password = $this->input->post("password");
		$password_check = $this->input->post("password_check");
		$id_role = 2;

		

		if($password == $password_check){
			$hasil = $this->m_user->pendaftaran_user($username, $no_hp, $email, $nama_mitra, $password, $id_role);
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('login/index');
			}

		}else{
			$this->session->set_flashdata('password_err','password_err');
			redirect('register/index');
		}
    }
    

}
