<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('wisata_model');
        $this->load->helper('form');    
    }

    public function index()
    {
        $data['getData'] = $this->wisata_model->getData();
        $levelUser = $this->session->userdata('levelUser');
        if ($levelUser['level'] == 1)
        {
            $this->load->view('wisata/wisata.php',$data);
        }
        else if ($levelUser['level'] == 2)
        {
            redirect('wisata/wisata.php',$data);
        }
        else
        {
            $this->load->view('user/login');
        }
        
    }

    public function read($idData) 
    {
        $row = $this->wisata_model->get_by_id($idData);
        if ($row) {
            $data = array(
        'id_wisata' => $row->id_wisata,
        'nama_wisata' => $row->nama_wisata,
        'alamat_wisata' => $row->alamat_wisata,
        'harga_tiket' => $row->gambar_tiket,
        'gambar_wisata' => $row->gambar_wisata,
        );
            $this->load->view('wisata/read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('wisata'));
        }
    }

    public function tambah()
    {
        $data['message'] = "";
        $this->load->library("form_validation");

        $this->form_validation->set_rules('nama_wisata','nama_wisata','required');
        $this->form_validation->set_rules('alamat_wisata','alamat_wisata','required');
        $this->form_validation->set_rules('harga_tiket','harga_tiket','required');
       
      

  
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if($this->form_validation->run()==FALSE){

            $this->load->view('wisata/tambah.php',$data); 
        }

        else{
            $upload = $this->wisata_model->upload();
            if($upload['result'] == "success"){ 

                $this->wisata_model->insertData($upload['file']['file_name']);

                redirect('wisata');
            }else{ 
                $data['message'] = $upload['error'];
                $this->load->view('wisata/tambah.php',$data); 
            }
        }
    }

    public function ubah($id_wisata)
    {
        $data['message'] = "";

        $this->load->library("form_validation");

		'id_wisata' => $row->id_wisata,
        'nama_wisata' => $row->nama_wisata,
        'alamat_wisata' => $row->alamat_wisata,
        'harga_tiket' => $row->gambar_tiket,
        'gambar_wisata' => $row->gambar_wisata,

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $data['getData'] = $this->wisata_model->getDataWhereId($id)[0];

        if($this->form_validation->run()==FALSE){

            $this->load->view('karyawan/ubah',$data);
        }

        else{
            if ($_FILES['image']['name'] == "")
            {
                $this->wisata_model->updateData($id);

                redirect('wisata');
            }
            else
            {
                $upload = $this->wisata_model->upload();
                if($upload['result'] == "success"){ 
                    $this->wisata_model->updateData($id,$upload['file']['file_name']);
                    redirect('wisata');
                }else{ 
                    $data['error_upload'] = $upload['error'];
                    $this->load->view('wisata/ubah',$data);
                }
            }
        }
    }

    public function hapus($id)
    {
        $this->wisata_model->hapusData($id);
        redirect('wisata');
    }
}
