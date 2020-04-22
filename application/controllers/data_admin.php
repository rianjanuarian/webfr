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

}