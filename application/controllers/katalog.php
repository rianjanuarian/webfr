<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class katalog extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('katalog_model');
		$this->load->helper('form');	
	}

	public function index()
	{
        $data['showall'] = $this->katalog_model->tampil_paket() ->result();

		$data['page_title'] = 'List katalog';

        $limit_per_page = 20;

        $start_index = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

        $total_records = $this->katalog_model->get_total();

        if ($total_records > 0) {

        $data["gambar"] = $this->katalog_model->getDataGambar($limit_per_page, $start_index)->result();

        $config['base_url'] = base_url(). 'katalog/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;

        $this->pagination->initialize($config);

        $data["links"] = $this->pagination->create_links();

    	}

		/*$data['gambar'] = $this->Karyawan_model->getDataGambar('karyawan')->result();*/
		$this->load->view('home/katalog', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */