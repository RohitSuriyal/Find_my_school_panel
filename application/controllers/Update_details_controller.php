<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update_details_controller extends CI_Controller
{


    public function Update_basic_detail($id)
    {
        // Correctly define the data array
        $data = [
            "id" => $id,
        ];

        // Pass the data to the view
        $this->load->view("update_basic_details_view", $data);
    }

    public function getbasicdetail()
    {

        $id = $this->input->post("id");
        $this->load->model("Crud_school_detail");
        $result = $this->Crud_school_detail->get_basic_detail($id);
        if ($result) {

            echo json_encode($result);
        } else {
            $data = array(
                'message' => "this is the error"
            );
            echo json_encode($data);
        }
    }
    public function send_update_details()
    {

        $id = $this->input->post("id");
        $base64_image_new = "";
        if (!empty($_FILES['image_basic_detail_update']['tmp_name'])) {
            $image_data = file_get_contents($_FILES['image_basic_detail_update']['tmp_name']);
            $base64_image_new = base64_encode($image_data);
        } else {

            $base64_image_new = $this->input->post("already_image");
        }
        $data = array(
            "name" => $this->input->post("school_name_update"),
            "city" => $this->input->post("city_update"),
            "state" => $this->input->post("india_state_update"),
            "school_type" => $this->input->post("school_type_update"),
            "address" => $this->input->post("location_update"),
            "class_offered" => $this->input->post("class_offer_update"),
            "board" => $this->input->post("board_update"),
            "student_faculty_ratio" => $this->input->post("student_faculty_ratio_update"),
            "tags" => $this->input->post("tags_school_update"),
            "image" => $base64_image_new,
        );



        $this->load->model("Crud_school_detail");

        $result = $this->Crud_school_detail->send_update_data($data, $id);
        if ($result) {

            echo json_encode("success");
        } else {
            echo json_encode("failure");
        }
    }
    public function Update_overvew_detail($id)
    {

        $data = [
            "id" => $id,
        ];

        // Pass the data to the view
        $this->load->view("update_overview_details_view", $data);
    }
    public function update_overview_data()
    {

        $id = $this->input->post("id");
        $this->load->model("Crud_school_detail");

        $result = $this->Crud_school_detail->get_overview_data($id);
        if ($result) {
            echo json_encode($result);
        } else {
            echo json_encode("failure");
        }
    }
    public function send_update_overview_details()
    {
        $id = $this->input->post("id");
        $data = array(
            "school_id" => $id,
            "content" => $this->input->post("content_update"),
            "ownership" => $this->input->post("ownership_update"),
            "establishment" => $this->input->post("establishment_update"),
            "campus" => $this->input->post("campus_update"),
            "Board" => $this->input->post("board_update"),
            "Co_ed_status" => $this->input->post("Co_ed_status_update"),
            "campus_type" => $this->input->post("campus_type_update"),
            "interact_language" => $this->input->post("interact_language_update"),
            "session" => $this->input->post("session_update"),
            "school_format" => $this->input->post("school_format_update"),


        );
        $this->load->model("Crud_school_detail");


        $result = $this->Crud_school_detail->send_overview_update_data($data, $id);
        if ($result) {
            echo json_encode("success");
        } else {
            echo json_encode("failure");
        }
    }
}
