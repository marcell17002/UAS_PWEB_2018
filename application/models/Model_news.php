<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_news extends CI_Model{
		public function ambilnews($datanews){

			$query = $this->db->get_where('News', $datanews ,1);
			
			if($query->num_rows()>0){
				foreach ($query->result() as $row ) {
					$sess = array(
						'id_news' => $row->id_news,
						'kd_npm_Delegator' => $row->kd_npm_Delegator,
						'judul' => $row->judul,
						'Deskripsi' => $row->Deskripsi
					);
				}
				$this->session->set_userdata($sess);
				redirect('Home/manajer');
			}
			else{
				redirect('Home/pilih');
			}
		}
	}
?>

