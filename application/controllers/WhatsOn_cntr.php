<?php
class WhatsOn_cntr extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	//load Model
	$this->load->model('M_WhatsOn');
	}

	public function savedata()
	{
		$id_news = substr($this->input->post('judul'), 0, 5).random_int(0, 99999);
		$kd_news_Delegator = $this->session->npm;
		$kategori =$this->input->post('kategori');
		$judul =$this->input->post('judul');
		$Deskripsi =$this->input->post('desk');
		$image =$this->input->post('image');

		$dataForm = array(
			'id_news' => $id_news,
			'kd_npm_Delegator' => $kd_news_Delegator,
			'kategori' => $kategori,
			'judul' => $judul,
			'Deskripsi' => $Deskripsi,
			'image' => $image
		);

		$query = $this->db->get_where('News', $dataForm, 1);
		if($this->M_WhatsOn->saverecords($dataForm)){
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
			redirect('Home/pilih');
		}else{
			echo "Gagal menambahkan data";
		}
	}

	

	public function editdata()
	{
		$id_news = $this->input->post('id_news');
		$kd_news_Delegator = $this->session->npm;
		$kategori =$this->input->post('kategori');
		$judul =$this->input->post('judul');
		$Deskripsi =$this->input->post('desk');
		$image =$this->input->post('image');

		$dataForm = array(
			'id_news' => $id_news,
			'kd_npm_Delegator' => $kd_news_Delegator,
			'kategori' => $kategori,
			'judul' => $judul,
			'Deskripsi' => $Deskripsi,
			'image' => $image
		);

		if($this->M_WhatsOn->editrecords($dataForm)){
			redirect('Home/pilih');
		}else{
			echo "Gagal mengedit data";
		}
	}

	function deletedata($id_news){
		
        if($this->M_WhatsOn->deleterecords($id_news)){
            redirect('Home/WhatsOnManage');
        }else{
            echo 'Failed';
        }

    }

	function getNews($id_news){
		$data['News'] = $this->m_WhatsOn->getData($id_news);
		$this->load->view('whatson', $data);
	}
}
?>