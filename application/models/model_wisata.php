<?php

    class Model_wisata extends CI_Model{
        public function tampil_wisata()
        {
            return $this->db->get('wisata');
        }

        public function tambah_wisata($data, $table)
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
        $this->db->update('wisata', $data);
    }

        public function hapus_wisata($where, $table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

    }