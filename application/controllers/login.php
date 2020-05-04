
	<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('user/login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username_admin');
		$password = $this->input->post('password');
		$where = array(
			'username_admin' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'username_admin' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
		
			$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');

 
		}else{
			$this->load->view('user/login');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}