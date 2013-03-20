<?php

class Controller_student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	public function home()
	{
		$this->load->view('student/main_student');
	}

	public function is_logged_in()
	{
		$logged_in = $this->session->userdata('logged_in');

		if ($logged_in === FALSE) {
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function get_all()
	{
		//Load our model
	    $this->load->model("model_student");
	     
	    //Prepare data to be sent to the view
	    $data['users'] = $this->model_student->get_student_details();
	    //We load the view
	    $this->load->view("administrator/ad", $data);
		/*
		$data['query'] = $this->model_student->user_info_getall();

		$this->load-view('ad' ,$data);
		*/
	}

}