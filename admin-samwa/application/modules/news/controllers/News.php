<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
    }

    public function index() 
    {
        $data['list_news'] = $this->News_model->getNew('news');
        // display
        $data['page_view'] = 'index';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }

    public function del($id='')
    {
        $result = $this->News_model->getNewById($id);
        $parth = FCPATH .'../uploads/news/';
        foreach ($result as $key => $rows) {
            if ($rows['image'] != '') {
                $flgDelete = unlink($parth.$rows['image']);
                $result_del = $this->News_model->del($id);
                if($result_del) {
                    echo json_encode(array('status' => 'success','message'=> 'ลบข้อมูลสำเร็จ'));
                }
                else
                {
                    echo json_encode(array('status' => 'error','message'=> 'ลบข้อมูลไม่สำเร็จ!'));
                }
            }
            
        }
        
    }

    public function update_status($id='',$value='')
    {
        $result = $this->News_model->update_status($id,$value);
        if($result) {
            echo json_encode(array('status' => 'success','message'=> 'แก้ไขสถานะสำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => 'error','message'=> 'แก้ไขสถานะไม่สำเร็จ!'));
        }
    }

    public function get_detail($id='')
    {
        $result = $this->News_model->get_detail($id);
        echo json_encode($result);
    }

    public function edit($id='')
    {
       $data['edit_news'] = $this->News_model->getNewById($id);
        // display
        $data['page_view'] = 'edit';
        $data['template'] = 'default/main';

        $this->load->view('page', $data);
    }

    public function save_edit()
    {
        $id         = $this->input->post('id');
        $title      = $this->input->post('title');
        $sub_title  = $this->input->post('sub_title');
        $category   = $this->input->post('category');
        $content    = $this->input->post('content');

        // if() redirect(base_url('index'));
        if (!$_FILES) {
            $result = $this->News_model->getNewById($id);
            $parth = FCPATH .'../uploads/news/';
            foreach ($result as $key => $rows) {
                if ($rows['image'] != '') {
                    $flgDelete = unlink($parth.$rows['image']);
                }
            }

            $array = array(
                'title'         => $title,
                'sub_title'     => $sub_title,
                'content'       => $content,
                'category'      => $category,
            );
        }

        if($_FILES){
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
        }
            

        // var_dump($array);
        // exit();

        $result = $this->News_model->saveEdit($array, 'news', $id);
        if($result) {
            echo json_encode(array('status' => 'success','message'=> 'บันทึกสำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => 'error','message'=> 'บันทึกไม่สำเร็จ'));
        }
    }
}
