<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_model{

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function can_login($user, $pass)
    {
    	$this->db->where('user', $user);
    	$this->db->where('pass', $pass);
    	$query = $this->db->get('member');
        return $query->result_array();
    }
}