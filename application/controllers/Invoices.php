<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoices extends CI_Controller {
	// public function __construct(){
	// 	parent::__construct();
		
	// 	if($this->session->userdata('group') != '1'){
	// 		$this->session->set_flashdata('error','Sorry, you are not logged in!');
	// 		redirect('login');
	// 	}
		
	// 	//load model -> model_products
	// 	$this->load->model('model_orders');
	// }
	
	public function index()
	{
        $data['invoices'] = $this->model_orders->all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('view_all_invoices', $data);
        $this->load->view('templates/footer');
	}

    public function detail($invoice_id)
    {
        $data['invoice'] = $this->model_orders->get_invoice_by_id($invoice_id);
        $data['orders']  = $this->model_orders->get_orders_by_invoice($invoice_id);
		$this->load->view('view_invoice_detail', $data);
    }
}