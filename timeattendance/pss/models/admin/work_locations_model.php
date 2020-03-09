<?php

class work_locations_model extends MY_Model {
	
	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}
	
	public function Accesswork_locations($id = '') 
	{
		if($id != "")
			$this->db->where('id',$id);
		//$this->db->where('is_deleted','N');
		$query = $this->db->get('work_locations');
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			return $data;
		}
	}

	public function _insert($data)
	{
		$partner['country'] 		= $data['country'];
		$partner['title'] 			= $data['title'];
		$partner['address'] 		= $data['address'];
		$partner['mobile'] 		= $data['mobile'];
		$partner['latitude'] 		=$data['latitude'];
		$partner['longitude'] 		=$data['longitude'];
		$partner['created_on'] 		= date('Y-m-d H:i:s');
		$partner['status'] 			= $data['status'];
		$partner['created_by'] 		= $this->adminData->id;
		$result = $this->db->insert('work_locations',$partner);
		return $result;
	}

	public function _update($data,$id)
	{
		//$data['start_date'] 	= date('Y-m-d',strtotime($data['start_date']));
		//$data['end_date'] 		= date_format(date_create_from_format('d/m/Y', $data['end_date']), 'Y-m-d');
		$data['modified_on'] 	= date('Y-m-d H:i:s');
		$data['modified_by'] 	= $this->adminData->id;
		$this->db->where('id',$id);
		$result = $this->db->update('work_locations',$data);
		return $result;
	}

	public function _delete($id)
	{
		//$data['is_deleted'] = 'Y';
		$this->db->where('id',$id);
		$result = $this->db->delete('work_locations');
		return $result;
	}
}