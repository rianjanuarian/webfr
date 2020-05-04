<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penginapan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('penginapan_model');
        $this->load->helper('form');    
    }

    public function index()
    {
        $data['getData'] = $this->penginapan_model->getData();
        $levelUser = $this->session->userdata('levelUser');
        if ($levelUser['level'] == 1)
        {
            $this->load->view('penginapan/penginapan.php',$data);
        }
        else if ($levelUser['level'] == 2)
        {
            redirect('penginapan/penginapan.php',$data);
        }
        else
        {
            $this->load->view('user/login');
        }
        
    }

    public function read($idData) 
    {
        $row = $this->penginapan_model->get_by_id($idData);
        if ($row) {
            $data = array(
        'id_hotel' => $row->id_hotel,
        'nama_hotel' => $row->nama_hotel,
        'alamat_hotel' => $row->alamat_hotel,
        'fasilitas_hotel' => $row->fasilitas_hotel,
        'harga_hotel' => $row->harga_hotel,
        'gambar_hotel' => $row->gambar_hotel,
        );
            $this->load->view('penginapan/read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penginapan'));
        }
    }

    public function tambah()
    {
        $data['message'] = "";
        $this->load->library("form_validation");

        $this->form_validation->set_rules('nama_hotel','nama_hotel','required');
        $this->form_validation->set_rules('alamat_hotel','alamat_hotel','required');
        $this->form_validation->set_rules('fasilitas_hotel','fasilitas_hotel','required');
        $this->form_validation->set_rules('harga_hotel','harga_hotel','required');
      

  
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if($this->form_validation->run()==FALSE){

            $this->load->view('penginapan/tambah.php',$data); 
        }

        else{
            $upload = $this->penginapan_model->upload();
            if($upload['result'] == "success"){ 

                $this->penginapan_model->insertData($upload['file']['file_name']);

                redirect('karyawan');
            }else{ 
                $data['message'] = $upload['error'];
                $this->load->view('penginapan/tambah.php',$data); 
            }
        }
    }

    public function ubah($id_hotel)
    {
        $data['message'] = "";

        $this->load->library("form_validation");

        $this->form_validation->set_rules('nama_hotel','nama_hotel','required');
        $this->form_validation->set_rules('alamat_hotel','alamat_hotel','required');
        $this->form_validation->set_rules('fasilitas_hotel','fasilitas_hotel','required');
        $this->form_validation->set_rules('harga_hotel','harga_hotel','required');

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $data['getData'] = $this->penginapan_model->getDataWhereId($id)[0];

        if($this->form_validation->run()==FALSE){

            $this->load->view('penginapan/ubah',$data);
        }

        else{
            if ($_FILES['image']['name'] == "")
            {
                $this->penginapan_model->updateData($id);

                redirect('penginapan');
            }
            else
            {
                $upload = $this->penginapan_model->upload();
                if($upload['result'] == "success"){ 
                    $this->penginapan_model->updateData($id,$upload['file']['file_name']);
                    redirect('penginapan');
                }else{ 
                    $data['error_upload'] = $upload['error'];
                    $this->load->view('penginapan/ubah',$data);
                }
            }
        }
    }

    public function hapus($id)
    {
        $this->penginapan_model->hapusData($id);
        redirect('penginapan');
    }
}
