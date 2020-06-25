<?php
class Data_penginapan extends CI_Controller{
    // function __construct(){
    //     parent::__construct();
    //     $this->load->model('m_login');
    //     $this->load->helper('url');
    // }
    
    public function index() // membuat fungsi index yang akan diakses saat controller dijalankan
    {
        $data['penginapan']= $this->model_penginapan->tampil_data()->result(); // memanggil model barang dan fungsi tampil data
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_penginapan' , $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi() // membuat fungsi
    {
        $nama_hotel       =$this->input->post('nama_hotel'); // menangkap hasil inputan dari form
        $alamat_hotel     =$this->input->post('alamat_hotel'); // menangkap hasil inputan dari form
        $gambar_hotel     =$_FILES['gambar_hotel']; // menangkap hasil inputan dari form
        if ($gambar_hotel=''){}else {
            $config ['upload_path']='./assets/hotel/';
            $config ['allowed_types']='jpg|jpeg|png';
            $config['encrypt_name'] = true;
            $this->load->library('upload');
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar_hotel')){
                echo "Gambar Gagal Terupload!"; die();
            }else {
                $gambar_hotel=$this->upload->data('file_name');
            }
        
        $fasilitas_hotel  =$this->input->post('fasilitas_hotel'); // menangkap hasil inputan dari form
        $harga_hotel      =$this->input->post('harga_hotel'); // menangkap hasil inputan dari form
        $status_hotel     =$this->input->post('status_hotel');
}
        $data=array( // memasukkan data inputan kedalam array
            'nama_hotel'           =>$nama_hotel, 
            'alamat_hotel'         =>$alamat_hotel,
            'gambar_hotel'         =>$gambar_hotel,
            'fasilitas_hotel'      =>$fasilitas_hotel,
            'harga_hotel'          =>$harga_hotel,
            'status_hotel'         =>$status_hotel
        );
        $this->model_penginapan->tambah_penginapan($data, 'penginapan'); 
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Ditambahkan!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('data_penginapan/index');
        }

        public function edit_penginapan($id_hotel){ 
            $where = array('id_hotel' => $id_hotel);
            $data['penginapan'] = $this->model_penginapan->get_edit($where, 'penginapan')->result();

            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('form_edit_penginapan' , $data);
            $this->load->view('templates/footer');
        }

        public function update_penginapan()
        {
            $id_hotel = $this->input->post('id_hotel');
            $nama_hotel = $this->input->post('nama_hotel');
            $alamat_hotel= $this->input->post('alamat_hotel');
            $fasilitas_hotel = $this->input->post('fasilitas_hotel');
            $harga_hotel = $this->input->post('harga_hotel');
            $status_hotel = $this->input->post('status_hotel');

            $path = './assets/hotel/';

            $where = array('id_hotel' => $id_hotel);

            if($_FILES['gambar_hotel']['name']!= null){
                if($foto =''){}else{
                    $config['upload_path'] = './assets/hotel/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['encrypt_name'] = true;
                //    $config['overwrite'] = true;
                //    $config['file_name'] = $this->db->get_where('penginapan', array('id_hotel' => $this->input->post('id_hotel')))->row()->gambar_hotel;
    
                    $this->load->library('upload');
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload('fotoup')){
                        die("Gagal Update");
                    }else{
                        @unlink($path.$this->input->post('filelama'));
                        $gambar_hotel = $this->upload->data('file_name');                    
                    }
                }
                $data = array (
                    'nama_hotel'        => $nama_hotel,
                    'alamat_hotel'      => $alamat_hotel,
                    'gambar_hotel'      => $gambar_hotel,
                    'fasilitas_hotel'   => $fasilitas_hotel,
                    'harga_hotel'       => $harga_hotel,
                    'status_hotel'      => $status_hotel
                );
            }else{
                $data = array (
                    'nama_hotel'        => $nama_hotel,
                    'alamat_hotel'      => $alamat_hotel,
                    'fasilitas_hotel'   => $fasilitas_hotel,
                    'harga_hotel'       => $harga_hotel,
                    'status_hotel'      => $status_hotel
                );
            }
            
            $this->model_penginapan->get_update($data, $where);
        redirect('data_penginapan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Diupdate!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>');        
        }

        function hapus($id_hotel){ // menghapus data dengan menyeleksi query untuk menghapus record
        $where=array('id_hotel'=>$id_hotel);
           $this->model_penginapan->hapus_data($where, 'penginapan'); // memanggil mode barang dengan fungsi hapus data berdasarkan id pada tb_barang
        redirect('data_penginapan/index');
        }

        function _rules()
        {
            $this->form_validation->set_rules('nama_hotel', 'Nama Penginapan', 'required');
            $this->form_validation->set_rules('alamat_hotel', 'Alamat Penginapan', 'required');
            $this->form_validation->set_rules('gambar_hotel', 'Gambar Penginapan', 'required');
            $this->form_validation->set_rules('fasilitas_hotel', 'Fasilitas Penginapan', 'required');
            $this->form_validation->set_rules('harga_hotel', 'Harga Penginapan', 'required');
            $this->form_validation->set_rules('status_hotel', 'Status Hotel', 'required');
        }
}
