<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_transport extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->model('model_crud');
      $this->load->library('upload');
      $this->load->library('pagination');
  }

  // fungsi untuk mengambil data
	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');

      $cari = $this->input->get('cari');
      $page = $this->input->get('per_page');

      $search = array('nama_transport' => $cari );

      $batas =  9; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'index.php/edit_transport/?cari='.$cari;
  		$config['total_rows'] 			 = $this->model_crud->jumlah_row($search);

  		$config['per_page'] 				 = $batas;
  		$config['uri_segment'] 			 = $page;

  		$config['full_tag_open'] 		= '<ul class="pagination">';
  		$config['full_tag_close'] 	= '<ul>';

  		$config['first_link'] 			= 'first';
  		$config['first_tag_open'] 	= '<li><a>';
  		$config['first_tag_close'] 	= '</a></li>';

  		$config['last_link'] 				= 'last';
  		$config['last_tag_open']	 	= '<li><a>';
  		$config['last_tag_close'] 	= '</a></li>';

  		$config['next_link'] 				= '&raquo;';
  		$config['next_tag_open'] 		= '<li><a>';
  		$config['next_tag_close'] 	= '</a></li>';

  		$config['prev_link'] 				= '&laquo;';
  		$config['prev_tag_open'] 		= '<li><a>';
  		$config['prev_tag_close'] 	= '</a></li>';

  		$config['cur_tag_open'] 		= '<li class="active"><a>';
  		$config['cur_tag_close'] 		= '</a></li>';

  		$config['num_tag_open'] 		= '<li><a>';
  		$config['num_tag_close'] 		= '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination']	 = $this->pagination->create_links();
      $data['jumlah_page'] = $page;


      $data['data'] = $this->model_crud->get($batas,$offset,$search);

  		$this->load->view('tampil_transport',$data);
	}

  // untuk menampilkan halaman tambah data
  public function tambah()
  {
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/footer');
      return $this->load->view('tambah_transport');
  }

  // untuk memasukan data ke database
  public function insertdata()
  {
      $nama_transport   = $this->input->post('nama_transport');
      $alamat_transport = $this->input->post('alamat_transport');
      $kapasitas_transport = $this->input->post('kapasitas_transport');
      $harga_transport   = $this->input->post('harga_transport');
      $status_transport = $this->input->post('status_transport');
      // get foto
      $config['upload_path'] = './assets/transport';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                          'nama_transport'       => $nama_transport,
                            'gambar_transport'       => $foto['file_name'],
                              'alamat_transport'     => $alamat_transport,
                              'kapasitas_transport' => $kapasitas_transport,
                              'harga_transport'     => $harga_transport,
                              'status_transport'     => $status_transport,
	                        );
							$this->model_crud->insert($data);
              redirect('edit_transport/index');
	        }else {
              die("gagal upload");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }

  // delete
  public function deletedata($id_transport,$foto)
  {
      $path = './assets/transport/';
      @unlink($path.$foto);

      $where = array('id_transport' => $id_transport );
      $this->model_crud->delete($where);
      return redirect('');
  }

  // edit
  public function edit($id_transport)
  {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
      $kondisi = array('id_transport' => $id_transport );

      $data['data'] = $this->model_crud->get_by_id($kondisi);
      return $this->load->view('edit_data1',$data);

  }

  // update
  public function updatedata()
  {
      $id_transport   = $this->input->post('id_transport');
      $nama_transport = $this->input->post('nama_transport');
      $alamat_transport = $this->input->post('alamat_transport');
      $kapasitas_transport = $this->input->post('kapasitas_transport');
      $harga_transport = $this->input->post('harga_transport');
      $status_transport = $this->input->post('status_transport');

      $path = './assets/transport/';

      $kondisi = array('id_transport' => $id_transport );

      // get foto
      $config['upload_path'] = './assets/transport';
      $config['allowed_types'] = 'jpg|png|jpeg|gif';
      $config['max_size'] = '2048';  //2MB max
      $config['max_width'] = '4480'; // pixel
      $config['max_height'] = '4480'; // pixel
      $config['file_name'] = $_FILES['fotopost']['name'];

      $this->upload->initialize($config);

	    if (!empty($_FILES['fotopost']['name'])) {
	        if ( $this->upload->do_upload('fotopost') ) {
	            $foto = $this->upload->data();
	            $data = array(
	                          'nama_transport'       => $nama_transport,
                            'gambar_transport'       => $foto['file_name'],
                              'alamat_transport'     => $alamat_transport,
                              'harga_transport'     => $harga_transport,
                              'status_transport'     => $status_transport,
	                        );
              // hapus foto pada direktori
              @unlink($path.$this->input->post('filelama'));

							$this->model_crud->update($data,$kondisi);
              redirect('edit_transport/index');
	        }else {
              die("gagal update");
	        }
	    }else {
	      echo "tidak masuk";
	    }

  }


} // end class
