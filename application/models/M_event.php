<?php
class M_event extends CI_Model 
{
	function __construct()
  {
  	$this->load->database();
  }
  function get($id_event=null){
    if ($id_event!=null) {
      $query = $this->db->get_where('Event',['id_event'=>$id_event]);
      return $query->result_array();
    }
    $query=$this->db->get('Event');
    return $query->result_array();
  }
  
	function saverecords($dataForm){
		return $this->db->insert('Event', $dataForm);
	}
  function savetiket($dataForm){
    return $this->db->insert('Transaksi', $dataForm);
  }
  function editrecords($dataForm){
    return $this->db->replace('Event', $dataForm);
  }
  function deleterecords($id_event){
    $this->db->where('id_event',$id_event);
    return $this->db->delete('Event');
  }
  public function getEventNPM(){
    $npm = $this->session->npm;
    $data = array(
      'npm_Delegator' => $npm
    );

    $query = $this->db->get_where('Event', $data);
    return $query->result();
  }
  public function getEventbyID($data){
    $query = $this->db->query("SELECT * FROM Event WHERE id_event='$data'");
    return $query->result();
  }

}