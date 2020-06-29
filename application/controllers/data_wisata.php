<?php

    class Data_wisata extends CI_Controller{
    public function index()
    {
        $data['wisata'] = $this->model_wisata->tampil_wisata()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_wisata' , $data);
        $this->load->view('templates/footer');
    }

    public function aksi_tambah()
    {
        $nama_wisata     = $this->input->post('nama_wisata');
        $alamat_wisata   = $this->input->post('alamat_wisata');
        $gambar_wisata   = $_FILES['gambar_wisata'];
            if($gambar_wisata=''){}else{
                $config['upload_path'] ='./assets/wisata/';
                $config['allowed_types'] = 'jpeg|jpg|png';

                $this->load->library('upload');
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar_wisata')){
                    echo "upload gagal"; die();
                }else{
                    $gambar_wisata=$this->upload->data('file_name');
                }
            }
        $harga_tiket    = $this->input->post('harga_tiket');
        $status_wisata  = $this->input->post('status_wisata');
    
        $data = array(
            'nama_wisata'       => $nama_wisata,
            'alamat_wisata'     => $alamat_wisata,
            'gambar_wisata'     => $gambar_wisata,
            'harga_tiket'       => $harga_tiket,
            'status_wisata'     => $status_wisata
        );

        $this->model_wisata->tambah_wisata($data, 'wisata');
        redirect('data_wisata/index');
    }

    public function edit_wisata($id_wisata){ 
        $where = array('id_wisata' => $id_wisata);
        $data['wisata'] = $this->model_wisata->get_edit($where, 'wisata')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('form_edit_wisata' , $data);
        $this->load->view('templates/footer');
    }

    public function update_wisata()
    {
        $id_wisata = $this->input->post('id_wisata');
        $nama_wisata = $this->input->post('nama_wisata');
        $alamat_wisata= $this->input->post('alamat_wisata');
        $harga_tiket = $this->input->post('harga_tiket');
        $status_wisata = $this->input->post('status_wisata');

        $path = './assets/wisata/';

        $where = array('id_wisata' => $id_wisata);

        if($_FILES['fotoup']['name']!= null){
            $foto = $_FILES['fotoup']['name'];
            if($foto =''){}else{
                $config['upload_path'] = './assets/wisata/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['encrypt_name'] = true;
            //    $config['overwrite'] = true;
            //    $config['file_name'] = $this->db->get_where('penginapan', array('id_hotel' => $this->input->post('id_hotel')))->row()->gambar_hotel;

                $this->load->library('upload');
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('fotoup')){
                    //die("Gagal Update");
                    redirect('data_wisata');
                }else{
                    @unlink($path.$this->input->post('filelama'));
                    $gambar_wisata = $this->upload->data('file_name');                    
                }
            }
            $data = array (
                'nama_wisata'        => $nama_wisata,
                'alamat_wisata'      => $alamat_wisata,
                'gambar_wisata'      => $gambar_wisata,
                'harga_tiket'        => $harga_tiket,
                'status_wisata'      => $status_wisata
            );
        }else{
            $data = array (
                'nama_wisata'        => $nama_wisata,
                'alamat_wisata'      => $alamat_wisata,
                'harga_tiket'        => $harga_tiket,
                'status_wisata'      => $status_wisata
            );
        }
        
        $this->model_wisata->get_update($data, $where);
    redirect('data_wisata');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Berhasil Diupdate!.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');        
    }

    public function hapus($id_wisata)
    {
        $where = array('id_wisata'=>$id_wisata);
        $this->model_wisata->hapus_wisata($where, 'wisata');
        redirect('data_wisata/index');
    }
}