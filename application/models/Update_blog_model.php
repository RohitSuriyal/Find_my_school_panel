<?php
class Update_blog_model  extends CI_Model
{

     public function getdatablog($id)
     {
          $this->db->where('id', $id);
          $output = $this->db->get('blog');
          $result = $output->result_array();
          if ($result) {
               return $result;
          } else {
               return false;
          }
     }
     public function allSchoolNames()
     {
          
          $this->db->select("name,id");
          $output = $this->db->get("schools")->result_array();



          if ($output) {
               return $output;
          } else {
               return false;
          }
     }
     public function update_blog_detail($id,$data){
          $this->db->where('id', $id);
          $output = $this->db->update('blog', $data);
          return true;
          
          




     }
}
