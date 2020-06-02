<?php

class data_pesanan extends CI_Controller{
    public function index()
    {
        $data['transaksi'] = $this->model_transaksi->tampil_transaksi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_transaksi' , $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah()
    {
        $id_katalog     = $this->input->post('id_katalog');
        $id_pelanggan            = $this->input->post('id_pelanggan');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $tgl_berangkat       = $this->input->post('tgl_berangkat');
        $penerima      = $this->input->post('penerima');
        $alamat_rinci            = $this->input->post('alamat_rinci');
        $nohp_penerima = $this->input->post('nohp_penerima');

        $data = array(
            'id_katalog'        => $id_katalog,
            'id_pelanggan'               => $id_pelanggan,
            'tgl_transaksi'    => $tgl_transaksi,
            'tgl_berangkat'          => $tgl_berangkat,
            'penerima'          => $penerima,
            'alamat_rinci'          => $alamat_rinci,
            'nohp_penerima'          => $nohp_penerima

        );

        $this->model_transaksi->tambah_transaksi($data, 'transaksi');
        redirect('data_pesanan/index');
    }

    public function edit($id_transaksi)  
    {
        $where = array('id_transaksi' =>$id_transaksi);
        $data['transaksi'] = $this->model_transaksi->edit($where, 'transaksi')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_transaksi' , $data);
        $this->load->view('templates/footer');
    }

    public function update_transaksi()
    {
        $id_transaksi =$this->input->post('id_transaksi');
        $id_katalog =$this->input->post('id_katalog');
        $id_pelanggan =$this->input->post('id_pelanggan');
        $tgl_transaksi =$this->input->post('tgl_transaksi');
        $tgl_berangkat =$this->input->post('tgl_berangkat');
        $penerima      = $this->input->post('penerima');
        $alamat_rinci            = $this->input->post('alamat_rinci');
        $nohp_penerima = $this->input->post('nohp_penerima');

        $data=array(
            'id_transaksi'          => $id_transaksi,
            'id_katalog'        => $id_katalog,
            'id_pelanggan'               => $id_pelanggan,
            'tgl_transaksi'    => $tgl_transaksi,
            'tgl_berangkat'          => $tgl_berangkat,
            'penerima'          => $penerima,
            'alamat_rinci'          => $alamat_rinci,
            'nohp_penerima'          => $nohp_penerima
        );

        $where = array(
            'id_transaksi' => $id_transaksi
        );

        $this->model_transaksi->update_transaksi($where, $data, 'transaksi');
        redirect('data_pesanan/index');
    }

    public function hapus($id_transaksi)
    {
        $where = array('id_transaksi' =>$id_transaksi);
        $this->model_transaksi->hapus_transaksi($where, 'transaksi');
        redirect('data_pesanan/index');
    }
}

