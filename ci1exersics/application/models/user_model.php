<?php
//    defined('BASEPATH') OR exit('No direct script access allowed');
//    class User_model extends CI_Model{
//        function insert($name,$pass){
//            $sql="insert into user(userid,name,pass) values(null,'$name','$pass')";
//           $result= $this->db->query($sql);
//            return $result;
//        }
//
//    }
//
//?>
<?php
            defined('BASEPATH') OR exit('No direct script access allowed');
            class User_model extends CI_Model{
                public function insert($name,$pass){
                    $arr=array(
                      'name'=>$name,
                        'pass'=>$pass
                    );
                   $result= $this->db->insert('user',$arr);
//                $sql="insert into user(userid,name,pass) values(null,'$name','$pass')";
//                $result=$this->db->query($sql);
                return $result;

    }
                public function search($name,$pass){
//                    $sql="select * form user where name='$name' and pass='$pass'";
//                    $result=$this->db->query($sql);
                    $data=array(
                      'name'=>$name,
                        'pass'=>$pass
                    );
                    $result=$this->db->get_where('user',$data);
                    return $result->row();
                }
}
?>


