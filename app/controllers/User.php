<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
  		parent::__construct();
		$this->load->model('model');
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
			$tah = 'user';
			$cekheula = $this->db->get_where('tbl_submenu',array('slink'=>$tah))->result();
			foreach ($cekheula as $xxx) {
				$sstatus = $xxx->sstatus;
			}
			if($sstatus=='1'){	
				$amenu = $this->model->cekmenu($tah);
		 		if($this->session->userdata('level')=='0' || $amenu==TRUE){	
					$isi['kelas'] = "tools";
					$isi['namamenu'] = "User";
					$isi['page'] = "user";
					$isi['link'] = 'user';
					$isi['actionhapus'] = 'hapus';
					$isi['actionedit'] = 'edit';
					$isi['halaman'] = "Data User";
					$isi['judul'] = "Halaman Data User";
					$isi['content'] = "user/user_view";
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
	public function add(){
		if($this->session->userdata('login')==TRUE){
			$tah = 'user';
			$cekheula = $this->db->get_where('tbl_submenu',array('slink'=>$tah))->result();
			foreach ($cekheula as $xxx) {
				$sstatus = $xxx->sstatus;
			}
			if($sstatus=='1'){	
				$amenu = $this->model->cekmenu($tah);
		 		if($this->session->userdata('level')=='0' || $amenu==TRUE){	
					$isi['kelas'] = "tools";
					$isi['namamenu'] = "User";
					$isi['page'] = "user";
					$isi['link'] = 'user';
                    $isi['cek'] = "add";
					$isi['actionhapus'] = 'hapus';
					$isi['actionedit'] = 'edit';
					$isi['halaman'] = "Add Data User";
					$isi['action'] = "proses_add";
					$isi['tombolsimpan'] = "Simpan";
					$ahhhhhh = $this->db->query("SELECT SUBSTR(MAX(kode),-6) as nona FROM tbl_username")->result();
			 		foreach ($ahhhhhh as $zzz) {
			 			$xx = substr($zzz->nona, 3, 6); 
			 		}
			 		if($xx==''){
			 			$newID = 'U-0001';
			 		}else{
			 			$noUrut = (int) substr($xx, 1, 4);
			 			$noUrut++;
			 			$newID = "U-" . sprintf("%04s", $noUrut);
			 		}
			 		$isi['default']['kode'] = $newID;
					$isi['tombolbatal'] = "Batal";
					$isi['judul'] = "Halaman Add Data User";
					$isi['content'] = "user/form_add";
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
	public function proses_add(){
		if($this->session->userdata('login')==TRUE){
			$tah = 'user';
			$cekheula = $this->db->get_where('tbl_submenu',array('slink'=>$tah))->result();
			foreach ($cekheula as $xxx) {
				$sstatus = $xxx->sstatus;
			}
			if($sstatus=='1'){	
				$amenu = $this->model->cekmenu($tah);
		 		if($this->session->userdata('level')=='0' || $amenu==TRUE){	
					$kode = $this->input->post('kode');
					$nama = $this->input->post('nama');
					$pass = md5($this->input->post('pass'));
					$simpanuser = array('kode'=>$kode,
						'nama'=>$nama,
						'username'=>$kode,
						'password'=>$pass,
						'level'=>'1');
					$this->db->insert('tbl_username',$simpanuser);
					$out ="";
                    $smenu = $this->input->post('submenu');
                    for ($i=0; $i < count($smenu) ; $i++) { 
                        $out .= $smenu[$i] . "|";
                    }
                    $in = "";
                    $smenux = $this->input->post('submenux');
                    for ($ix=0; $ix < count($smenux) ; $ix++) { 
                        $in .= $smenux[$ix] . "|";
                    }
                    $simpanmenu = array('kode'=>$kode,
                    	'menu'=>$out,
                    	'menux'=>$in);
                    $this->db->insert('tbl_usermenu',$simpanmenu);
                    redirect('user','refresh');
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
	public function edit($kode=NULL){
		if($this->session->userdata('login')==TRUE){
			$tah = 'user';
			$cekheula = $this->db->get_where('tbl_submenu',array('slink'=>$tah))->result();
			foreach ($cekheula as $xxx) {
				$sstatus = $xxx->sstatus;
			}
			if($sstatus=='1'){	
				$amenu = $this->model->cekmenu($tah);
		 		if($this->session->userdata('level')=='0' || $amenu==TRUE){	
			 		$isi['default']['kode'] = $kode;
			 		$ckdata = $this->db->get_where('tbl_username',array('kode'=>$kode))->result();
			 		if(count($ckdata)>0){
			 			$umenu = $this->db->get_where('tbl_usermenu',array('kode'=>$kode))->result();
	                    if(count($umenu)>0){
				 			foreach ($ckdata as $row) {
				 				$isi['default']['nama'] = $row->nama;
				 			}
	                        foreach ($umenu as $key) {
	                            $isi['menunya'] = $key->menu;
	                            $isi['submenu'] = $key->menux;
	                        }
	                        $isi['cek'] = "edit";
							$isi['kelas'] = "tools";
							$isi['namamenu'] = "User";
							$isi['page'] = "user";
							$isi['link'] = 'user';
							$isi['halaman'] = "Edit Data User";
							$isi['action'] = "../proses_edit";
							$isi['tombolsimpan'] = "Edit";
							$isi['tombolbatal'] = "Batal";
							$isi['judul'] = "Halaman Edit Data User";
							$isi['content'] = "user/form_add";
							$this->load->view("dashboard/dashboard_view",$isi);
	                    }else{
	                        ?>
	                        <script type="text/javascript">
		                        alert("Ups. . . Ni Rajanya Akses Bro !");
		                        window.location.href = "<?php echo base_url();?>user";
	                        </script>
	                        <?php
	                    }
			 		}else{
			 			redirect('error','refresh');
			 		}
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
	public function proses_edit(){
		if($this->session->userdata('login')==TRUE){
			$tah = 'user';
			$cekheula = $this->db->get_where('tbl_submenu',array('slink'=>$tah))->result();
			foreach ($cekheula as $xxx) {
				$sstatus = $xxx->sstatus;
			}
			if($sstatus=='1'){	
				$amenu = $this->model->cekmenu($tah);
		 		if($this->session->userdata('level')=='0' || $amenu==TRUE){	
					$kode = $this->input->post('kode');
					$nama = $this->input->post('nama');
					$pass = md5($this->input->post('pass'));
					if($this->input->post('pass')!=""){
						$updateuser = array('kode'=>$kode,
							'nama'=>$nama,
							'username'=>$kode,
							'password'=>$pass,
							'level'=>'1');
					}else{
						$updateuser = array('kode'=>$kode,
							'nama'=>$nama,
							'username'=>$kode,
							'level'=>'1');
					}
					$this->db->where('kode',$kode);
					$this->db->update('tbl_username',$updateuser);
					$this->updatemenu($kode);
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
	public function updatemenu($kode=NULL){
		$out ="";
        $smenu = $this->input->post('submenu');
        for ($i=0; $i < count($smenu) ; $i++) { 
            $out .= $smenu[$i] . "|";
        }
        $in = "";
        $smenux = $this->input->post('submenux');
        for ($ix=0; $ix < count($smenux) ; $ix++) { 
            $in .= $smenux[$ix] . "|";
        }
        $updatemenu = array('kode'=>$kode,
        	'menu'=>$out,
        	'menux'=>$in);
        $this->db->where('kode',$kode);
        $this->db->update('tbl_usermenu',$updatemenu);
        redirect('user','refresh');
	}
	public function hapus($kode=NULL){
		if($this->session->userdata('login')==TRUE){
			$tah = 'user';
			$cekheula = $this->db->get_where('tbl_submenu',array('slink'=>$tah))->result();
			foreach ($cekheula as $xxx) {
				$sstatus = $xxx->sstatus;
			}
			if($sstatus=='1'){	
				$amenu = $this->model->cekmenu($tah);
		 		if($this->session->userdata('level')=='0' || $amenu==TRUE){	
					$ckdata = $this->db->get_where('tbl_username',array('kode'=>$kode))->result();
					if(count($ckdata)>0){
						$ckdatax = $this->db->get_where('tbl_usermenu',array('kode'=>$kode))->result();
						if(count($ckdatax)>0){
							$this->db->where('kode',$kode);
							$this->db->delete('tbl_username');
							$this->hapus_usermenu($kode);
						}else{
							redirect('error','refresh');
						}
					}else{
						redirect('error','refresh');
					}
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
	public function hapus_usermenu($kode=NULL){
		$this->db->where('kode',$kode);
		$this->db->delete('tbl_usermenu');
		redirect('user','refresh');
	}
}
