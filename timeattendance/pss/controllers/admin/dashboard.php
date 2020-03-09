<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->data['sucess'] = $this->session->flashdata('msg');
        if(empty($this->adminData->id)){
            redirect(HTTP_PATH.'admin');
        }
      $this->load->model('admin/user_model');
    }

    public function index()
    {
        // $records 	= $this->user_model->AccessMeeting();
        $records 	= $this->user_model->AccessPresent();
        $header 	= array("Id","First Name","Sur Name","Email","CheckIn","CheckOut","Work location","Manager");
        $columns 	= array("id","firstName","surName","email","checkin","checkout","work_location","reported_to");
        $actions    = array();
        $user['actions'] 	= $actions;
        $user['rows'] 		= $records;
        $user['header'] 	= $header;
        $user['columns'] 	= $columns;
         $users[] 			= $user;
        $data['table_data'] = $users;
        $data['title'] = " Home";
        $data['breadcrumbs'] = array('0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'login/'));
        $this->load->view('admin/frames/header' , $data);
        $this->load->view('admin/home/dashboardview',$data);
        
    }

    public function logout(){
         set_flashdata(1);
        $this->session->unset_userdata('admin');
        redirect(HTTP_PATH.'admin');
    }
}