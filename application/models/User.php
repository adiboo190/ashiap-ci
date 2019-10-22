<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
	# Get User Validation
	public function cek( $data = array() )
	{
		$username = $data['username'];
		$password = $data['password'];
		$data = $this->db->get_where( 'users', array( 'username' => $data['username'] ) );
		$data = $data->result_array();
		if ( empty( $data ) ) {
			return false;
		} else {
			// return $password;
			if ( $password == $data[0]['password'] ) {
				return true;
			} else {
				return false;
			}
			
		}
		
	}
	function retrive( $data )
	{
		$this->db->select( '*' );
		$this->db->join( 'userparentdata', 'userparentdata.id_user = users.id_user' );
		$this->db->join( 'user_data', 'user_data.id_user = users.id_user' );
		$this->db->from( 'users' );
		$query = $this->db->get()->result();
		return $query;
	}
}

/* End of file user.php */
/* Location: ./application/libraries/user.php */
