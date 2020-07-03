<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class katalog_model extends CI_Model {
    public $table = 'katalog';
    public $idData = 'id_katalog';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        
        $this->db->select('*');
 
        $this->db->from("katalog");

        $query = $this->db->get();
     
        return $query->result_array();
    }

    public function get_total()
    {
        return $this->db->count_all("katalog");
    }

    public function getDataGambar($limit = FALSE, $offset = FALSE)
    {
        if($limit)
        {
            $this->db->limit($limit, $offset);
        }
        
        return $this->db->get("katalog");
    }

     public function get_by_id($idData)
    {
        $this->db->where($this->idData, $idData);
        return $this->db->get($this->table)->row();
    }


    public function getDataWhereId($id)
    {
        $this->db->select('*');
        $this->db->from("katalog");
        $this->db->where('id_katalog',$id);
        return $this->db->get()->result_array();
    }

    public function insertData($upload_name)
    {

        $data = $this->input->post();

        $data['gambar_katalog'] = $upload_name;

        $this->db->insert("katalog",$data);
    }

    public function updateData($id,$upload_name=null)   
    {
        $data = $this->input->post();

        if($upload_name!=null)
            $data['gambar_katalog'] = $upload_name;

        $this->db->where('id_katalog',$id);

        if($this->db->update("katalog",$data)){
            return "Berhasil";
        }
    }

    public function hapusData($id)
    {

        $this->db->where('id_katalog',$id);

        if($this->db->delete("katalog")){
            return "Berhasil";
        }
    }

    public function upload(){
        $config['upload_path'] = './img/gambarkatalog/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image')){
            $return = array('result' => 'success', 'file' => $this->upload->data(),
            'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' =>
            $this->upload->display_errors());
            return $return;
        }
    }
}
