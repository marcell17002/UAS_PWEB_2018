<?php
class Model_tampilberita extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function get($id_news = null){
        if($id_news!= null){
            $kondisi = "kd_npm_Delegator = '140810170034'";
            $this->db->select('*');
            $this->db->from('News');
            $this->db->where($kondisi);
            $query = $this->db->get();

            // $npm = $this->session->npm;
            // $data = array('kd_npm_Delegator' => $npm );
            // $query = $this->db->get_where('News',$data);
            // $query = $this->db->select('News')
            //         ->where('id_news', $id)
            //         ->limit(10, 20)
            //         ->get('mytable');

            // $this->db->where('kd_npm_Delegator', $this->session->npm);
            // $this->db->select('News')->result_array();
            // // return $query->result_array();
             return $query->result_array();
        }

        $query = $this->db->get('News');
        return $query->result_array();
    }
}
?>