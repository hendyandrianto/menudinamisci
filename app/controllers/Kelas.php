<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Controller {
	public function __construct(){
  		parent::__construct();
 	}
	public function index(){
		if($this->session->userdata('login')==TRUE){
			$this->_content();
		}else{
			redirect("login","refresh");
		}
	}
	public function _content(){
		if($this->session->userdata('login')==TRUE){
			$tah = 'kelas';
			$cekheula = $this->db->get_where('tbl_submenux',array('slinkx'=>$tah))->result();
			foreach ($cekheula as $xxx) {
				$sstatus = $xxx->sstatusx;
			}
			if($sstatus=='1'){	
				$amenu = $this->model->cekmenux($tah);
		 		if($this->session->userdata('level')=='0' || $amenu==TRUE){	
					$isi['kelas'] = "ref_data";
					$isi['namamenu'] = "Ref. Akademik";
					$isi['page'] = "kelas";
					$isi['link'] = 'kelas';
					$isi['actionhapus'] = 'hapus';
					$isi['actionedit'] = 'edit';
					$isi['halaman'] = "Data Kelas";
					$isi['judul'] = "Halaman Data Kelas";
					$isi['content'] = "kelas/kelas_view";
					$this->load->view("dashboard/dashboard_view",$isi);
				}else{
					redirect('error','refresh');
				}
			}else{
				redirect('error','refresh');
			}
		}else{
			redirect('login','refresh');
		}
	}
}
