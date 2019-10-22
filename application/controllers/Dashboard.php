<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct ()
	{
		parent::__construct();
		$this->session->set_userdata(
			'languageSess', ( empty ( $this->session->userdata ( 'languageSess' ) ) ? 'indonesia' : $this->session->userdata ( 'languageSess' ) )
		);
		$this->lang->load ( array( 'global', 'dashboard-home' ), $this->session->userdata ( 'languageSess' ) );
		$this->load->model ( array( 'user' ) );
	}
	public function index()
	{
		$get   = $this->db->get_where( 'users', array( 'username' => $_SESSION['login']['username'] ) )->result();
		$user  = $this->user->retrive( $get[0]->id_user );
		// var_dump($user);
		$array = array( 
			'title' => $this->lang->line( 'dashboardHomeTitle' ), 
			'user'  => $user[0],
		);
		$this->load->view( 'siswa/main', $array );
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */