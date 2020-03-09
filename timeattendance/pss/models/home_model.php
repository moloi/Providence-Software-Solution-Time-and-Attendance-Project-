<?php

class Home_model extends MY_Model {
	
	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}

	public function AccessAds($id = '')
	{
		$this->db->select('id,image,url,description');
		if($id != "")
			$this->db->where('id',$id);
		$this->db->where('is_deleted','N');
		$this->db->where('status','1');
		$this->db->order_by('position','ASC');
		$query = $this->db->get('vs_ads');
		if($query->num_rows() <= 0){
			return false;
		}else{
			$result = $query->result_array();
			$data = array();
			foreach ($result as $key => $array):
				$data[$key]['id']			= $array['id'];
				$data[$key]['image']		= ADS.$array['image'];
				$data[$key]['url']			= $array['url'];
				$data[$key]['description'] 	= $array['description'];
			endforeach;
			return $data;
		}
	}
	public function AccessContent($id = '')
	{
		$this->db->select('id,title,description');
		if($id != "")
			$this->db->where('id',$id);
		$this->db->where('is_deleted','N');
		$this->db->where('status','1');
		$this->db->order_by('position','ASC');
		$query = $this->db->get('vs_content');
		if($query->num_rows() <= 0){
			return false;
		}else{
			$result = $query->result_array();
			$data = array();
			foreach ($result as $key => $array):
				$data[$key]['id']			= $array['id'];
				$data[$key]['title']			= $array['title'];
				$data[$key]['description'] 	= $array['description'];
			endforeach;
			return $data;
		}
	}
	
	public function AccessContentdetails($id = '')
	{
		$this->db->select('id,title,description');
		$this->db->where('is_deleted','N');
		$this->db->where('status','1');
		if($id != ""){
			$this->db->where('id',$id);
		}
		
		$query = $this->db->get('vs_content');
		//echo $this->db->last_query();
		if($query->num_rows() <= 0){
			return false;
		}else{
			$result = $query->result_array();
			$data 	= array();
			foreach ($result as $key => $array):
				$data[$key]['id']				= $array['id'];
				$data[$key]['title']			= $array['title'];
				$data[$key]['description']		= $array['description'];
				
			endforeach;
			return $data;
		}
	}
}