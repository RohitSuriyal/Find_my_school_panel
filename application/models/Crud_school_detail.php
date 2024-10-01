<?php
class Crud_school_detail  extends CI_Model
{

    public function get_basic_detail($id)
    {

        $this->db->where("id", $id);
        $this->db->from("schools");
        $output = $this->db->get()->result();

        if ($output) {


            return $output;
        } else {
            return false;
        }
    }
    public function send_update_data($data, $id)
    {

        // Specify the table name
        $this->db->where('id', $id);
        $result = $this->db->update('schools', $data);
        if ($result) {

            return true;
        } else {
            return false;
        }
    }
    public function get_overview_data($id)
    {

        $this->db->where("school_id", $id);
        $this->db->from("school_overview");
        $output = $this->db->get()->result();
        if ($output) {
            return $output;
        } else {
            return false;
        }
    }
    public function send_overview_update_data($data,$id){
        $this->db->where('school_id', $id);
        $result = $this->db->update('school_overview', $data);
        if ($result) {

            return true;
        }else{
            return false;
        }
         
    }
}
