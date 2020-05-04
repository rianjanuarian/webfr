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
<<<<<<< HEAD
        return $this->db->get_where($table, $where); //tadinya tabel
=======
        return $this->db->get_where($table, $where);
>>>>>>> 5e1d59f5bed7317730e26236749666f281a15fad
    }
    public function update_admin($where,$data, $table)
    {
        $this->db->where($where);
<<<<<<< HEAD
        $this->db->update($table, $data); //tadinya tabel
=======
        $this->db->update($table, $data);
    }
    public function hapus_admin($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
>>>>>>> 5e1d59f5bed7317730e26236749666f281a15fad
    }
}