<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index() 
    {
        $data['list_news'] = $this->Home_model->get_news('news');
        // display
        $data['page_view'] = 'index';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }

    public function detail($id=null) 
    {
        $data['list_news'] = $this->Home_model->get_news_limit('news');
        $data['news'] = $this->Home_model->get_news_by_id($id,'news');
        // display
        $data['page_view'] = 'detail';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }
}
