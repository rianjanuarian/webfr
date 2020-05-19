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

        public function hapus_wisata($where, $table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }

    }