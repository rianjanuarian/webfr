<?php

class Model_admin extends CI_Model{
    public function tampil_admin()
    {
        return $this->db->get('admin');
    }
}