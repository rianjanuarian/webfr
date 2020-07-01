<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    Class Model_invoices extends CI_MOdel{
        public function tampil_trans_paket()
        {
            $data = $this->db->query("SELECT id_transaksi, katalog.nama_katalog, katalog.harga_katalog, pelanggan.nama_pelanggan, nohp_penerima 
            FROM transaksi, katalog, pelanggan 
            WHERE transaksi.id_katalog=katalog.id_katalog AND transaksi.id_pelanggan=pelanggan.id_pelanggan
            ");
            return $data;
        }
        public function tampil_trans_home()
        {
            $data = $this->db->query("SELECT id_trans_hotel, penginapan.nama_hotel, penginapan.harga_hotel, pelanggan.nama_pelanggan, nohp_penerima 
            FROM transaksi_hotel, penginapan, pelanggan 
            WHERE transaksi_hotel.id_hotel=penginapan.id_hotel AND transaksi_hotel.id_pelanggan=pelanggan.id_pelanggan
            ");
            return $data;
        }
        public function tampil_trans_sport()
        {
            $data = $this->db->query("SELECT id_trans_transp, transport.nama_transport, transport.harga_transport, pelanggan.nama_pelanggan, nohp_penerima 
            FROM transaksi_transport, transport, pelanggan 
            WHERE transaksi_transport.id_transport=transport.id_transport AND transaksi_transport.id_pelanggan=pelanggan.id_pelanggan
            ");
            return $data;
        }
        public function tampil_trans_wis()
        {
            $data = $this->db->query("SELECT id_trans_wisata, wisata.nama_wisata, wisata.harga_tiket, pelanggan.nama_pelanggan, nohp_penerima 
            FROM transaksi_wisata, wisata, pelanggan 
            WHERE transaksi_wisata.id_wisata=wisata.id_wisata AND transaksi_wisata.id_pelanggan=pelanggan.id_pelanggan
            ");
            return $data;
        }
    }


?>