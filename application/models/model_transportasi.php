<?php

class Model_transportasi extends CI_Model{
    public function tampil_transportasi()
    {
        return $this->db->get('transport');
    }
    public function tambah_transportasi($data, $table)  
    {
        $this->db->insert($table, $data);
    }
    public function get_edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function get_update($data, $where)
    {
        $this->db->where($where);
        $this->db->update('transport', $data);
    }

    public function hapus_transport($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}