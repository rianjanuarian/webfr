<?php

class Data_pelanggan extends CI_Controller{
    public function index()
    {
        $data['pelanggan'] = $this->model_pelanggan->tampil_pelanggan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_pelanggan' , $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah()
    {
        $nama_pelanggan     = $this->input->post('nama_pelanggan');
        $username           = $this->input->post('username');
        $alamat             = $this->input->post('alamat');
        $gender             = $this->input->post('gender');
        $no_telepon         = $this->input->post('no_telepon');
        $no_identitas       = $this->input->post('no_identitas');
        $password           = $this->input->post('password');
    
        $data = array(
            'nama_pelanggan'        => $nama_pelanggan,
            'username'              => $username,
            'alamat'                => $alamat,
            'gender'                => $gender,
            'no_telepon'            => $no_telepon,
            'no_identitas'          => $no_identitas,
            'password'              => $password
        );

        $this->model_pelanggan->tambah_pelanggan($data, 'pelanggan');
        redirect('data_pelanggan/index');
    }

    public function edit($id_pelanggan)  
    {
        $where = array('id_pelanggan' =>$id_pelanggan);
        $data['pelanggan'] = $this->model_pelanggan->edit($where, 'pelanggan')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_pelanggan' , $data);
        $this->load->view('templates/footer');
    }

    public function update_pelanggan()
    {
        $id_pelanggan =$this->input->post('id_pelanggan');
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $username       = $this->input->post('username');
        $alamat         = $this->input->post('alamat');
        $gender         = $this->input->post('gender');
        $no_telepon     = $this->input->post('no_telepon');
        $no_identitas   = $this->input->post('no_identitas');
        $password       = $this->input->post('password');

        $data=array(
            'id_pelanggan'          => $id_pelanggan,
            'nama_pelanggan'        => $nama_pelanggan,
            'username'              => $username,
            'alamat'                => $alamat,
            'gender'                => $gender,
            'no_telepon'            => $no_telepon,
            'no_identitas'          => $no_identitas,
            'password'              => $password
        );

        $where = array(
            'id_pelanggan' => $id_pelanggan
        );

        $this->model_pelanggan->update_pelanggan($where, $data, 'pelanggan');
        redirect('data_pelanggan/index');
    }

    public function hapus($id_pelanggan)
    {
        $where = array('id_pelanggan' =>$id_pelanggan);
        $this->model_pelanggan->hapus_pelanggan($where, 'pelanggan');
        redirect('data_pelanggan/index');
    }
}

