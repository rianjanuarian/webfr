<?php
class Model_penginapan extends CI_Model{
    public function tampil_data(){
          return $this->db->get('penginapan'); // memanggil dari database tabel tb_barang
    }

    public function tampil_data2($where)
    {
        return $this->db->get('penginapan', $where);
    }

    public function tambah_penginapan($data, $table){ // menjalankan fungsi tambah barang
        $this->db->insert($table, $data); // memasukkan ke database
  }
  function edit($where,$table){ // mengedit data dengan menyeleksi query untuk mengedit data		
      return $this->db->get_where($table,$where);
  }
  public function update_data($table, $data, $where){ // mengedit data dengan menyeleksi query untuk mengedit data		
    
    $this->db->update($table,$data, $where);
  }
  public function hapus_data($where,$table){ // mengedit data dengan menyeleksi query untuk mengedit data		
      $this->db->where($where);
      $this->db->delete($table);
  }
  public function find($id){ // fungsi untuk menangkap id barang kemudian menampilkan di cart
      $result = $this->db->where('id_hotel', $id)
                        ->limit(1)
                        ->get('penginapan');
    if($result->num_rows() > 0) {
        return $result->row();
    }else{
        return array();
    }
  }
}