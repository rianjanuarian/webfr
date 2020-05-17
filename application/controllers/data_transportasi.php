<?php

class Data_transportasi extends CI_Controller{
    public function index()
    {
        $data['transport'] = $this->model_transportasi->tampil_transportasi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_transportasi' , $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $nama_transport     = $this->input->post('nama_transport');
        $alamat_transport   = $this->input->post('alamat_transport');
        $gambar_transport   = $_FILES['gambar_transport'];
        if($gambar_transport=''){}else{
            $config['upload_path']='./assets/transport/';
            $config['allowed_types']='jpg|jpeg|png';
            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if(!$this->upload->do_upload('gambar_transport')){
                echo "Gambar gagal terupload"; die();
            }else{
                $gambar_transport=$this->upload->data('file_name');
            }
        }
        $kapasitas_transport= $this->input->post('kapasitas_transport');
        $harga_transport    = $this->input->post('harga_transport');

        $data=array(
            'nama_transport'        => $nama_transport,
            'alamat_transport'      => $alamat_transport,
            'gambar_transport'      => $gambar_transport,
            'kapasitas_transport'   => $kapasitas_transport,
            'harga_transport'       => $harga_transport
        );
        $this->model_transportasi->tambah_transportasi($data, 'transport');
        redirect('data_transportasi/index');
    }
    public function hapus($id_transport)
    {
        $where  = array('id_transport' =>$id_transport);
        $this->model_transportasi->hapus_transport($where, 'transport');
        redirect('data_transportasi/index');
    }
}