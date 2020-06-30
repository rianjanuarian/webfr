<?php

class Model_paket extends CI_Model{
    public function tampil_paket(){
        $data= $this->db->query("SELECT id_katalog, nama_katalog, transport.nama_transport, penginapan.nama_hotel, wisata.nama_wisata, harga_katalog, status 
        FROM katalog, penginapan, transport, wisata 
        WHERE katalog.id_transport = transport.id_transport AND katalog.id_hotel=penginapan.id_hotel AND katalog.id_wisata=wisata.id_wisata");
        return $data;
        //return $this->db->get('katalog');
        //return $this->db->get('transport');
        //return $this->db->get('penginapan');
        //return $this->db->get('wisata');
    }

    public function tambah_paket($data, $table){       
        $this->db->insert($table, $data);
    }

    public function combotrans()
    {
        $data = $this->db->query("SELECT id_transport, nama_transport FROM transport");
        return $data;
    }

    public function comboinap(){
        $data = $this->db->query("SELECT id_hotel, nama_hotel FROM penginapan");
        return $data;
    }

    public function wisata(){
        $data = $this->db->query("SELECT id_wisata, nama_wisata FROM wisata");
        return $data;
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
