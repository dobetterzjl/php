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
    }
?>