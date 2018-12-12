<?php
class m_news extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function getNewsbyID($data){
        // return $this->db->get_where('News', $data);
        $query = $this->db->query("SELECT * FROM News WHERE id_news='$data'");
        return $query->result();
    }

    public function get($id_news = null){
        if($id_news!= null){
            $query = $this->db->get_where('News',['id_news' => $id_news]);
            // $query = $this->db->select('News')
            //         ->where('id_news', $id)
            //         ->limit(10, 20)
            //         ->get('mytable');
            return $query->result_array();
        }

        $query = $this->db->get('News');
        return $query->result_array();
    }
    function data($number,$offset){
        return $query = $this->db->get('News',$number,$offset)->result();       
    }
 
    function jumlah_data(){
        return $query = $this->db->get('News')->num_rows();
    }
}
?>