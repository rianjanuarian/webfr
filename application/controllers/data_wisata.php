<?php

    class Data_wisata extends CI_Controller{
    public function index()
    {
        $data['wisata'] = $this->model_wisata->tampil_wisata()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_wisata' , $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah()
    {
        $nama_wisata     = $this->input->post('nama_wisata');
        $alamat_wisata   = $this->input->post('alamat_wisata');
        $gambar_wisata   = $_FILES['gambar_wisata'];
            if($gambar_wisata=''){}else{
                $config['upload_path'] ='./assets/wisata/';
                $config['allowed_types'] = 'jpeg|jpg|png';

                $this->load->library('upload');
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar_wisata')){
                    echo "upload gagal"; die();
                }else{
                    $gambar_wisata=$this->upload->data('file_name');
                }
            }
        $harga_tiket    = $this->input->post('harga_tiket');
    
        $data = array(
            'nama_wisata'       => $nama_wisata,
            'alamat_wisata'     => $alamat_wisata,
            'gambar_wisata'     => $gambar_wisata,
            'harga_tiket'       => $harga_tiket
        );

        $this->model_wisata->tambah_wisata($data, 'wisata');
        redirect('data_wisata/index');
    }

    public function hapus($id_wisata)
    {
        $where = array('id_wisata'=>$id_wisata);
        $this->model_wisata->hapus_wisata($where, 'wisata');
        redirect('data_wisata/index');
    }
}