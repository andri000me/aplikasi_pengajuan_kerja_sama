<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {

	public function index()
	{
		$this->load->view('mitra/mitra_dashboard');
	}
}
