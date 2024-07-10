<?php
class Addblogmodel  extends CI_Model
{



    public function add_blog_data($data)
    {

        $result = $this->db->insert("blog", $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getblogdata()
    {
        $result = $this->db->get("blog")->result();
        return $result;
    }
    public function getalltags($searchTerm)
    {

        $this->db->select('id, tags');
        if ($searchTerm !== null) {
            $this->db->like('tags', $searchTerm);
        }
        $this->db->limit(200);
        $query = $this->db->get("blog");

        return $query->result();
    }
    public function send_basic_detail_model($data)
    {
        $output = $this->db->insert("schools", $data);
        if ($output) {
            $insert_id = $this->db->insert_id();

            $this->session->set_userdata('school_id', $insert_id);
            return true;
        } else {
            return false;
        }
    }
    public function send_overview_detail_model($data){
       $result=$this->db->insert("school_overview",$data);
       if($result){
        return true;
       }
       else{
        return false;
       }

    }
    public function sendfeedetailmodel($data){
      $result=$this->db->insert("fee",$data);
      if($result){
        return true;
      }
      else{
        return false;

      }

    }
    public function sendeligibilitydetail($data){
       $result= $this->db->insert("eligibilty",$data);
       if($result){
        return true;
       }
       else{
        return false;
       }


    }
    public function send_facility_model($data)
    {
        $result=$this->db->insert("facility",$data);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }
    public function send_gallery_images($data){
      
        $result=$this->db->insert("gallery",$data);
        if($result){
            return true;
        }
        else{
            return false;
        }
        
    }
}
