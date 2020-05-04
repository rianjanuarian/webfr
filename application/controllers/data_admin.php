<?php

class Data_admin extends CI_Controller{
    public function index()
    {
        $data['admin'] = $this->model_admin->tampil_admin()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_admin' , $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah()
    {
        $nama_admin     = $this->input->post('nama_admin');
        $nik            = $this->input->post('nik');
        $username_admin = $this->input->post('username_admin');
        $password       = $this->input->post('password');
    
        $data = array(
            'nama_admin'        => $nama_admin,
            'nik'               => $nik,
            'username_admin'    => $username_admin,
            'password'          => $password
        );

        $this->model_admin->tambah_admin($data, 'admin');
        redirect('data_admin/index');
    }

    public function edit($id_admin)  
    {
        $where = array('id_admin' =>$id_admin);
        $data['admin'] = $this->model_admin->edit($where, 'admin')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_admin' , $data);
        $this->load->view('templates/footer');
    }

    public function update_admin()
    {
        $id_admin =$this->input->post('id_admin');
        $nama_admin =$this->input->post('nama_admin');
        $nik =$this->input->post('nik');
        $username_admin =$this->input->post('username_admin');
        $password =$this->input->post('password');

        $data=array(
            'id_admin'          => $id_admin,
            'nama_admin'        => $nama_admin,
            'nik'               => $nik,
            'username_admin'    => $username_admin,
            'password'          => $password
        );

        $where = array(
            'id_admin' => $id_admin
        );

        $this->model_admin->update_admin($where, $data, 'admin');
        redirect('data_admin/index');
    }

    public function hapus($id_admin)
    {
        $where = array('id_admin' =>$id_admin);
        $this->model_admin->hapus_admin($where, 'admin');
        redirect('data_admin/index');
    }
}

