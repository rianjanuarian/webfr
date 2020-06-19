<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_orders extends CI_Model {
	
	public function process()
	{
		//create new invoice
		$invoice = array(
			'tgl_transaksi'		=> date('Y-m-d H:i:s'),
			'tgl_berangkat'	=> date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
			'status'	=> 'unpaid'
		);
		$this->db->insert('transaksi', $invoice);
		$invoice_id = $this->db->insert_id();
		
		// put ordered items in orders table
		foreach($this->cart->contents() as $item){
			$data = array(
				'id_transaksi'		=> $invoice_id,
				'id_katalog'		=> $item['id_katalog'],
				'id_pelanggan'		=> $item['id_pelanggan'],
				'tgl_transaksi'				=> $item['tgl_transaksi'],
				'tgl_berangkat'				=> $item['tgl_berangkat']
			);
			$this->db->insert('transaksi', $data);
		}
		
		return TRUE;
	}
	
    public function all()
    {
        //Get all invoices from Invoices table
        $hasil = $this->db->get('transaksi');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function get_invoice_by_id($invoice_id)
    {
        $hasil = $this->db->where('id_transaksi',$invoice_id)->limit(1)->get('transaksi');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return false;
        }
    }

    public function get_orders_by_invoice($invoice_id)
    {
        $hasil = $this->db->where('id_transaksi',$invoice_id)->get('transaksi');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return false;
        }
    }
}