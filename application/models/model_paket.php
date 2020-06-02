<?php

class Model_paket extends CI_Model{
    public function tampil_paket(){
        return $this->db->get('katalog');
    }

    public function tambah_paket($data, $table){       
        $this->db->insert($table, $data);
    }

    public function edit($where, $table){
        return $this->db->get_where($table, $where);
    }
    
    public function update_paket($where,$data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_paket($where, $table) 
    {   
        $this->db->where($where);
        $this->db->delete($table);
    }
    
}
