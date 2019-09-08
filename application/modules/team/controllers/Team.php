<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends MY_Controller
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

    public function manage() 
    {
        // display
        $data['page_view'] = 'manage';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }
    public function check() 
    {
        // display
        $data['page_view'] = 'check';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }

    public function consultants() 
    {
        // display
        $data['page_view'] = 'consultants';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }
}
