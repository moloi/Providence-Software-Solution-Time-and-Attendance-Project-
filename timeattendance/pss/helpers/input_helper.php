<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('post_data'))
{
	function post_data($fields){
		$CI =& get_instance();
		$post = $CI->input->post();
		if(empty($post))
		{
			return;
		}
		
		foreach($fields as $field)
		{
			if(array_key_exists($field,$post))
			{
				$postdata[$field] = $CI->input->post($field);
			}
			else {
				$postdata[$field] = '';
			}
		}
		
		return $postdata;
	}
}

if ( ! function_exists('validate_msgs'))
{
	function validate_msgs()
	{
		$CI =& get_instance();
		$flag = array();
		$post = $CI->input->post();
		
		if(empty($post))
		{
			return;
		}
		
		foreach($post as $key => $postdata)
		{
			if(form_error($key))
			{
				$flag[$key]=form_error($key);
			}
		}
		
		return $flag;
	}
}

if ( ! function_exists('set_flashdata'))
{
	function set_flashdata($value)
	{
		$CI =& get_instance();
		if(!empty($value)) $CI->session->set_flashdata('msg',$value);
	}
}

if ( ! function_exists('redirect_to'))
{
	function redirect_to($response,$url = '',$msg)
	{
		if($response == 1){
			$data['url'] = HTTP_PATH.$url;
		}else{
			$data = $response;
		}
		if(is_numeric($response)){
			$data = array(
					 'msg'=>array("type"=>"warning","msg"=>$msg),
					 'obj'=>$response
				   );  
		}else if($response !==true){
			$data = array(
					 'msg'=>array("type"=>"validation","msg"=>"There are some required fields."),
					 'obj'=>$response
				   );  
		}else {
			$data = array(
					 'msg'=>array("type"=>"success","msg"=>$msg),
					 'redirect'=>$url
				   );  	
		}
		echo json_encode($data);
	}
}
