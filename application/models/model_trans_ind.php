<?php
Class Model_trans_ind extends CI_Model{
    //untuk transaksi homestay
    public function tampil_trans_home()
    {
        return $this->db->get('transaksi_hotel');
    }
    public function edit_home($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_homestay($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_home($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //untuk transaksi transport
    public function tampil_trans_sport()
    {
        return $this->db->get('transaksi_transport');
    }
    public function edit_trans($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_trans($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_trans($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //untuk transaksi wisata
    public function tampil_trans_wis()
    {
        return $this->db->get('transaksi_wisata');
    }
    public function edit_wisata($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_wisata($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_wisata($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}
?>