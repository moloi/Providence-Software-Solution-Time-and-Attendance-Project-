<?php

class Home_model extends MY_Model {
	
	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}
	
	public function AccessBanners($id = '') 
	{
		if($id != "")
			$this->db->where('id',$id);
		$this->db->where('is_deleted','N');
		$query = $this->db->get('vs_banners');
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			foreach ($data as $key => $array):
				$data[$key]['image'] = BANNERS.$array['image'];
			endforeach;
			return $data;
		}
	}

	public function _insert($data)
	{
		
		$banners['image']	= $data['image'];
		$banners['title']	= $data['title'];
		
		$banners['created_on'] 		= date('Y-m-d H:i:s');
		$banners['status'] 			= $data['status'];
		$banners['created_by'] 		= $this->adminData->id;
		$result = $this->db->insert('vs_banners',$banners);
		return $result;
	}

	public function _update($data,$id)
	{
		
		$data['modified_on'] 	= date('Y-m-d H:i:s');
		$data['modified_by'] 	= $this->adminData->id;
		$this->db->where('id',$id);
		$result = $this->db->update('vs_banners',$data);
		return $result;
	}

	public function _delete($id)
	{
		$data['is_deleted'] = 'Y';
		$this->db->where('id',$id);
		$result = $this->db->update('vs_banners',$data);
		return $result;
	}
	
	
	public function AccessContent($id = '') 
	{
		if($id != "")
			$this->db->where('id',$id);
		$this->db->where('is_deleted','N');
		$query = $this->db->get('vs_content');
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			return $data;
		}
	}

	public function _insertContent($data)
	{
		$ads['position'] 	= $data['position'];
		
		$ads['description'] 	= $data['description'];	
		$ads['title'] 			= $data['title'];
		$ads['created_on'] 		= date('Y-m-d H:i:s');
		$ads['status'] 			= $data['status'];
		$ads['created_by'] 		= $this->adminData->id;
		$result = $this->db->insert('vs_content',$ads);
		return $result;
	}

	public function _updateContent($data,$id)
	{
		
		$data['modified_on'] 	= date('Y-m-d H:i:s');
		$data['modified_by'] 	= $this->adminData->id;
		$this->db->where('id',$id);
		$result = $this->db->update('vs_content',$data);
		return $result;
	}

	public function _deleteContent($id)
	{
		$data['is_deleted'] = 'Y';
		$this->db->where('id',$id);
		$result = $this->db->update('vs_content',$data);
		return $result;
	}
	
}