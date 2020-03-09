<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	
	function __construct(){
        parent::__construct();
        $this->output->nocache(); // Cache Clear
        $this->load->model('admin/admin_model');
        if(!is_array($this->session->userdata('admin'))){
            if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
            {
                echo json_encode('SESSION_ERROR');
                die();
            }else
            {
                redirect(HTTP_PATH.'admin');
            }
        }
        if((empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') && !in_array($this->router->method,array('grid'))) 
        {
            $this->session->set_userdata('admin_last_access',$this->session->userdata('admin_access'));
            $this->session->set_userdata('admin_access', current_url());
        }
        $this->adminData = (object)$this->session->userdata('admin');
        
	}
    // To upload images with provided config
    public function upload_images($path,$filedname, $allowedtypes, $max_size, $max_width, $max_height, $max_filename)
    {
        $this->load->library('upload');
        $dir = $path;
        $config['overwrite']        = FALSE;
        $config['upload_path']      = $dir;
        $config['allowed_types']    = $allowedtypes;
        $config['max_size']         = $max_size; 
        $config['max_width']        = $max_width; 
        $config['max_height']       = $max_height; 
        $config['max_filename']     = $max_filename;
        $this->upload->initialize($config);         
        if ( ! $this->upload->do_upload($filedname)){
            $status = "error";
            $msg    = $this->upload->display_errors();   
        }    
        else{
            $upload_data = $this->upload->data();
            $status = "success";
            $msg    =  $upload_data['file_name'];
        } 
        $response = array( 'status' => $status, 'msg' => $msg );
        return $response;
    }
    // To upload video with provided config
    public function upload_video($path,$filedname, $allowedtypes, $max_size, $max_filename)
    {
        $this->load->library('upload');
        $dir = $path;
        $config['overwrite']        = FALSE;
        $config['upload_path']      = $dir;
        $config['allowed_types']    = $allowedtypes;
        $config['max_size']         = $max_size; 
        $config['max_filename']     = $max_filename;
        $this->upload->initialize($config);         
        if ( ! $this->upload->do_upload($filedname)){
            $status = "error";
            $msg    = $this->upload->display_errors();   
        }    
        else{
            $upload_data = $this->upload->data();
            $status = "success";
            $msg    =  $upload_data['file_name'];
        } 
        $response = array( 'status' => $status, 'msg' => $msg );
        return $response;
    }
    // To upload attachment using ajax with provided config
    public function upload_ajax_attachment($path,$filedname, $allowedtypes, $max_size, $max_filename)
    {
        $this->load->library('upload');
        $dir = $path;
        $config['overwrite']        = FALSE;
        $config['upload_path']      = $dir;
        $config['allowed_types']    = $allowedtypes;
        $config['max_size']         = $max_size; 
        $config['max_filename']     = $max_filename;
        $this->upload->initialize($config);         
        if ( ! $this->upload->do_upload($filedname)){
            $status = "error";
            $msg    = $this->upload->display_errors();   
        }    
        else{
            $upload_data = $this->upload->data();
            $status = "success";
            $msg    =  $upload_data['full_path'];
        } 
        $response = array( 'status' => $status, 'msg' => $msg );
        return $response;
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
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */

