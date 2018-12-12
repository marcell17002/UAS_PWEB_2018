		<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_login extends CI_Model{
		public function ambillogin($datalogin){

			$query = $this->db->get_where('Delegator', $datalogin, 1);
			
			if($query->num_rows()>0){
				foreach ($query->result() as $row ) {
					$sess = array(
						'username' => $row->username,
						'nama' => $row->nama,
						'npm' => $row->npm
					);
				}
				$this->session->set_userdata($sess);
				redirect('Home/manajer');
			}
			else{
				$this->session->set_flashdata('info','Maaf username dan password anda salah , atau belum mendaftar');
				redirect('Home/login');
			}
		}
		public function keamanan(){
			$username = $this->session->userdata('username');
			if(empty($username)){
				$this->session->sess_destroy();
				redirect('Home/login');
			}
		}
	}
?>

