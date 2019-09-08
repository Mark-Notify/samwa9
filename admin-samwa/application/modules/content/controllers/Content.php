<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Content_model');
    }

    public function index() 
    {
        // display
        $data['page_view'] = 'index';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }

    public function save()
    {
        $title      = $this->input->post('title');
        $sub_title  = $this->input->post('sub_title');
        $category   = $this->input->post('category');
        $content    = $this->input->post('content');

        // if(!$_FILES) redirect(base_url('index'));
        $ext = strrchr($_FILES['file']['name'],".");
        $fileName = date('Y-m-d').'-'.time();

        // $config = [];
        $config['upload_path']          = './../uploads/news/';
        $config['file_name']            = $fileName . '' . $ext;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 24000;
        $config['max_height']           = 24000;

        $this->load->library('upload', $config);

        $this->upload->do_upload('file');

        $array = array(
            'title'         => $title,
            'sub_title'     => $sub_title,
            'content'       => $content,
            'category'      => $category,
            'image'         => $config['file_name'],
        );

        // var_dump($array);
        // exit();

        $result = $this->Content_model->insertRecord($array, 'news');
        if($result) {
            echo json_encode(array('status' => 'success','message'=> 'บันทึกสำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => 'error','message'=> 'บันทึกไม่สำเร็จ'));
        }
    }

}
