<?php

Class Transaksi_homestay extends CI_Controller{
    //controller untuk transaksi homestay
    public function trans_home()
    {
        $data['transaksi_hotel'] = $this->model_trans_ind->tampil_trans_home()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_trans_home' , $data);
        $this->load->view('templates/footer');
    }

    public function edit_home($id_trans_hotel)  
    {
        $where = array('id_trans_hotel' =>$id_trans_hotel);
        $data['transaksi_hotel'] = $this->model_trans_ind->edit_home($where, 'transaksi_hotel')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_trans_home' , $data);
        $this->load->view('templates/footer');
    }

    public function update_homestay()
    {
        $id_trans_hotel =$this->input->post('id_trans_hotel');
        $id_hotel =$this->input->post('id_hotel');
        $id_pelanggan =$this->input->post('id_pelanggan');
        $tgl_transaksi =$this->input->post('tgl_transaksi');
        $tgl_checkin =$this->input->post('tgl_checkin');
        $penerima      = $this->input->post('penerima');
        $nohp_penerima = $this->input->post('nohp_penerima');
        $status_bayar = $this->input->post('status_bayar');

        $data=array(
            'id_trans_hotel'          => $id_trans_hotel,
            'id_hotel'        => $id_hotel,
            'id_pelanggan'               => $id_pelanggan,
            'tgl_transaksi'    => $tgl_transaksi,
            'tgl_checkin'          => $tgl_checkin,
            'penerima'          => $penerima,
            'nohp_penerima'          => $nohp_penerima,
            'status_bayar'      => $status_bayar
        );

        $where = array(
            'id_trans_hotel' => $id_trans_hotel
        );

        $this->model_trans_ind->update_homestay($where, $data, 'transaksi_hotel');
        redirect('transaksi_homestay/trans_home');
    }

    public function hapus_home($id_trans_hotel)
    {
        $where = array('id_trans_hotel' =>$id_trans_hotel);
        $this->model_trans_ind->hapus_home($where, 'transaksi_homestay');
        redirect('transaksi_homestay/trans_home');
    }

    // controller untuk transaksi transport
    public function trans_sport()
    {
        $data['transaksi_transport'] = $this->model_trans_ind->tampil_trans_sport()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_trans_sport' , $data);
        $this->load->view('templates/footer');
    }
    public function edit_trans($id_trans_transp)
    {
        $where = array('id_trans_transp' =>$id_trans_transp);
        $data['transaksi_transport'] = $this->model_trans_ind->edit_trans($where, 'transaksi_transport')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_trans_sport' , $data);
        $this->load->view('templates/footer');
    }
    public function update_trans()
    {
        $id_trans_transp =$this->input->post('id_trans_transp');
        $id_transport =$this->input->post('id_transport');
        $id_pelanggan =$this->input->post('id_pelanggan');
        $tgl_transaksi =$this->input->post('tgl_transaksi');
        $tgl_berangkat =$this->input->post('tgl_berangkat');
        $penerima      = $this->input->post('penerima');
        $alamat_rinci  = $this->input->post('alamat_rinci');
        $nohp_penerima = $this->input->post('nohp_penerima');
        $status_bayar = $this->input->post('status_bayar');

        $data=array(
            'id_trans_transp'   => $id_trans_transp,
            'id_transport'      => $id_transport,
            'id_pelanggan'      => $id_pelanggan,
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_berangkat'     => $tgl_berangkat,
            'penerima'          => $penerima,
            'alamat_rinci'      => $alamat_rinci,
            'nohp_penerima'     => $nohp_penerima,
            'status_bayar'      => $status_bayar
        );

        $where = array(
            'id_trans_transp' => $id_trans_transp
        );

        $this->model_trans_ind->update_trans($where, $data, 'transaksi_transport');
        redirect('transaksi_homestay/trans_sport');
    }

    public function hapus_trans($id_trans_transp)
    {
        $where = array('id_trans_transp' =>$id_trans_transp);
        $this->model_trans_ind->hapus_trans($where, 'transaksi_transport');
        redirect('transaksi_homestay/trans_sport');
    }

    //untuk transaksi wisata
    public function trans_wis()
    {
        $data['transaksi_wisata'] = $this->model_trans_ind->tampil_trans_wis()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_trans_wis' , $data);
        $this->load->view('templates/footer');
    }
    public function edit_wisata($id_trans_wisata)
    {
        $where = array('id_trans_wisata' =>$id_trans_wisata);
        $data['transaksi_wisata'] = $this->model_trans_ind->edit_wisata($where, 'transaksi_wisata')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_trans_wisata' , $data);
        $this->load->view('templates/footer');
    }
    public function update_wisata()
    {
        $id_trans_wisata =$this->input->post('id_trans_wisata');
        $id_wisata =$this->input->post('id_wisata');
        $id_pelanggan =$this->input->post('id_pelanggan');
        $tgl_transaksi =$this->input->post('tgl_transaksi');
        $tgl_pakai =$this->input->post('tgl_pakai');
        $penerima      = $this->input->post('penerima');
        $nohp_penerima = $this->input->post('nohp_penerima');
        $status_bayar = $this->input->post('status_bayar');

        $data=array(
            'id_trans_wisata'   => $id_trans_wisata,
            'id_wisata'      => $id_wisata,
            'id_pelanggan'      => $id_pelanggan,
            'tgl_transaksi'     => $tgl_transaksi,
            'tgl_pakai'     => $tgl_pakai,
            'penerima'          => $penerima,
            'nohp_penerima'     => $nohp_penerima,
            'status_bayar'      => $status_bayar
        );

        $where = array(
            'id_trans_wisata' => $id_trans_wisata
        );

        $this->model_trans_ind->update_wisata($where, $data, 'transaksi_wisata');
        redirect('transaksi_homestay/trans_wis');
    }
    public function hapus_wisata($id_trans_wisata)
    {
        $where = array('id_trans_wisata' =>$id_trans_wisata);
        $this->model_trans_ind->hapus_wisata($where, 'transaksi_wisata');
        redirect('transaksi_homestay/trans_wis');
    }
    
}
?>