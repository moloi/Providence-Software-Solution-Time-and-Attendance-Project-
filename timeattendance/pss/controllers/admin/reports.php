<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends MY_Controller
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

    public function Timesheets()
    {
    	$records 	= $this->user_model->AccessUsers();
        $header 	= array("Name","Work Location","Email","Mobile","Reported To","Username");
        $columns 	= array("name","wl","email","mobilenum","reported_to","username");
        $actions 	= array(
			 "view"=>array("LABEL"=>"Download","URL"=>"reports/Timesheetsdownloads","CLASS"=>"btn-success","ICON"=>"fa-download","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"view")
            );
        $user['rows'] 		= $records;
        $user['header'] 	= $header;
        $user['columns'] 	= $columns;
        $user['actions'] 	= $actions;
        $users[] 			= $user;
        $data['type'] 			= "Timesheets";
        $data['table_data'] 	= $users;
        $data['breadcrumbs'] 	= array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>'')
        	);
        $this->load->view('admin/frames/header' , $data);
        $this->load->view('admin/user/reportsview',$data);
    }

 public function Attendance()
    {
    	$records 	= $this->user_model->AccessUsers();
        $header 	= array("Name","Work Location","Email","Mobile","Reported To","Username");
        $columns 	= array("name","wl","email","mobilenum","reported_to","username");
        $actions 	= array(
			 "view"=>array("LABEL"=>"Download","URL"=>"reports/Attendancedownloads","CLASS"=>"btn-success","ICON"=>"fa-download","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"view")
            );
        $user['rows'] 		= $records;
        $user['header'] 	= $header;
        $user['columns'] 	= $columns;
        $user['actions'] 	= $actions;
        $users[] 			= $user;
        $data['type'] 			= "Attendance";
        $data['table_data'] 	= $users;
        $data['breadcrumbs'] 	= array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>'')
        	);
        $this->load->view('admin/frames/header' , $data);
        $this->load->view('admin/user/reportsview',$data);
    }
 public function Leave()
    {
    	$records 	= $this->user_model->AccessUsers();
        $header 	= array("Name","Work Location","Email","Mobile","Reported To","Username");
        $columns 	= array("name","wl","email","mobilenum","reported_to","username");
        $actions 	= array(
			 "view"=>array("LABEL"=>"Download","URL"=>"reports/Leavedownloads","CLASS"=>"btn-success","ICON"=>"fa-download","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"view")
            );
        $user['rows'] 		= $records;
        $user['header'] 	= $header;
        $user['columns'] 	= $columns;
        $user['actions'] 	= $actions;
        $users[] 			= $user;
        $data['type'] 			= "Leave";
        $data['table_data'] 	= $users;
        $data['breadcrumbs'] 	= array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>'')
        	);
        $this->load->view('admin/frames/header' , $data);
        $this->load->view('admin/user/reportsview',$data);
    }
    public function Trips()
    {
    	$records 	= $this->user_model->AccessUsers();
        $header 	= array("Name","Work Location","Email","Mobile","Reported To","Username");
        $columns 	= array("name","wl","email","mobilenum","reported_to","username");
        $actions 	= array(
			 "view"=>array("LABEL"=>"Download","URL"=>"reports/Tripsdownloads","CLASS"=>"btn-success","ICON"=>"fa-download","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"view")
            );
        $user['rows'] 		= $records;
        $user['header'] 	= $header;
        $user['columns'] 	= $columns;
        $user['actions'] 	= $actions;
        $users[] 			= $user;
        $data['type'] 			= "Trips";
        $data['table_data'] 	= $users;
        $data['breadcrumbs'] 	= array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>'')
        	);
        $this->load->view('admin/frames/header' , $data);
        $this->load->view('admin/user/reportsview',$data);
    }

    public function form()
    {
    	$data['title'] = " Add User";
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Add User','URL'=>'')
        	);
		$data['work_location'] = $this->user_model->AccessWorklocations();
	    $data['user_role'] = $this->user_model->AccessRoles(); 
        
        if($this->form_validation->run('user') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/user/reportsview',$data);
    	}else{
    		$data = $this->input->post();
    		$this->insert($data);
    	}
    }

    public function insert($data)
    {
    	$result = $this->user_model->_insert($data);
    	if($result == true)
    	{
            set_flashdata(1);
    		redirect(HTTP_PATH."user");
    	}
    }

    public function edit($id)
    {
    	$records = $this->user_model->AccessUser($id);
    	$data['roles'] = $records;
    	$data['title'] = " Edit Userroles";
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Edit User','URL'=>'')
        	);
		$data['work_location'] = $this->user_model->AccessWorklocations();	
        $data['user_role'] = $this->user_model->AccessRoles(); 
        if($this->form_validation->run('useredit') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/user/reportsview',$data);
    	}else{
    		$data = $this->input->post();
    		$this->update($data,$id);
    	}
    }

    public function update($data,$id)
    {
    	$result = $this->user_model->_update($data,$id);
    	if($result == true)
    	{
            set_flashdata(2);
    		redirect(HTTP_PATH."user");
    	}
    }
public function Timesheetsdownloads($id){

    	$records = $this->user_model->AccessUser($id);
    	$data['roles'] = $records;
         foreach ($records as $key => $array){
    	$data['title'] = "Download Reports for ".$array['firstName'];
         }
         $data['type'] = "Timesheets";
         $data['func'] = 'Timesheetsdownloads';
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Edit User','URL'=>'')
        	);
	    $this->load->view('admin/frames/header' , $data);
	    $this->load->view('admin/user/getdate',$data);
       
}
public function Tripsdownloads($id){

    	$records = $this->user_model->AccessUser($id);
    	$data['roles'] = $records;
         foreach ($records as $key => $array){
    	$data['title'] = "Download Reports for ".$array['firstName'];
         }
         $data['type'] = 'Trips';
         $data['func'] = 'Tripsdownloads';
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Edit User','URL'=>'')
        	);
	    $this->load->view('admin/frames/header' , $data);
	    $this->load->view('admin/user/getdate',$data);
       
}
public function AllTripsdownloads(){

    	
    	 $data['title'] = "Download Reports for all employees";
         $data['type'] = 'allTrips';
         $data['fileName'] = 'AllTrips';
         $data['func'] = 'AllTripsdownloads';
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Edit User','URL'=>'')
        	);
	    $this->load->view('admin/frames/header' , $data);
	    $this->load->view('admin/user/getdate',$data);
       
}
public function Leavedownloads($id){

    	$records = $this->user_model->AccessUser($id);
    	$data['roles'] = $records;
         foreach ($records as $key => $array){
    	$data['title'] = "Download Reports for ".$array['firstName'];
         }
         $data['type'] = 'Leave';
         $data['func'] = 'Leavedownloads';
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Edit User','URL'=>'')
        	);
	    $this->load->view('admin/frames/header' , $data);
	    $this->load->view('admin/user/getdate',$data);
}
public function Attendancedownloads($id){

    	$records = $this->user_model->AccessUser($id);
    	$data['roles'] = $records;
         foreach ($records as $key => $array){
    	$data['title'] = "Download Reports for ".$array['firstName'];
         }
         $data['type'] = 'Attendance';
         $data['func'] = 'Attendancedownloads';

        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Edit User','URL'=>'')
        	);
	    $this->load->view('admin/frames/header' , $data);
	    $this->load->view('admin/user/getdate',$data);
       
}
public function downloadReports($id,$type,$func){
         $data = $this->input->post();
    	 $result = $this->user_model->Downloadl($data,$id,$type);
        if($result==false){
        set_flashdata(2);
        redirect(HTTP_PATH."reports");
        }
        elseif ($result=="nothing") {
            set_flashdata(2);
        redirect(HTTP_PATH."reports/".$func."/".$id);
        }
        else{
        if($type == "Attendance"){
        redirect(HTTP_PATH."PSSAppreports/attendance/".$result.".csv");
        }
        elseif ($type=="Timesheets") {
        redirect(HTTP_PATH."PSSAppreports/timesheet/".$result.".csv");
        }
        elseif($type == "Leave"){
        redirect(HTTP_PATH."PSSAppreports/leave/".$result.".csv");
        }
        elseif($type == "Trips"){
        redirect(HTTP_PATH."PSSAppreports/trips/".$result.".csv");
        }
        elseif($type == "allTrips"){
        redirect(HTTP_PATH."PSSAppreports/trips/".$result.".csv");
        }
        }
        }
    public function delete($id)
	{
		$result = $this->user_model->_delete($id);
    	if($result == true)
    	{
            set_flashdata(3);
    		redirect(HTTP_PATH."user");
    	}
	}

    public function active_inactive_user($id, $action)
    {
        if($action == "active"){
            $result = $this->user_model->ChangeStatus("users", $id, '1');
        }
        else{
            $result = $this->user_model->ChangeStatus("users", $id, '2');
        }
        set_flashdata(1);
        echo $result;
        exit;
    }
	public function user_view($id)
    {
        $records = $this->user_model->AccessUsers($id);
        $data['roles'] = $records;
        $data['title'] = " View Users";
        $data['breadcrumbs'] = array(
            '0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
            '1'=>array('LABEL'=>'users','URL'=>base_url('').'user'),
            '2'=>array('LABEL'=>'View Content','URL'=>'')
            );
			if($this->form_validation->run('user') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/user/reportsview',$data);
    	}
        
    }
}