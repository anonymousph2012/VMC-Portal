<?php

class Controller_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('model_admin');
	}

	public function dashboard()
	{

		$data['users'] = $this->get_student_info();
		$data['teacher'] = $this->get_teacher_info();
		$this->load->view('administrator/ad', $data);

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

	public function get_student_info()
	{
		//Load our model
	    $this->load->model("model_admin");
	     
	    //Prepare data to be sent to the view
	    $users = $this->model_admin->get_student_details();

	    return $users;
	}

	public function get_teacher_info()
	{
		$this->load->model("model_admin");
	     
	    //Prepare data to be sent to the view
	    $users = $this->model_admin->get_teacher_details();

	    return $users;
	}

	public function get_name_login()
	{
		
	}

	public function add_student()
	{
		//$this->input->post('');

		$data = array(
			'stud_num' => $this->input->post('stud_num'),

		);
		$this->model_admin->insert_student_data($data);
	}
}