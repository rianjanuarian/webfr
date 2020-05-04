<?php

class Dt_penginapan extends CI_Controller{
    public function index()
    {
        $data['penginapan'] = $this->model_hotel->tampil_penginapan()->result(); // ini harusnya model penginapan, tapi gak bisa
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_penginapan' , $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah()
    {
        $nama_hotel       =$this->input->post('nama_hotel'); // menangkap hasil inputan dari form
        $alamat_hotel       =$this->input->post('alamat_hotel'); // menangkap hasil inputan dari form
        $fasilitas_hotel      =$this->input->post('fasilitas_hotel'); // menangkap hasil inputan dari form
        $harga_hotel       =$this->input->post('harga_hotel'); // menangkap hasil inputan dari form
        $gambar_hotel     =$_FILES['gambar']['name']; // menangkap hasil inputan dari form
        if ($gambar_hotel=''){}else {
            $config ['upload_path']='./upload';
            $config ['allowed_types']='jpg|jpeg|png|gift';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar_hotel')){
                echo "Gambar Gagal!";
            }else {
                $gambar_hotel=$this->upload->data('file_name');
            }
        }
        $data=array( // memasukkan data inputan kedalam array
            'nama_hotel'          =>$nama_hotel, 
            'alamat_hotel'          =>$alamat_hotel,
            'gambar_hotel'          =>$gambar_hotel,
            'fasilitas_hotel'       =>$fasilitas_hotel,
            'harga_hotel'          =>$harga_hotel
        );
        $this->model_hotel->tambah_penginapan($data, 'penginapan'); // memanggil model barang dengan fungsi tambah barang , memasukkan array ke dalam tabel tb_barang
        redirect('dt_penginapan/index');
    }

    public function edit($id)  
    {
            $where = array('id_hotel' => $id); // menangkap data berdasarkan id yang dikirim dari link edit  kemudian dijadikan array
            $data['penginapan'] = $this->model_hotel->edit_penginapan($where,'penginapan')->result(); //function edit_data digunakan untuk menangkap data dari model barang. result() untuk me-regenerate hasil query menjadi array
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_data_penginapan' , $data);
            $this->load->view('templates/footer');
    }

    public function update_penginapan()
    {
        $id_hotel =$this->input->post('id_hotel');
        $nama_hotel =$this->input->post('nama_hotel');
        $alamat_hotel =$this->input->post('alamat_hotel');
        $fasilitas_hotel =$this->input->post('fasilitas_hotel');
        $harga_hotel =$this->input->post('harga_hotel');

        $data=array(
            'id_hotel'          => $id_hotel,
            'nama_hotel'        => $nama_hotel,
            'alamat_hotel'       => $alamat_hotel,
            'fasilitas_hotel'    => $fasilitas_hotel,
            'harga_hotel'          => $harga_hotel
        );

        $where = array(
            'id_hotel' => $id_hotel
        );

        $this->model_hotel->update_penginapan($where, $data, 'penginapan');
        redirect('dt_penginapan/index');
    }
}