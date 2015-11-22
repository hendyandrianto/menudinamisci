<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {
	public function __construct(){
  		parent::__construct();
	}
	function login($username,$password){
		$ceklogin = $this->db->query("SELECT * FROM tbl_username WHERE username = '$username' AND password = '$password'")->result();
		if(count($ceklogin)>0){
		  	foreach($ceklogin as $rows){
		  		if($rows->level=='0'){
		  			$newdata = array('level'=>$rows->level,
		  				'login'=>TRUE,
		  				'kode'=>$rows->kode,
		  				'nama'=>$rows->nama);
		  		}else{
		  			$cekmenu = $this->db->get_where('tbl_usermenu',array('kode'=>$rows->kode))->result();	
		  			if(!empty($cekmenu)){
		  				foreach ($cekmenu as $key) {
		  					$hak = $key->menu;
		  					$hax = $key->menux;
		  				}
		  			}else{
		  				$hak = "";
		  				$hax = "";
		  			}
		  			$newdata = array('level'=>$rows->level,
		  				'login'=>TRUE,
		  				'priv'=>$hak,
		  				'privx'=>$hax,
		  				'kode'=>$rows->kode,
		  				'nama'=>$rows->nama);
		  		}
	  		}
			$this->session->set_userdata($newdata);
			return true;
	 	}
		return false;
	}
	public function cekmenu($namamenu){
		$smenu = $this->db->get_where('tbl_submenu',array('slink'=>$namamenu,'sstatus'=>'1'))->result();
		foreach ($smenu as $key ) {
 			$menuid = trim($key->smenu_id);
 		}
 		$hak = explode("|",$this->session->userdata('priv'));
 		$out = "";
 		for($i=0;$i<count($hak);$i++){
	 		if($hak[$i]===$menuid){
	 				$out .= "true|";
	 		}else{
	 			$out .= "false|";
	 		}
 		} 
 		if(strpos($out,'true') !== false) {
    		return TRUE;
		}else{
			return FALSE;
		}
 	}
 	public function cekmenux($namamenu){
		$smenu = $this->db->get_where('tbl_submenux',array('slinkx'=>$namamenu,'sstatusx'=>'1'))->result();
		foreach ($smenu as $key ) {
 			$menuid = trim($key->smenu_id);
 		}
 		$hak = explode("|",$this->session->userdata('privx'));
 		$out = "";
 		for($i=0;$i<count($hak);$i++){
	 		if($hak[$i]===$menuid){
	 				$out .= "true|";
	 		}else{
	 			$out .= "false|";
	 		}
 		} 
 		if(strpos($out,'true') !== false) {
    		return TRUE;
		}else{
			return FALSE;
		}
 	}
}