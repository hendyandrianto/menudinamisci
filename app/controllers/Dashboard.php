<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	public function index(){
		$isi['namamenu'] = "";
		$isi['page'] = "dashboard";
		$isi['kelas'] = "dashboard";
		$isi['link'] = 'dashboard';
		$isi['halaman'] = "Dashboard";
		$isi['judul'] = "Halaman Dashboard";
		$isi['content'] = "dashboard/welcome";
		$this->load->view("dashboard/dashboard_view",$isi);
	}
	public function log_out(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
