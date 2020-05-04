<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transport extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('transport_model');
        $this->load->helper('form');    
    }

    public function index()
    {
        $data['getData'] = $this->transport_model->getData();
        $levelUser = $this->session->userdata('levelUser');
        if ($levelUser['level'] == 1)
        {
            $this->load->view('transport/transport.php',$data);
        }
        else if ($levelUser['level'] == 2)
        {
            redirect('transport/transport.php',$data);
        }
        else
        {
            $this->load->view('user/login');
        }
        
    }

    public function read($idData) 
    {
        $row = $this->transport_model->get_by_id($idData);
        if ($row) {
            $data = array(
        'id_transport' => $row->id_transport,
        'nama_transport' => $row->nama_transport,
        'alamat_transport' => $row->alamat_transport,
        'kapasitas_transport' => $row->kapasitas_transport,
        'harga_transport' => $row->harga_transport,
        'gambar_transport' => $row->gambar_transport,
        );
            $this->load->view('transport/read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transport'));
        }
    }

    public function tambah()
    {
        $data['message'] = "";
        $this->load->library("form_validation");

        $this->form_validation->set_rules('nama_transport','nama_transport','required');
        $this->form_validation->set_rules('alamat_transport','alamat_transport','required');
        $this->form_validation->set_rules('kapasitas_transport','kapasitas_transport','required');
        $this->form_validation->set_rules('harga_transport','harga_transport','required');
      

  
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if($this->form_validation->run()==FALSE){

            $this->load->view('transport/tambah.php',$data); 
        }

        else{
            $upload = $this->transport_model->upload();
            if($upload['result'] == "success"){ 

                $this->transport_model->insertData($upload['file']['file_name']);

                redirect('transport');
            }else{ 
                $data['message'] = $upload['error'];
                $this->load->view('transport/tambah.php',$data); 
            }
        }
    }

    public function ubah($id_transport)
    {
        $data['message'] = "";

        $this->load->library("form_validation");

        $this->form_validation->set_rules('nama_hotel','nama_hotel','required');
        $this->form_validation->set_rules('alamat_hotel','alamat_hotel','required');
        $this->form_validation->set_rules('fasilitas_hotel','fasilitas_hotel','required');
        $this->form_validation->set_rules('harga_hotel','harga_hotel','required');

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $data['getData'] = $this->transport_model->getDataWhereId($id)[0];

        if($this->form_validation->run()==FALSE){

            $this->load->view('karyawan/ubah',$data);
        }

        else{
            if ($_FILES['image']['name'] == "")
            {
                $this->transport_model->updateData($id);

                redirect('transport');
            }
            else
            {
                $upload = $this->transport_model->upload();
                if($upload['result'] == "success"){ 
                    $this->transport_model->updateData($id,$upload['file']['file_name']);
                    redirect('transport');
                }else{ 
                    $data['error_upload'] = $upload['error'];
                    $this->load->view('transport/ubah',$data);
                }
            }
        }
    }

    public function hapus($id)
    {
        $this->transport_model->hapusData($id);
        redirect('transport');
    }
}
