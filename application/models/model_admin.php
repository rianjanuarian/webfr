<?php

class Model_admin extends CI_Model{
    public function tampil_admin()
    {
        return $this->db->get('admin');
    }
    public function tambah_admin($data, $table)
    {       
        $this->db->insert($table, $data);
    }
    public function edit_admin($where, $table)
    {
        return $this->db->get_where($tabel, $where);
    }
    public function update_admin($where,$data, $table)
    {
        $this->db->where($where);
        $this->db->update($tabel, $data);
    }
}