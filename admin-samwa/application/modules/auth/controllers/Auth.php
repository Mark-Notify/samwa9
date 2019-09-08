<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Library and model.
		$this->load->database();
        $this->load->model('auth_model');
	}

    public function login()
    {
    	$user = $this->input->post('user');  
        $pass = $this->input->post('pass');

        // var_dump($user);exit();

        if (!empty($user) && !empty($pass))   
        {  
            if ($a = $this->auth_model->can_login($user, $pass)) 
            {
            	$session_data = array(
            			'user' 			=> $user,
            			'name' 			=> $a[0]['name'],
            			'status' 		=> $a[0]['status']
        			);
            	$this->session->set_userdata($session_data);
                echo "success";
            }
            else
            {
            	$this->session->set_flashdata('error', 'ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง');
                echo "error";
            }
        }  
        else
        {  
        	//false
        	$this->session->set_flashdata('error', 'ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง');
            echo "error";  
        } 
    }

    function logout()
    {
        $newdata = array(
                'user'    =>'',
                'name'    =>'',
                'status'  =>'',
               );

         $this->session->unset_userdata($newdata);
         // $this->session->sess_destroy();
         // redirect('default_controller','refresh');
    }

}
