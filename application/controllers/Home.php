<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class home extends CI_controller{
		public function index(){
			
			$this->load->view('tugas');
			
		}
		//login
		public function login(){
			
			$this->load->view('login');
		}
		public function cek_login(){
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$datalogin = array(
				'username' => $username,
				'password' => $password
			);

			$this->load->model('model_login');
			$this->model_login->ambillogin($datalogin);
		}
		public function logout(){
			
			$this->session->set_userdata('username',FALSE);
			$this->session->sess_destroy();
			redirect('Home/login');
		}

		//signup
		public function signup(){
			
			$this->load->view('signup');
		}
		//
		public function WhatsOn(){
			

			$id_news = $this->input->get('id_news');
	        $this->load->model('m_news');
	        $data['response'] = $this->m_news->get($id_news);
			$this->load->view('WhatsOn',$data);
		}
		public function Event(){
			
			$id_event = $this->input->get('id_event');
        	$this->load->model('m_event');
        	$data['response']=$this->m_event->get($id_event);
  			$this->load->view('Event',$data);

		}
		public function konten($id_news){
			$dataID = array(
				'id_news' => $id_news,
			);
			$this->load->model('M_news');
			$data['newsbyID'] = $this->M_news->getNewsbyID($id_news);
  			$this->load->view('konten', $data);

		}
		public function buyticket($id_event){
			// $dataID = array(
			// 	'id_event' => $id_event,
			// );
			// $this->load->model('m_event');
			// $data['eventbyID'] = $this->m_event->getEventbyID($id_event);
  	// 		$this->load->view('buyticket',$data);
			// $id_event = $this->input->get('id_event');
        	$this->load->model('m_event');
        	$data['response']=$this->m_event->getEventbyID($id_event);

			$this->load->model('m_event');
			$data['dataEvent'] = $this->m_event->getEventNPM();
			$this->load->view('buyticket',$data);

		}
		public function AboutUs(){
			
			$this->load->view('AboutUs');
		}
		//delegator
		public function manajer(){
			
			$this->load->view('manajer');
		}
		public function EventManage(){
	        $this->load->model('m_event');
			$data['eventNPM'] = $this->m_event->getEventNPM();
	        $this->load->view('EventManage',$data); 
		}
		public function WhatsOnManage(){
			$this->load->model('m_WhatsOn');
			$data['newsNPM'] = $this->m_WhatsOn->getNewsNPM();
	        $this->load->view('WhatsOnManage',$data); 
		}
		public function AboutUsManage(){
			
			$this->load->view('AboutUsManage');
		}
		public function pilih(){
			
			$this->load->view('pilih');
		}
		//
		public function dashboard(){

			$this->load->view('dashboard');
		}
		
		public function dashboarde(){
			
			$this->load->view('dashboarde');
		}
		
		public function News_edit(){
			$this->load->model('m_WhatsOn');
			$data['dataNews'] = $this->m_WhatsOn->getNewsNPM();
			$this->load->view('News_edit',$data);
		}
		public function Event_edit(){
			$this->load->model('m_event');
			$data['dataEvent'] = $this->m_event->getEventNPM();
			$this->load->view('Event_edit', $data);
		}

		
	}
	
?> 