<?php

class Admin_model extends MY_Model {
	
	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}
	
	function check_user ($data) {
		//print_r($data);
		if(empty($data)) return false;
		$this->db->select('id,firstName,lastName,user_role,username');
		$this->db->from('users');
		$this->db->where('email', $data['txt_email']);
		$this->db->or_where('username', $data['txt_email']); 
		$this->db->where('password', md5($data['txt_pwd'])); 
		$this->db->where('status', 1);
		$this->db->where('user_role', 1);
		$result = $this->db->get();
		//echo $this->db->last_query();
		if ($result->num_rows() == 0)
			return false;
		else
			return $result->first_row();
	}

	public function pwd_recovery($data){
	//echo $data;
	//exit;
		if(empty($data)) return false;
		$this->db->select('id,email,password');
		$this->db->from('users');
		$this->db->where('email', $data);
		$this->db->or_where('username', $data); 
		$this->db->where('status', 1);
		$result = $this->db->get();
		if ($result->num_rows() == 0)
			return false;
		else
			return $result->row();
	}

	public function change_pwd($arr){
		$sql="select username,email from users where id='".$arr[0]."' and password='".$arr[1]."'";
		$query = $this->db->query($sql);
        foreach($query->result() as $row)
	        return $row;
	}

	public function update_pwd($arr,$pwd)
	{
		$sql="update users set password='".md5(trim($pwd))."' where id='".$arr[0]."'";
		$query = $this->db->query($sql);
        return $query;
	}

	public function _insert_contact($data)
	{
		$this->db->trans_start();
		$this->db->empty_table('vs_contact');
		foreach($data as $key => $value)
		{
			$data = array();
			$data['key'] = $key;
			$data['value'] = db_str_encode($value);
			$this->db->insert('vs_contact',$data);
		}
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
		    $this->db->trans_rollback();
		    return false;
		}
		else
		{
		    $this->db->trans_commit();
		    return true;
		}
	}

	public function getContact()
	{
		$data = array();
		$query = $this->db->get('vs_contact');
		$result = $query->result_array();
		foreach ($result as $key => $array) {
			$data[$array['key']] = db_str_decode($array['value']);
		}
		return $data;
	}
}