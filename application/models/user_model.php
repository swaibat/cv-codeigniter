<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	function get_user_name($user_id){
		$query = $this->db->get_where('user', array('user_id' => $user_id));
		$res = $query->result_array();
		foreach ($res as $row)
			return $row['email'];
	}
}
