<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_model
{

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_news($database=null)
    {
        $this->db->select('*,DAY(time1) as day,MONTH(time1) as month');
        $this->db->order_by('id','DESC');
        $result = $this->db->get($database);
        return $result->result_array();
    }

    public function get_news_by_id($id=null,$database=null)
    {
        $this->db->where('id',$id);
        $this->db->limit(5);
        $result = $this->db->get($database);
        return $result->result_array();
    }

    public function get_news_limit($database=null)
    {
        $this->db->order_by('id','DESC');
        $this->db->limit(5);
        $result = $this->db->get($database);
        return $result->result_array();
    }

}