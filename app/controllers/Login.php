<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index(){
		if($this->session->userdata('login')==TRUE){
			redirect('dashboard','refresh');
		}else{
			$this->load->view('login/login_view');
		}
	}

	public function do_login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()==TRUE){
			$uname = $this->input->post('username');
			$pass = md5($this->input->post('password'));
			$result = $this->model->login($uname,$pass);	
			if($result==TRUE){
				redirect('dashboard','refresh');
			}else{
				redirect('login','refresh');
			}
		}else{
			redirect('login','refresh');
		}
	}

}
