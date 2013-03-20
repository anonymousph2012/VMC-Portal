<?php

class Model_student extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_student_details()
	{

    $this->db->select('stud_num, stud_fname, stud_lname');
    $users = $this->db->get('user_info');

    return $users->result_array();
	}
}