<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kerja_sama_eksternal extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_kerja_sama_eksternal');
	}


	public function view_admin()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['kerja_sama_eksternal'] = $this->m_kerja_sama_eksternal->get_kerja_sama_eksternal();
		$data['kerja_sama_eksternal_pengusul'] = $this->m_kerja_sama_eksternal->get_kerja_sama_eksternal_pengusul()->row_array();
		
		$this->load->view('admin/view_kerja_sama_eksternal', $data);

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}

	public function input_data_admin(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$no_usulan = $this->input->post("no_usulan");
		$keterangan = $this->input->post("keterangan");
		$id_lembaga_mitra = $this->input->post("id_lembaga_mitra");
		$id_pengusul = $this->input->post("id_pengusul");
		$id_status_kerja_sama = $this->input->post("id_status_kerja_sama");
		$file_name = md5($no_usulan.$keterangan);
		

		// echo $no_usulan;
		// echo "<br>";
		// echo $keterangan;
		// echo "<br>";
		// echo $id_lembaga_mitra;
		// echo "<br>";
		// echo $id_pengusul;
		// echo "<br>";
		// echo $id_status_kerja_sama;
		// echo "<br>";
		// echo $file_name;
		// echo "<br>";
		
		$path = './assets/kerja_sama_eksternal/admin';

		$this->load->library('upload');
		$config['upload_path'] = './assets/kerja_sama_eksternal/admin';
		$config['allowed_types'] = 'pdf|docx';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name;
		$this->upload->initialize($config);
		$file_kerja_sama_eksternal_upload = $this->upload->do_upload('file_kerja_sama_eksternal');

			if($file_kerja_sama_eksternal_upload){
				$file_kerja_sama_eksternal = $this->upload->data();
			}else{
				$this->session->set_flashdata('error_file_kerja_sama_eksternal','error_file_kerja_sama_eksternal');
				redirect('Kerja_sama_eksternal/view_admin');
			}
		
			$hasil = $this->m_kerja_sama_eksternal->tambah_kerja_sama_eksternal($no_usulan, $keterangan, $id_lembaga_mitra, $id_pengusul, $id_status_kerja_sama, $file_kerja_sama_eksternal['file_name']);
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}

			redirect('Kerja_sama_eksternal/view_admin');

		}else{
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		}
		

	}

	public function view_mitra()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$this->load->view('mitra/view_kerja_sama_eksternal');

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}

	public function view_anggota()
	{
		$this->load->view('anggota/view_kerja_sama_eksternal');
	}

}