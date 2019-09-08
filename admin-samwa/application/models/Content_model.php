<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//เพิ่มข้อมูลรับค่าจากห้าคอนโทรเลอร์(Controller)
    public function insertRecord($array=null , $database=null) //ส่วนของ Method
    {
        $result = $this->db->insert($database, $array);
        return $result;
    }
}
