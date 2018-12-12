<?php
class M_WhatsOn extends CI_Model 
{
	public function get($datanews){

			$query = $this->db->get_where('News', $datanews, 1);
			
			if($query->num_rows()>0){
				foreach ($query->result() as $row ) {
					$sess = array(
						'id_news' => $id_news,
						'kd_npm_Delegator' => $kd_npm_Delegator,
						'judul' => $judul,
						'Deskripsi' => $Deskripsi
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

	function getNewsNPM(){
		$npm = $this->session->npm;
		$data = array(
			'kd_npm_Delegator' => $npm
		);

		$query = $this->db->get_where('News', $data);
		return $query->result();
	}
	

	function saverecords($dataForm){
		return $this->db->insert('News', $dataForm);
	}
	function editrecords($dataForm){
		// $this->db->where('id_news',$id_news);
		// return $this->db->replace('News');

    	return $this->db->replace('News', $dataForm);
	}
	function deleterecords($id_news){
		$this->db->where('id_news',$id_news);
        return $this->db->delete('News');
    }
}