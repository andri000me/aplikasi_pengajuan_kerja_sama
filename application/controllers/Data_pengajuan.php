<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengajuan extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_data_pengajuan');
	}
	public function view_admin()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$id = $this->session->userdata('id');
			$data['data_pengajuan'] = $this->m_data_pengajuan->get_data_pengajuan($id)->result_array();
			

		$this->load->view('admin/data_pengajuan', $data);

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}

	public function view_admin_data_terajukan()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$id = $this->session->userdata('id');
			$data['data_pengajuan'] = $this->m_data_pengajuan->get_data_terajukan($id)->result_array();
			

		$this->load->view('admin/data_terajukan', $data);

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}


	public function hapus_data_pengajuan_admin($id_data_pengajuan)
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
		// $file = $this->input->post('file_data_pengajuan_old');
		// echo $file;
		// die();
		$this->m_data_pengajuan->hapus_data_pengajuan($id_data_pengajuan);
		$hasil = $this->m_data_pengajuan->hapus_data_pengajuan($id_data_pengajuan);
		if($hasil==false){
			$this->session->set_flashdata('eror_hapus','eror_hapus');
		}else{
			$this->session->set_flashdata('hapus','hapus');
		}
		$path = './assets/data_pengajuan/admin/';
		@unlink($path.$this->input->post('file_data_pengajuan_old'));
		redirect('Data_pengajuan/view_admin');
		}else{
			
			redirect('welcome');
		}
	}

	public function view_mitra()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			$id = $this->session->userdata('id');
			$data['data_pengajuan'] = $this->m_data_pengajuan->get_data_pengajuan($id)->result_array();

		$this->load->view('mitra/data_pengajuan', $data);

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}

	public function view_mitra_data_terajukan()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			$id = $this->session->userdata('id');
			$data['data_pengajuan'] = $this->m_data_pengajuan->get_data_terajukan($id)->result_array();
			

		$this->load->view('mitra/data_terajukan', $data);

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}
	
	public function edit_data_mitra($id_data_pengajuan){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			$id_status_pengajuan = $this->input->post("id_status_pengajuan");
			
		// $file_name = md5($no_usulan.$keterangan);
		
		// echo $id_status_pengajuan;
		// echo "<br>";
		// echo $id_data_pengajuan;
		// echo "<br>";
		// echo $id_lembaga_mitra;
		// echo "<br>";
		// echo $keterangan;
		// echo "<br>";
		// echo $id_jenis_perjanjian;
		// echo "<br>";
		// echo $file;
		// echo "<br>";
		
		// die();
		


		
			$hasil = $this->m_data_pengajuan->update_status_data_pengajuan($id_status_pengajuan, $id_data_pengajuan);
	
			if($hasil==false){
				$this->session->set_flashdata('eror_edit','eror_edit');
			
			}else{
				$this->session->set_flashdata('edit','edit');
			}
			

			redirect('Data_pengajuan/view_mitra');

		}else{
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		}
		

	}

	public function hapus_data_pengajuan_mitra($id_data_pengajuan)
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
		// $file = $this->input->post('file_data_pengajuan_old');
		// echo $file;
		// die();
		$this->m_data_pengajuan->hapus_data_pengajuan($id_data_pengajuan);
		$hasil = $this->m_data_pengajuan->hapus_data_pengajuan($id_data_pengajuan);
		if($hasil==false){
			$this->session->set_flashdata('eror_hapus','eror_hapus');
		}else{
			$this->session->set_flashdata('hapus','hapus');
		}
		$path = './assets/data_pengajuan/mitra/';
		@unlink($path.$this->input->post('file_data_pengajuan_old'));
		redirect('Data_pengajuan/view_mitra');
		}else{
			
			redirect('welcome');
		}
	}
    
}