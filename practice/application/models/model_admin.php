<?php

class Model_admin extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function name_top()
	{
		
	}

	public function get_student_details()
	{

	    $this->db->select('*');
	    $users = $this->db->get('user_info');

	    return $users->result_array();
	}

	public function get_teacher_details()
	{
		$this->db->select('*');
		$teacher = $this->db->get('teacher_info');

		return $teacher->result_array();
	}

	public function insert_student_data($data = array())
	{
		$this->db->insert('user_info', $data);

		return true;
	}
}