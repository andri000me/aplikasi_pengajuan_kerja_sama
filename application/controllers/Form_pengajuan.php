<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pengajuan extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_data_pengajuan');
		$this->load->model('m_bentuk_perjanjian');
		$this->load->model('m_kategori_kerja_sama');
		$this->load->model('m_status_kerja_sama');
		$this->load->model('m_negara_asal_pengajuan');
		$this->load->model('m_jenis_pengajuan');
		$this->load->model('m_user');
	}
	public function form_pengajuan_admin()
	{
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
		$data['kategori_kerja_sama'] = $this->m_kategori_kerja_sama->get_kategori_kerja_sama();
		$data['status_kerja_sama'] = $this->m_status_kerja_sama->get_status_kerja_sama();
		$data['bentuk_perjanjian'] = $this->m_bentuk_perjanjian->get_bentuk_perjanjian();
		$data['negara_asal_pengajuan'] = $this->m_negara_asal_pengajuan->get_negara_asal_pengajuan();
		$data['jenis_pengajuan'] = $this->m_jenis_pengajuan->get_jenis_pengajuan();
		$data['user'] = $this->m_user->get_user();

        $this->load->view('admin/form_pengajuan', $data);

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
        }
    }
    
    public function input_data_admin(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$no_pengajuan = $this->input->post("no_pengajuan");
		$keterangan = $this->input->post("keterangan");
		$id_bentuk_perjanjian = $this->input->post("id_bentuk_perjanjian");
		$id_jenis_pengajuan = $this->input->post("id_jenis_pengajuan");
		$id_negara_asal_pengajuan = $this->input->post("id_negara_asal_pengajuan");
		$id_kategori_kerjasama = $this->input->post("id_kategori_kerjasama");
		$id_user_penerima = $this->input->post("id_user_penerima");

		$id_status_pengajuan = 2;
        $id_user_pengirim = $this->session->userdata('id');
        $file_name = md5($no_pengajuan.$keterangan);

		// echo $no_pengajuan;
		// echo "<br>";
		// echo $keterangan;
		// echo "<br>";
		// echo $id_bentuk_perjanjian;
		// echo "<br>";
		// echo $id_jenis_pengajuan;
		// echo "<br>";
		// echo $id_jenis_pengajuan;
		// echo "<br>";
		// echo $id_negara_asal_pengajuan;
		// echo "<br>";
		// echo $id_kategori_kerjasama;
		// echo "<br>";
		// echo $id_user_penerima;
		// echo "<br>";
		// echo $id_user_pengirim;
		// echo "<br>";
		// die();

		$path = './assets/data_pengajuan/admin/';

		$this->load->library('upload');
		$config['upload_path'] = './assets/data_pengajuan/admin';
		$config['allowed_types'] = 'pdf|docx';
		$config['max_size'] = '4048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name;
		$this->upload->initialize($config);
		$file_data_pengajuan_upload = $this->upload->do_upload('file_data_pengajuan');

			if($file_data_pengajuan_upload){
				$file_data_pengajuan = $this->upload->data();
			}else{
				$this->session->set_flashdata('error_file_data_pengajuan','error_file_data_pengajuan');
				redirect('data_pengajuan/view_admin');
			}
		
			$hasil = $this->m_data_pengajuan->tambah_data_pengajuan($no_pengajuan, $keterangan, $id_bentuk_perjanjian, $id_jenis_pengajuan, $file_data_pengajuan['file_name'],$id_negara_asal_pengajuan, $id_status_pengajuan, $id_kategori_kerjasama, $id_user_penerima, $id_user_pengirim );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}

			redirect('Form_pengajuan/form_pengajuan_admin');

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}

	public function form_pengajuan_mitra()
	{
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
		$data['kategori_kerja_sama'] = $this->m_kategori_kerja_sama->get_kategori_kerja_sama();
		$data['status_kerja_sama'] = $this->m_status_kerja_sama->get_status_kerja_sama();
		$data['bentuk_perjanjian'] = $this->m_bentuk_perjanjian->get_bentuk_perjanjian();
		$data['negara_asal_pengajuan'] = $this->m_negara_asal_pengajuan->get_negara_asal_pengajuan();
		$data['jenis_pengajuan'] = $this->m_jenis_pengajuan->get_jenis_pengajuan();
		$data['user'] = $this->m_user->get_user();

        $this->load->view('mitra/form_pengajuan', $data);

        }else{
            $this->session->set_flashdata('loggin_err','loggin_err');
            redirect('Login/index');
        }
	}
	
	public function input_data_mitra(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$no_pengajuan = $this->input->post("no_pengajuan");
		$keterangan = $this->input->post("keterangan");
		$id_bentuk_perjanjian = $this->input->post("id_bentuk_perjanjian");
		$id_jenis_pengajuan = $this->input->post("id_jenis_pengajuan");
		$id_negara_asal_pengajuan = $this->input->post("id_negara_asal_pengajuan");
		$id_kategori_kerjasama = $this->input->post("id_kategori_kerjasama");
		$id_user_penerima = 3;

		$id_status_pengajuan = 2;
        $id_user_pengirim = $this->session->userdata('id');
        $file_name = md5($no_pengajuan.$keterangan);

		// echo $no_pengajuan;
		// echo "<br>";
		// echo $keterangan;
		// echo "<br>";
		// echo $id_bentuk_perjanjian;
		// echo "<br>";
		// echo $id_jenis_pengajuan;
		// echo "<br>";
		// echo $id_jenis_pengajuan;
		// echo "<br>";
		// echo $id_negara_asal_pengajuan;
		// echo "<br>";
		// echo $id_kategori_kerjasama;
		// echo "<br>";
		// echo $id_user_penerima;
		// echo "<br>";
		// echo $id_user_pengirim;
		// echo "<br>";
		// die();

		$path = './assets/data_pengajuan/mitra/';

		$this->load->library('upload');
		$config['upload_path'] = './assets/data_pengajuan/mitra';
		$config['allowed_types'] = 'pdf|docx';
		$config['max_size'] = '4048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name;
		$this->upload->initialize($config);
		$file_data_pengajuan_upload = $this->upload->do_upload('file_data_pengajuan');

			if($file_data_pengajuan_upload){
				$file_data_pengajuan = $this->upload->data();
			}else{
				$this->session->set_flashdata('error_file_data_pengajuan','error_file_data_pengajuan');
				redirect('data_pengajuan/view_mitra');
			}
		
			$hasil = $this->m_data_pengajuan->tambah_data_pengajuan($no_pengajuan, $keterangan, $id_bentuk_perjanjian, $id_jenis_pengajuan, $file_data_pengajuan['file_name'],$id_negara_asal_pengajuan, $id_status_pengajuan, $id_kategori_kerjasama, $id_user_penerima, $id_user_pengirim );
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}

			redirect('Form_pengajuan/form_pengajuan_mitra');

		}else{
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
		}
	}
    
    public function form_pengajuan_anggota()
	{
		$this->load->view('anggota/form_pengajuan');
	}

}