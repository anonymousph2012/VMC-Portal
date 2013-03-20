<?php

class Ref extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

public function add_student()
{
	$stud_num = $this->input->post('stud_num')
	$data = array(
		'stud_num' => $stud_num,
		'passwd'   => $this->input->post('passw'),
		'account_type' => 'student',
		);
	$result = $this->db->insert('users',$data);

	$data2 = array(
		'column1' => $stud_num,
		'column2'   => $this->input->post('passw'),
		'column3' => 'student',
		);
	$result2 = $this->db->insert('user_info',$data2);

	if($result === TRUE && $result2 === TRUE)
	{
		return TRUE;
	}
		return FALSE;

}

public function get_student_details($id = FALSE)
{
	if($id === FALSE)
	{
		//GET ALL THE STUDENT
		$this->db->select('*')
				 ->from('user AS u')
				 ->join('user_info as u_i','u_i.stud_num = u.stud_num');
		$query = $this->db->get();

		if ($query->num_row()) {
		 	# code...
		 } 
	}else{
		//GET THE SPECIFIC USING ID
		$this->db->select('*')
				 ->from('user AS u')
				 ->join('user_info as u_i','u_i.stud_num = u.stud_num')
				 ->where('u_i.stud_num',$id);
	}
}

}