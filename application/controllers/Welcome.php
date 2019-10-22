<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->session->set_userdata(
			'languageSess', ( empty ( $this->session->userdata ( 'languageSess' ) ) ? 'indonesia' : $this->session->userdata ( 'languageSess' ) )
		);
		$this->lang->load ( array( 'global', 'login' ), $this->session->userdata ( 'languageSess' ) );
		$this->load->model ( array( 'user' ) );
	}
	public function index()
	{
		if ( empty ( $_POST ) ) {
			( ! empty( $_SESSION['login'] ) ? redirect( 'dashboard' ) : false );
			$this->load->view('login');
		} else {
			$args['username'] = htmlspecialchars($_POST['username']);
			$args['password'] = md5(htmlspecialchars($_POST['password']));
			$fetch = $this->user->cek($args);
			// var_dump($fetch);
			if ( $fetch === true ) {
				$array = array(
					'login' => array(
						'username' => $args['username'],
						'login'	   => strtotime(date('l, j F Y h.i.s')),
					),
				);
				if ( ! empty( $_POST['remember'] ) === 'on' ) {
					$this->session->sess_expiration = 60*60*24*365;
				}
				$this->session->set_userdata( $array );
				$this->db->update( 'users', array('last_login' => strtotime(date('l, j F Y h.i.s'))));
				echo true;
			} else {
				echo false;
			}
			
		}
	}
	public function logout ()
	{
		if ( empty( $_POST ) ) {
			$this->session->sess_destroy();
			redirect( base_url() );
		} else {
			if ( $this->session->sess_destroy() ) {
				echo true;
			} else {
				echo false;
			}
		}
	}
}
