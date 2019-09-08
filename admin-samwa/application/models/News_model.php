<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function getNew($database=null) //ส่วนของ Method
    {
    	$this->db->order_by('id','DESC');
        $result = $this->db->get($database);
        return $result->result_array();
    }

    public function get_detail($id=null) //ส่วนของ Method
    {
    	$this->db->where('id',$id);
        $result = $this->db->get('news');
        return $result->result_array();
    }

    public function del($id='')
    {
    	$this->db->where('id',$id);
    	$result = $this->db->delete('news');
        return $result;
    }

    public function update_status($id='',$value='')
    {
    	$this->db->where('id',$id);
    	$this->db->set('status',$value);
    	$result = $this->db->update('news');
        return $result;
    }

    public function getNewById($id='')
    {
        $this->db->where('id',$id);
        $result = $this->db->get('news');
        return $result->result_array();
    }

    public function saveEdit($array='',$database='',$id='')
    {
        $this->db->where('id',$id);
        $this->db->set($array);
        $result = $this->db->update($database);
        return $result;
    }
}
