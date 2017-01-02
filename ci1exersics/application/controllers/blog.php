<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    class Blog extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
        }

        public function index(){
            $this->load->model('blog_model');
            $rs=$this->blog_model->get_artical();
            $arr['blog']=$rs;
            $this->load->view('index.php',$arr);
        }
        public function update(){
            $id=$this->uri->segment(3);
            $this->load->model('blog_model');
            $result=$this->blog_model->up_attr($id);
            $arr['up']=$result;
            $this->load->view('update.php',$arr);
        }
        public function upact(){
            $hid =$this->input->post('hid');
            $title=$this->input->post('title');
            $content = $this->input->post('con');
            $this->load->model('blog_model');
            $result=$this->blog_model->update_act($hid,$title,$content);
           if($result){
               redirect('blog/index');

           }
        }
        public function del(){
            $id = $this->uri->segment(3);
            //echo $id;
            $this->load->model('blog_model');
            $result=$this->blog_model->del_attr($id);
            if($result){
                //$this->index();
                redirect('blog/index');
            }else{
                echo "删除失败";
            }
            
        }
    }
?>