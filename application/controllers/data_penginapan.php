<?php
class Data_penginapan extends CI_Controller{
    // function __construct(){
    //     parent::__construct();
    //     $this->load->model('m_login');
    //     $this->load->helper('url');
    // }
    
    public function index() // membuat fungsi index yang akan diakses saat controller dijalankan
    {
        $data['hotel']= $this->model_penginapan->tampil_data()->result(); // memanggil model barang dan fungsi tampil data
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('v_data_penginapan' , $data);
        $this->load->view('templates/footer');
    }
    public function tambah_aksi() // membuat fungsi
    {
        $nama_hotel       =$this->input->post('nama_hotel'); // menangkap hasil inputan dari form
        $alamat_hotel       =$this->input->post('alamat_hotel'); // menangkap hasil inputan dari form
        $fasilitas       =$this->input->post('fasilitas'); // menangkap hasil inputan dari form
        $harga_hotel       =$this->input->post('harga_hotel'); // menangkap hasil inputan dari form
        $gambar     =$_FILES['gambar']['name']; // menangkap hasil inputan dari form
        if ($gambar=''){}else {
            $config ['upload_path']='./upload';
            $config ['allowed_types']='jpg|jpeg|png|gift';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal!";
            }else {
                $gambar=$this->upload->data('file_name');
            }
        }
        $data=array( // memasukkan data inputan kedalam array
            'nama_hotel'          =>$nama_hotel, 
            'alamat_hotel'          =>$alamat_hotel,
            'gambar_hotel'          =>$gambar,
            'fasilitas_hotel'          =>$fasilitas,
            'harga_hotel'          =>$harga_hotel
        );
        $this->model_penginapan->tambah_penginapan($data, 'penginapan'); // memanggil model barang dengan fungsi tambah barang , memasukkan array ke dalam tabel tb_barang
        redirect('data_penginapan/index');
        }
        function edit($id){ // method untuk mengedit data
            $where = array('id_hotel' => $id); // menangkap data berdasarkan id yang dikirim dari link edit  kemudian dijadikan array
            $data['penginapan'] = $this->model_penginapan->edit_penginapan($where,'penginapan')->result(); //function edit_data digunakan untuk menangkap data dari model barang. result() untuk me-regenerate hasil query menjadi array
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_data_penginapan' , $data);
            $this->load->view('templates/footer');
        }
        public function update(){ //membuat fungsi update
            $id         = $this->input->post('id_hotel'); // menangkap hasil inputan dari form
            $nama_hotel         = $this->input->post('nama_hotel'); // menangkap hasil inputan dari form
            $alamat_hotel         = $this->input->post('alamat_hotel'); // menangkap hasil inputan dari form
            $fasilitas         = $this->input->post('fasilitas_hotel'); // menangkap hasil inputan dari form
            $harga         = $this->input->post('harga_hotel'); // menangkap hasil inputan dari form
           
            $data=array( // memasukkan data inputan kedalam array
                'nama_hotel'          =>$nama_hotel, 
                'alamat_hotel'          =>$alamat_hotel,
                'fasilitas_hotel'          =>$fasilitas,
                'harga_hotel'          =>$harga_hotel
            
            );
            $where =array(
                'id_hotel'              =>$id
            );
            $this->model_penginapan->update_data($where,$data,'penginapan'); // memanggil model barang dengan fungsi update data , memasukkan array ke dalam tabel tb_barang
            redirect('data_penginapan/index');
        }
        function hapus($id){ // menghapus data dengan menyeleksi query untuk menghapus record
           $where=array('id_hotel'=>$id);
           $this->model_penginapan->hapus_data($where, 'penginapan'); // memanggil mode barang dengan fungsi hapus data berdasarkan id pada tb_barang
           redirect('data_penginapan/index');
        }
}
