<?php

class Data_paket extends CI_Controller{
    public function index()
    {
        $data['katalog'] = $this->model_paket->tampil_paket()->result();
        $data['transport'] = $this->model_paket->tampil_paket()->result();
        $data['penginapan'] = $this->model_paket->tampil_paket()->result();
        $data['wisata'] = $this->model_paket->tampil_paket()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_paket' , $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah()
    {
        $data['transport'] = $this->model_paket->tampil_paket()->result();
        $data['penginapan']= $this->model_paket->tampil_paket()->result();
        $data['wisata']    = $this->model_paket->tampil_paket()->result();
        $nama_katalog      = $this->input->post('nama_katalog');
        $id_transport      = $this->input->post('id_transport');
        $id_hotel          = $this->input->post('id_hotel');
        $id_wisata         = $this->input->post('id_wisata');
        $harga_katalog     = $this->input->post('harga_katalog');
        $status            = $this->input->post('status');
        
        $data = array(
            'nama_katalog'        => $nama_katalog,
            'id_transport'        => $id_transport,
            'id_hotel'            => $id_hotel,
            'id_wisata'           => $id_wisata,
            'harga_katalog'       => $harga_katalog,
            'status'              => $status
        );

        $this->model_paket->tambah_paket($data, 'katalog');
        redirect('data_paket/index');
    }

    public function edit($id_katalog)  
    {
        $where = array('id_katalog' =>$id_katalog);
        $data['katalog'] = $this->model_paket->edit($where, 'katalog')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_paket' , $data);
        $this->load->view('templates/footer');
    }

    public function update_paket()
    {
        $id_katalog     =$this->input->post('id_katalog');
        $nama_katalog   =$this->input->post('nama_katalog');
        $id_transport   =$this->input->post('id_transport');
        $id_hotel       =$this->input->post('id_hotel');
        $id_wisata      =$this->input->post('id_wisata');
        $harga_katalog  = $this->input->post('harga_katalog');
        $status         = $this->input->post('status');

        $data=array(
            'id_katalog'          => $id_katalog,
            'nama_katalog'        => $nama_katalog,
            'id_transport'        => $id_transport,
            'id_hotel'            => $id_hotel,
            'id_wisata'           => $id_wisata,
            'harga_katalog'       => $harga_katalog,
            'status'              => $status
        );

        $where = array(
            'id_katalog' => $id_katalog
        );

        $this->model_paket->update_paket($where, $data, 'katalog');
        redirect('data_paket/index');
    }

    public function hapus($id_katalog)
    {
        $where = array('id_katalog' =>$id_katalog);
        $this->model_paket->hapus_paket($where, 'katalog');
        redirect('data_paket/index');
    }
    
}

