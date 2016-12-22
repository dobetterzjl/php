<?php
////    defined('BASEPATH') OR exit('No direct script access allowed');
//    defined('BASEPATH') OR exit('No direct script access allowed');
//    class User extends CI_Controller{
////        public function __construct(){
////           parent::__construct();
////           public function index(){
////            }
//            public function reg(){
//                $this->load->view('reg.php');
//            }
//        public function do_reg(){
//            $name=$this->input->post('username');
//            $pass=$this->input->post('pass');
//            $this->load->model('user_model');
//            $result=$this->user_model->insert($name,$pass);
//            if($result){
//                redirect('user/login');
//            }else{
//                redirect('user/reg');
//            }
//        }
//    public function login(){
//        echo "1111";
//    }
//        //}
//    }
//
//?>
<?php
    defined('BASEPATH')OR exit('No direct script access allowed');
    class User extends CI_Controller{
        public function index(){
            
        }
        public function reg(){
            $this->load->view('reg.php');
        }
        public function do_reg(){
            $name= $this->input->post('username');
            $pass=$this->input->post('pass');
            $this->load->model('user_model');
            $result=$this->user_model->insert($name,$pass);
            if($result){
                redirect('user/login');
            }else{
                redirect('user/reg');
            }
            
        }
        public function login(){
            $this->load->view('login.php');
        }
        public function do_login(){
            $name=$this->input->post('username');
            $pass=$this->input->post('pass');
            $this->load->model('user_model');
            $result=$this->user_model->search($name,$pass);
            if($result){
                //echo"0000";
                $arr=array(
                    'id'=>$result->userid,
                    'name'=>$result->name
                );
                $this->session->set_userdata($arr);
                redirect('blog/index');
            }else{
                echo"1111";
            }
        }
}

?>











