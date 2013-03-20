<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('model_login');
	}

	public function index()
	{
		$this->login();
	}
	
	public function login()
	{
		$this->load->view('login/login');
	}
	
	public function signup()
	{
		$this->load->view('signup');
	}
	
	public function members()
	{
	
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('members');
		} else {
			redirect('main/restricted');
		}
		
	}
	
	public function restricted()
	{
		$this->load->view('restricted');
	}
	
	
	public function login_validation()
	{
		
		
		$this->form_validation->set_error_delimiters('<div class = "alert alert-error"><i class = "icon-exclamation-sign"></i>' , '</div> ');

		$this->form_validation->set_rules('stud_num', 'Student Number', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		
		if ($this->form_validation->run() === TRUE)
		{
			$result = $this->model_login->validator();
			if ($result === TRUE) {
				$account_type = $this->session->userdata('account_type');
				if ($account_type == 'administrator') {
					redirect(base_url('administrator'));
				} else if ($account_type == 'student')
				{

					redirect(base_url('student'));
				}

			} else {
					$this->login();
				}
		} else {
			$this->load->view('login/login');
		}

	}
	
	public function signup_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('mname', 'Middle Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'required|trim|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]|xss_clean');
		$this->form_validation->set_rules('contact', 'Contact Number', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');
		
		if ($this->form_validation->run() === TRUE)
		{
			echo "pasok!";
		} else {
			$this->load->view('signup');
		}
		
		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('main/login/login');
	}
	
}







