<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model{

	function __construct()
	{
		log_message('debug', "Model Class Initialized");
	}

	function __get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}

	public function ChangeStatus($table, $id, $status)
	{
		$data['status'] 				= $status;
		$data['modified_on'] 			= date('Y-m-d H:i:s');
		$data['modified_by'] 			= $this->adminData->id;
		$this->db->where('id',$id);
		$result = $this->db->update($table,$data);
		return $result;
	}

	
	//To reomve unwanted characters and converting into utf
    public function convert_utf8($string)
    {
        $string = utf8_decode($string);
        // $string = preg_replace("/[^[:alnum:][:space:]]/ui", '', $string);
        $string = preg_replace("/^([-\w\s])/i", '', $string);
        return $string;
    }
}
// END Model Class

/* End of file Model.php */
/* Location: ./system/core/Model.php */