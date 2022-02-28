<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_implementasi_kerja_sama');
		$this->load->model('m_data_pengajuan');
		$this->load->model('m_kerja_sama_eksternal');
		$this->load->model('m_kerja_sama_internal');
		$this->load->model('m_user');

		
	}

	public function dashboard_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['user'] = $this->session->all_userdata();
		$data['total_data_pengajuan'] = $this->m_data_pengajuan->jumlah_data_pengajuan($this->session->userdata('id'))->result_array();
		$data['total_implementasi_kerja_sama'] = $this->m_implementasi_kerja_sama->jumlah_implementasi_kerja_sama()->result_array();
		$data['total_kerja_sama_eksternal'] = $this->m_kerja_sama_eksternal->jumlah_kerja_sama_eksternal()->result_array();
		$data['total_kerja_sama_internal'] = $this->m_kerja_sama_internal->jumlah_kerja_sama_internal()->result_array();
		// $data['data_chart'] = $this->m_user->count_all_table()->result_array();
		// echo var_dump($data['data_chart']);
		// die();
		$this->load->view('admin/admin_dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function chart_Data(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1 OR $this->session->userdata('id_user_level') == 2 ) {

			
			$data['data_chart'] = $this->m_user->count_all_table($this->session->userdata('id'))->result_array();

			// echo var_dump($data['data_chart']);
			// die();
			$callback = array(
				'data' => [
					['total'=>$data['data_chart'][0]['count1']],
					['total'=>$data['data_chart'][0]['count2']],
					['total'=>$data['data_chart'][0]['count3']],
					['total'=>$data['data_chart'][0]['count4']],
					]
			);
		
			header('Content-Type: application/json');
			echo json_encode($callback); 
	
			}else{
	
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
	
			}
	}

	
	public function chart_Data_Anggota(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1 OR $this->session->userdata('id_user_level') == 2 ) {

			
			$data['data_chart'] = $this->m_user->count_all_table_all()->result_array();

			// echo var_dump($data['data_chart']);
			// die();
			$callback = array(
				'data' => [
					['total'=>$data['data_chart'][0]['count1']],
					['total'=>$data['data_chart'][0]['count2']],
					['total'=>$data['data_chart'][0]['count3']],
					['total'=>$data['data_chart'][0]['count4']],
					]
			);
		
			header('Content-Type: application/json');
			echo json_encode($callback); 
	
			}else{
	
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
	
			}
	}

	public function dashboard_mitra()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

			$data['user'] = $this->session->all_userdata();
			$data['total_data_pengajuan'] = $this->m_data_pengajuan->jumlah_data_pengajuan($this->session->userdata('id'))->result_array();
			$data['total_implementasi_kerja_sama'] = $this->m_implementasi_kerja_sama->jumlah_implementasi_kerja_sama()->result_array();
			$data['total_kerja_sama_eksternal'] = $this->m_kerja_sama_eksternal->jumlah_kerja_sama_eksternal()->result_array();
			$data['total_kerja_sama_internal'] = $this->m_kerja_sama_internal->jumlah_kerja_sama_internal()->result_array();
			$this->load->view('mitra/mitra_dashboard', $data);
	
			}else{
	
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
	
			}
	}

	public function dashboard_anggota()
	{
		$data['total_data_pengajuan'] = $this->m_data_pengajuan->jumlah_data_pengajuan_all()->result_array();
		$data['total_implementasi_kerja_sama'] = $this->m_implementasi_kerja_sama->jumlah_implementasi_kerja_sama()->result_array();
		$data['total_kerja_sama_eksternal'] = $this->m_kerja_sama_eksternal->jumlah_kerja_sama_eksternal()->result_array();
		$data['total_kerja_sama_internal'] = $this->m_kerja_sama_internal->jumlah_kerja_sama_internal()->result_array();
		$this->load->view('anggota/anggota_dashboard', $data);
	}
}