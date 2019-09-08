<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index() 
    {
        // display
        $data['page_view'] = 'index';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }
}
