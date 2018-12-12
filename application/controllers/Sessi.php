<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class sessi  extends CI_controller{
		public function index(){
			$this->load->model('model_login');
			$this->model_login->keamanan();
			$this->load->view('welcome_message');
		}	
	}
?>