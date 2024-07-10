<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function Addblog()
	{
		$this->load->model("Addblogmodel");
		$output = $this->Addblogmodel->getblogdata();
		$data = array("ouptut" => $output);



		$this->load->view("Add_blog", $data);
	}
	public function send_data()

	{



		$base64_image = "";
		if (!empty($_FILES['image']['tmp_name'])) {
			$image_data = file_get_contents($_FILES['image']['tmp_name']);
			$base64_image = base64_encode($image_data);
		}



		$body = $this->input->post("editor1");

		$data = array(
			"heading" => $this->input->post("heading"),
			"image" => $base64_image,
			"body" => $this->input->post("editor1"),
			"tags" => $this->input->post("tags"),
			"date" => $this->input->post("date"),
			"witten_by" => $this->input->post("written_by"),
			"category" => $this->input->post("category"),








		);


		$this->load->model("Addblogmodel");


		$output = $this->Addblogmodel->add_blog_data($data);


		if ($output) {

			echo json_encode("this is very good");
		}
	}
	public function alltags()
	{
		$this->load->model("Addblogmodel");
		$searchTerm = $this->input->get('q');



		$result = $this->Addblogmodel->getalltags($searchTerm);
		echo json_encode($result);
	}
	public function Addchool()
	{
		$this->load->view("Addschool");
	}
	public function add_basic_detail()
	{

		$base64_image_new = "";
		if (!empty($_FILES['image_basic_detail']['tmp_name'])) {
			$image_data = file_get_contents($_FILES['image_basic_detail']['tmp_name']);
			$base64_image_new = base64_encode($image_data);
		}

		$data = array(
			"name" => $this->input->post("school_name"),
			"city" => $this->input->post("city"),
			"state" => $this->input->post("state"),
			"school_type" => $this->input->post("school_type"),
			"address" => $this->input->post("address"),
			"class_offered" => $this->input->post("class_offerd"),
			"board" => $this->input->post("board"),
			"student_faculty_ratio" => $this->input->post("student_faculty_ratio"),
			"tags" => $this->input->post("tags_school"),
			"image" => $base64_image_new,




		);
		$this->load->model("Addblogmodel");
		$result = $this->Addblogmodel->send_basic_detail_model($data);
		if ($result) {
			echo json_encode("successs");
		} else {
		}
	}
	public function send_overview_data()
	{

		$data = array(
			"school_id" => $this->session->userdata('school_id'),
			"content" => $this->input->post("content"),
			"ownership" => $this->input->post("ownership"),
			"establishment" => $this->input->post("establishment"),
			"campus" => $this->input->post("campus"),
			"Board" => $this->input->post("board"),
			"Co_ed_status" => $this->input->post("Co_ed_status"),
			"campus_type" => $this->input->post("campus_type"),
			"interact_language" => $this->input->post("interact_language"),
			"session" => $this->input->post("session"),
			"school_format" => $this->input->post("school_format"),


		);
		$this->load->model("Addblogmodel");
		$result = $this->Addblogmodel->send_overview_detail_model($data);
		if ($result) {
			echo json_encode("this is very successfull");
		} else {
			echo json_encode("this is not successfull");
		}
	}
	public function sendfeedetail()
	{
		$feearray = $this->input->post("fee");
		$frequency = $this->input->post("frequency");
		$class_name = $this->input->post("class_name");

		$feename = array(
			"registration_fee",
			"admission_fee",
			"tution_fee",
			"security_fee",
			"annual_fee",
			"transportation_fee",
			"others_fee",
			"total_fee",
			"monthly_fee",


		);



		foreach ($feearray as $index => $fee) {

			$data = array(
				"school_id" => $this->session->userdata('school_id'),
				"class" => $class_name,
				"feename" => $feename[$index],
				"amount" => $feearray[$index],
				"frequency" => $frequency[$index],




			);
			$this->load->model("Addblogmodel");
			$result = $this->Addblogmodel->sendfeedetailmodel($data);
		}
		echo json_encode("this is the succes");
	}
	public function sendeligibilitydetail()
	{
		$agearray = $this->input->post("age");
		$marksarray = $this->input->post("marks");
		$totalseats = $this->input->post("totalseats");
		$written_test = $this->input->post("written_test");
		$student_interatcion = $this->input->post("student_interaction");
		$parent_interatcion = $this->input->post("parents_interaction");
		$form_availability = $this->input->post("form_availability");
		$form_payment = $this->input->post("form_payment");
		$from = $this->input->post("from");
		$to = $this->input->post("to");
		$class = $this->input->post("class_name");
		$school_id = $this->session->userdata('school_id');



		foreach ($marksarray as $index => $fee) {

			$data = array(
				"school_id" => $school_id,
				"class" => $class,
				"eligible_age" => $agearray[$index],
				"eligible_marks" => $marksarray[$index],
				"total_seats" => $totalseats[$index],
				"written_test" => $written_test[$index],
				"student_interaction" => $student_interatcion[$index],
				"parents_interaction" => $parent_interatcion[$index],
				"form_availabilty" => $form_availability[$index],
				"form_paymnet" => $form_payment[$index],
				"timing_from" => $from[$index],
				"timing_to" => $to[$index],






			);
			$this->load->model("Addblogmodel");
			$result = $this->Addblogmodel->sendeligibilitydetail($data);
		}
		echo json_encode("this is success");
	}
	public function send_facility_data()
	{
		$data = array(
			"school_id" => $this->session->userdata('school_id'),
			"class_facilities" => $this->input->post("class_facilities_string"),
			
			"boarding" => $this->input->post("boarding"),
			"infrastructure" => $this->input->post("infrastructure_string"),
			"safety_and_security" => $this->input->post("advanced_facilities_string"),
			"advance_facilities" => $this->input->post("advanced_facilities_string"),
			"extra_curricular" => $this->input->post("extra_curricular_string"),
			"sports_and_faclities" => $this->input->post("sports_and_fitness_string"),
			"lab" => $this->input->post("lab_string"),
			"disable_friendly" => $this->input->post("disabled_friendly_string"),


		);
		$this->load->model("Addblogmodel");
		$output = $this->Addblogmodel->send_facility_model($data);
		if ($output) {
			echo json_encode('succeess');
		} else {
			echo json_encode("failure");
		}
	}
	public function send_gallery_image()
	{
		$base64_image_new = "";
		if (!empty($_FILES['image_file']['tmp_name'])) {
			$image_data = file_get_contents($_FILES['image_file']['tmp_name']);
			$base64_image_new = base64_encode($image_data);
		}
		$data = array(
			"school_id" => $this->session->userdata('school_id'),
			"category" => $this->input->post("gallery_category"),
			"image" => $base64_image_new,




		);
		$this->load->model("Addblogmodel");
		$output = $this->Addblogmodel->send_gallery_images($data);

		if ($output) {
			echo json_encode("this is the code");
		} else {
			echo json_encode("this is the error");
		}
	}
}
