<?php
class Event_cntr extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('m_event');
	}

	// public function viewBuyTiket(){
		
	// }

	public function savedata()
	{
		$id_event = substr($this->input->post('judul'), 0, 5).random_int(0, 99999);
		$npm = $this->session->npm;
		$kategori =$this->input->post('kategori');
		$judul =$this->input->post('judul');
		$desk =$this->input->post('desk');
		$image =$this->input->post('image');
		$harga =$this->input->post('harga');
		$stok =$this->input->post('stok');
		$rekening =$this->input->post('rekening');

		$dataForm = array(
			'id_event' => $id_event,
			'npm_Delegator' => $npm,
			'kategori_event' => $kategori,
			'judul_event' => $judul,
			'Deskripsi_event' => $desk,
			'image_event' => $image,
			'harga' => $harga,
			'stok' => $stok,
			'no_rek' => $rekening
		);

		if($this->m_event->saverecords($dataForm)){
			redirect('Home/pilih');
		}else{
			echo "Gagal menambahkan data";
		}
	}
	public function save_tiket()
	{
		$kd_Transaksi = random_int(1,5).random_int(0, 99999);
		$ID_Event = $this->input->post('id_event'); 
		$nama_pembeli =$this->input->post('nama_pembeli');
		$no_identitas =$this->input->post('no_identitas');
		$telp=$this->input->post('telp');
		$email_pembeli =$this->input->post('email_pembeli');
		$jumlah_tiket=$this->input->post('jumlah_tiket');

		$dataForm = array(
			'kd_Transaksi' => $kd_Transaksi,
			'ID_Event' => $ID_Event,
			'nama_pembeli' => $nama_pembeli,
			'no_identitas' => $no_identitas,
			'telp' => $telp,
			'email_pembeli' => $email_pembeli,
			'jumlah_tiket' => $jumlah_tiket
		);

		if($this->m_event->savetiket($dataForm)){
			redirect('Home/Event');
		}else{
			echo "Gagal menambahkan data";
		}
	}

	public function editdata()
	{
		$id_event = $this->input->post('id_event');
		$npm_Delegator = $this->session->npm;
		$kategori_event =$this->input->post('kategori');
		$judul_event =$this->input->post('judul');
		$Deskripsi_event=$this->input->post('desk');
		$image_event =$this->input->post('image');
		$harga =$this->input->post('harga');
		$stok =$this->input->post('stok');
		$no_rek =$this->input->post('Rekening');

		$dataForm = array(
			'id_event' => $id_event,
			'npm_Delegator' => $npm_Delegator,
			'kategori_event' => $kategori_event,
			'judul_event' => $judul_event,
			'Deskripsi_event' => $Deskripsi_event,
			'image_event' => $image_event,
			'harga' => $harga,
			'stok' => $stok,
			'no_rek' => $no_rek

		);

		if($this->m_event->editrecords($dataForm)){
			redirect('Home/pilih');
		}else{
			echo "Gagal mengedit data";
		}
	}
	function deletedata($id_event){
        
        if($this->m_event->deleterecords($id_event)){
            redirect('Home/EventManage');
        }else{
            echo 'Failed';
        }
    }

	function getEvent($id_event){
		$data['event'] = $this->m_event->getData($id_event);
		$this->load->view('event', $data);
	}
}
?>