<?php
class Signup_cntr extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('m_signup');
	}

	public function savedata()
	{
		//load registration view form
		$this->load->helper('url');
		$this->load->view('signup');
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$a=$this->input->post('npm');
		$b=$this->input->post('nama');
		$c=$this->input->post('email');
		$d=$this->input->post('no_telpon');
		$e=$this->input->post('nama_univ');
		$f=$this->input->post('kd_univ');
		$g=$this->input->post('username');
		$h=$this->input->post('password');
		
//call saverecords method of Hello_Model and pass variables as parameter
		$this->m_signup->saverecords($a,$b,$c,$d,$e,$f,$g,$h);	
		}
	}
}
?>