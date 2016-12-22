<?php
    class Blog_model extends CI_Model{
        public function get_artical(){
            $query=$this->db->get('blog');
            $result=$query->result();
            return $result;
        }
    }
?>