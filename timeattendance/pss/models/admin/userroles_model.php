<?php

class Userroles_model extends MY_Model {
	
	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}
	
	public function AccessRoles($id = '') 
	{
		if($id != "")
			$this->db->where('id',$id);
		$this->db->where('is_deleted','N');
		$query = $this->db->get('userroles');
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			return $data;
		}
	}


	public function _insert($data)
	{
		$userroles = array();
		$userroles['title'] 		= $data['title'];
		$userroles['description'] 		= $data['description'];
		$userroles['status'] 		= $data['status'];
		$userroles['created_on'] 	= date('Y-m-d H:i:s');
		$userroles['created_by'] 	= $this->adminData->id;
		$result = $this->db->insert('userroles',$userroles);
		return $result;
	}

	public function _update($data,$id)
	{
		$userroles = array();
		$userroles['title'] 		= $data['title'];
		$userroles['description'] 		= $data['description'];
		$userroles['status'] 		= $data['status'];
		$userroles['modified_on'] 	= date('Y-m-d H:i:s');
		$userroles['modified_by'] 	= $this->adminData->id;
		$this->db->where('id',$id);
		$result = $this->db->update('userroles',$userroles);
		return $result;
	}

	public function _delete($id)
	{
		$userroles['is_deleted'] = 'Y';
		$this->db->where('id',$id);
		$result = $this->db->update('userroles',$userroles);
		return $result;
	}
}