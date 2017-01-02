<?php
    class Blog_model extends CI_Model{
        public function get_artical(){
            $query=$this->db->get('blog');
            $result=$query->result();
            return $result;
        }
        public function up_attr($id){
            $query=$this->db->get_where('blog',array('blogid'=>$id));
            return $query->row();
        }
        public function update_act($hid,$title,$content){
            $d=Date('Y').'-'.Date('m').'-'.Date('d');
            $this->db->where('blogid',$hid);
           $query= $this->db->update('blog',array('title'=>$title,'content'=>$content,'time'=>$d));
            return $query;
        }
        public function del_attr($id){
            $query=$this->db->delete('blog',array('blogid'=>$id));
            return $query;
        }
    }
?>