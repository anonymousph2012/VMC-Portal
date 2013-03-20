<?php

class Model_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function validator()
	{
		$stud_num = $this->input->post('stud_num');
		$password = $this->input->post('password');
		
		$this->db->select('*')
				 ->from('users')
				 ->where('stud_num', $stud_num)
				 ->where('user_pw',$password);
		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			$row = $query->row();
			$data = array(
				'id' => $row->id,
				'logged_in' => TRUE,
				'account_type' => $row->account_type

				);

			$this->session->set_userdata($data);
			return TRUE;
		}
			return FALSE;
	}

}