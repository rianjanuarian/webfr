<?php

class Model_hotel extends CI_Model{
    public function tampil_penginapan()
    {
        return $this->db->get('penginapan');
    }
    public function tambah_penginapan($data, $table)
    {       
        $this->db->insert($table, $data);
    }
    public function edit_penginapan($where, $table)
    {
        return $this->db->get_where($table, $where); //tadinya tabel
    }
    public function update_penginapan($where,$data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data); //tadinya tabel
    }
}