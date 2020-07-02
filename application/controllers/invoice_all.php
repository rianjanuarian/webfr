<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    Class Invoice_all extends CI_Controller{
        public function paket()
        {
            $data['invpak'] = $this->model_invoices->tampil_trans_paket()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_inv_paket' , $data);
            $this->load->view('templates/footer');
        }
        public function homestay()
        {
            $data['invhome'] = $this->model_invoices->tampil_trans_home()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_inv_home' , $data);
            $this->load->view('templates/footer');
        }
        public function transport()
        {
            $data['invsport'] = $this->model_invoices->tampil_trans_sport()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_inv_sport' , $data);
            $this->load->view('templates/footer');
        }
        public function wisata()
        {
            $data['invwis'] = $this->model_invoices->tampil_trans_wis()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('v_inv_wis' , $data);
            $this->load->view('templates/footer');
        }
    }


?>