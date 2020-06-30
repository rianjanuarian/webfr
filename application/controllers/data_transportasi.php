<?php

class Data_transportasi extends CI_Controller{
    public function index()
    {
        $data['transport'] = $this->model_transportasi->tampil_transportasi()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_transportasi' , $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $nama_transport     = $this->input->post('nama_transport');
        $alamat_transport   = $this->input->post('alamat_transport');
        $gambar_transport   = $_FILES['gambar_transport'];
        if($gambar_transport=''){}else{
            $config['upload_path']='./assets/transport/';
            $config['allowed_types']='jpg|jpeg|png';
            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if(!$this->upload->do_upload('gambar_transport')){
                echo "Gambar gagal terupload"; die();
            }else{
                $gambar_transport=$this->upload->data('file_name');
            }
        }
        $kapasitas_transport= $this->input->post('kapasitas_transport');
        $harga_transport    = $this->input->post('harga_transport');
        $status_transport   = $this->input->post('status_transport');

        $data=array(
            'nama_transport'        => $nama_transport,
            'alamat_transport'      => $alamat_transport,
            'gambar_transport'      => $gambar_transport,
            'kapasitas_transport'   => $kapasitas_transport,
            'harga_transport'       => $harga_transport,
            'status_transport'      => $status_transport
        );
        $this->model_transportasi->tambah_transportasi($data, 'transport');
        redirect('data_transportasi/index');
    }

    public function edit_transportasi($id_transport){ 
        $where = array('id_transport' => $id_transport);
        $data['transport'] = $this->model_transportasi->get_edit($where, 'transport')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('form_edit_transportasi' , $data);
        $this->load->view('templates/footer');
    }

    public function update_transportasi()
    {
        $id_transport = $this->input->post('id_transport');
        $nama_transport = $this->input->post('nama_transport');
        $alamat_transport= $this->input->post('alamat_transport');
        $kapasitas_transport = $this->input->post('kapasitas_transport');
        $harga_transport = $this->input->post('harga_transport');
        $status_transport = $this->input->post('status_transport');

        $path = './assets/transport/';

        $where = array('id_transport' => $id_transport);

        if($_FILES['fotoup']['name']!= null){
            $foto = $_FILES['fotoup']['name'];
            if($foto =''){}else{
                $config['upload_path'] = './assets/transport/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['encrypt_name'] = true;
            //    $config['overwrite'] = true;
            //    $config['file_name'] = $this->db->get_where('penginapan', array('id_hotel' => $this->input->post('id_hotel')))->row()->gambar_hotel;

                $this->load->library('upload');
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('fotoup')){
                    //die("Gagal Update");
                    redirect('data_penginapan');
                }else{
                    @unlink($path.$this->input->post('filelama'));
                    $gambar_transport = $this->upload->data('file_name');                    
                }
            }
            $data = array (
                'nama_transport'        => $nama_transport,
                'alamat_transport'      => $alamat_transport,
                'gambar_transport'      => $gambar_transport,
                'kapasitas_transport'   => $kapasitas_transport,
                'harga_transport'       => $harga_transport,
                'status_transport'      => $status_transport
            );
        }else{
            $data = array (
                'nama_transport'        => $nama_transport,
                'alamat_transport'      => $alamat_transport,
                'kapasitas_transport'   => $kapasitas_transport,
                'harga_transport'       => $harga_transport,
                'status_transport'      => $status_transport
            );
        }
        
        $this->model_transportasi->get_update($data, $where);
    redirect('data_transportasi');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data Berhasil Diupdate!.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>');        
    }
    public function hapus($id_transport)
    {
        $where  = array('id_transport' =>$id_transport);
        $this->model_transportasi->hapus_transport($where, 'transport');
        redirect('data_transportasi/index');
    }
}