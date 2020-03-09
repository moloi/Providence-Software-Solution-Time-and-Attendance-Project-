<?php

class User_model extends MY_Model {
	
	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}
	
	public function AccessUser($id = '') 
	{
		if($id != "")
			$this->db->where('id',$id);
		$this->db->where('is_deleted','N');
		$query = $this->db->get('users');
		//echo $this->db->last_query();
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			return $data;
		}
	}
	public function AccessMeeting() 
	{
		$query = $this->db->get('tblmeeting');
		//echo $this->db->last_query();
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			return $data;
		}
	}
	
	public function AccessUsers($id = '') 
	{
	// //echo $id; exit;	
	// array("name","wl","email","mobilenum","reported_to","username");
	$this->db->select('*,work_locations.status as wstatus, u.status as status, work_locations.title as wl,work_locations.id as wid,u.id as id,u.mobile as mobilenum');
    $this->db->join('work_locations', 'work_locations.id = u.work_location', 'left'); 
		if($id != "")
		$this->db->where('u.id',$id);
		$this->db->where('u.is_deleted','N');
		//$this->db->where('u.user_role','2');
		$query = $this->db->get('users as u');
		
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			$i = 0;
			foreach($data as $data1){
				$data[$i]['name'] = $data1['firstName'].' '.$data1['surName'];
			$i++;
			}
			//print_r($data);
			return $data;
		}
	}
public function AccessPresent(){
		$query = $this->db->query("CALL `prc_Isuserpresent`()");
		if($query->num_rows() < 0){
			return false;
		}else{
	      return $data = $query->result_array();		
			}
}
		public function Downloadl($data,$id,$type) 
	{	
	$const = 2000;
	$m = $data['month'];
	$y = $const+$data['year'];
	$name = $data['firstName'];
	if($type=="Timesheets"){
	$query = $this->db->query("CALL `prc_getTimesheetReports`('$id','$m','$y')");
		
		if($query->num_rows() < 0){
			return false;
		}else{
	      $data = $query->result_array();
			$i = 0;
			if(!empty($data)){
		if (!file_exists('PSSAppreports/timesheet')) {
		mkdir('PSSAppreports/timesheet', 0777, true);
		}
      $output = fopen("PSSAppreports/timesheet/".$name."-".$m."-".$y.".csv", "w"); 
      fputcsv($output, array('Id', 'UserId','Employe name','Morning Session','Afternon Session','Timesheet Date','Approve','Approver','Manager'),';',' ');
			foreach($data as $data1){
			$row[] = $data1;
			fputcsv($output,array($row[$i]['Id'],$row[$i]['UserId'],$row[$i]['EmpName'],$row[$i]['MorningSession'],$row[$i]['AfternoonSession'],$row[$i]['TimesheetDate'],$row[$i]['approve'],$row[$i]['approver'],$row[$i]['report_to']),';',' ');

			$i++;
			}
			//print_r($data);
			fclose($output);
			//force_download('jj/file.csv');
			return  $name."-".$m."-".$y;
			}
			else{

        return 'nothing';
			}
		}
	}
	elseif ($type=="Leave"){
			$query = $this->db->query("CALL `prc_leaveReports`('$id','$m','$y')");
		
		if($query->num_rows() < 0){
			return false;
		}else{
	      $data = $query->result_array();
			$i = 0;
	if(!empty($data)){
		if (!file_exists('PSSAppreports/leave')) {
		mkdir('PSSAppreports/leave', 0777, true);
		}
      $output = fopen("PSSAppreports/leave/".$name."-".$m."-".$y.".csv", "w"); 
      fputcsv($output, array('Id', 'UserId','Employee name','Leave Type','Paid type','Start Date','End Date','Reason','Approver','Status','department','Contract','ID number','Address','Created','Escalated To','Signature'),';',' ');
			foreach($data as $data1){
			$row[] = $data1;
			fputcsv($output,array($row[$i]['Id'],$row[$i]['UserId'],$row[$i]['EmpName'],$row[$i]['LeaveType'],$row[$i]['paidtype'],$row[$i]['StartDate'],$row[$i]['EndDate'],$row[$i]['Comments'],$row[$i]['Approver'],$row[$i]['Status'],$row[$i]['department'],$row[$i]['job_type'],$row[$i]['id_num'],$row[$i]['emp_address'],$row[$i]['Created_on'],isset($row[$i]['escalated_to']) ? $row[$i]['escalated_to']:'Not Escalated','Electronical signed Excel'),';',' ');

			$i++;
			}
			fclose($output);
			return  $name."-".$m."-".$y;
		}
	    else{

        return 'nothing';
			}
		}

	}
	elseif ($type=="Attendance"){
	$query = $this->db->query("CALL `prc_attendanceReports`('$id','$m','$y')");
		
		if($query->num_rows() < 0){
			return false;
		}else{
	      $data = $query->result_array();
			$i = 0;
			if(!empty($data)){
		if (!file_exists('PSSAppreports/attendance')) {
		mkdir('PSSAppreports/attendance', 0777, true);
		}
      $output = fopen("PSSAppreports/attendance/".$name."-".$m."-".$y.".csv", "w");  
      fputcsv($output, array('Id', 'UserId','CheckIn','CheckOut','work location','reported To'),';',' ');
			foreach($data as $data1){
			$row[] = $data1;
			fputcsv($output,array($row[$i]['id'],$row[$i]['emp_no'],$row[$i]['checkin'],$row[$i]['checkout'],$row[$i]['work_location'],$row[$i]['reported_to']),';',' ');

			$i++;
			}
			// print_r($data);
			fclose($output);
			//force_download('jj/file.csv');
			return  $name."-".$m."-".$y;
			}
			else{

        return 'nothing';
			}
		}
	}
	elseif ($type=="Trips") {
		$query = $this->db->query("CALL `prc_getTripsreports`('$id','$m','$y')");
		
		if($query->num_rows() < 0){
			return false;
		}else{
	      $data = $query->result_array();
			$i = 0;
	if(!empty($data)){
		if (!file_exists('PSSAppreports/trips')) {
		mkdir('PSSAppreports/trips', 0777, true);
		}
      $output = fopen("PSSAppreports/trips/".$name."-".$m."-".$y.".csv", "w");
      fputcsv($output, array('Id', 'UserId','Employee name','Departure','Destination','Travel Time','Distance','Reason','Approver','Status','Created On'),';',' ');
			foreach($data as $data1){
			$row[] = $data1;
			fputcsv($output,array($row[$i]['id'],$row[$i]['userId'],$row[$i]['name'],$row[$i]['slocation'],$row[$i]['dlocation'],$row[$i]['travel_time'],$row[$i]['distance'],$row[$i]['reason'],$row[$i]['approver'],$row[$i]['status'],$row[$i]['created_on']),';',' ');

			$i++;
			}
			//print_r($data);
			fclose($output);
			//force_download('jj/file.csv');
			return  $name."-".$m."-".$y;
		 }
		else{

        return 'nothing';
			}
		}
	}
	elseif($type == 'allTrips'){
		$query = $this->db->query("CALL `prc_getallTripsreports`('$m','$y')");
		if($query->num_rows() < 0){
			return false;
		}else{
	      $data = $query->result_array();
			$i = 0;
	if(!empty($data)){
		if (!file_exists('PSSAppreports/trips')) {
		mkdir('PSSAppreports/trips', 0777, true);
		}
      $output = fopen("PSSAppreports/trips/".$name."-".$m."-".$y.".csv", "w");  
      fputcsv($output, array('Id', 'UserId','Employee name','Departure','Destination','Travel Time','Distance','Reason','Approver','Status','Created On'),';',' ');
			foreach($data as $data1){
			$row[] = $data1;
			fputcsv($output,array($row[$i]['id'],$row[$i]['userId'],$row[$i]['name'],$row[$i]['slocation'],$row[$i]['dlocation'],$row[$i]['travel_time'],$row[$i]['distance'],$row[$i]['reason'],$row[$i]['approver'],$row[$i]['status'],$row[$i]['created_on']),';',' ');

			$i++;
			}
			//print_r($data);
			fclose($output);
			//force_download('jj/file.csv');
			return  $name."-".$m."-".$y;
		 }
		else{

        return 'nothing';
			}
		}
	}



	}

	
	
	public function _insert($data)
	{
		$data['password'] 		= md5($data['password']);
		$data['date_of_birth']	= date('Y-m-d',strtotime($data['date_of_birth']));
		$data['created_on'] 	= date('Y-m-d H:i:s');
		$data['created_by'] 	= $this->adminData->id;
		unset($data['cpassword']);
		$result = $this->db->insert('users',$data);
		return $result;
	}

	public function _update($data,$id)
	{
		$data['modified_on'] 	= date('Y-m-d H:i:s');
		if(array_key_exists('date_of_birth', $data))
		$data['date_of_birth']	= date('Y-m-d',strtotime($data['date_of_birth']));

		$data['modified_by'] 	= $this->adminData->id;
		$this->db->where('id',$id);
		$result = $this->db->update('users',$data);
		return $result;
	}

	public function _delete($id)
	{
		
		$this->db->where('id',$id);
		$result = $this->db->delete('users');
		return $result;
	}

	public function AccessRoles() 
	{
		$this->db->where('is_deleted','N');
		$this->db->where('status','1');
		$query = $this->db->get('userroles');
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			$result = array();
			foreach ($data as $key => $array) {
				$result[$array['id']] = $array['title'];
			}
			return $result;
		}
	}
		public function AccessManagers() 
	{
		$this->db->where('user_role',1);
		$this->db->or_where('user_role',2);
		$this->db->where('is_deleted','N');
		$query = $this->db->get('users');
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			$result = array();
			foreach ($data as $key => $array) {
				
					$result[$array['email']] = $array['email'];
			}
			return $result;
		}
	}
	public function AccessWorklocations() 
	{
		//$this->db->where('created_by',$this->presenterData->id);
		$this->db->where('status','1');
		$query = $this->db->get('work_locations');
		
		if($query->num_rows() < 0){
			return false;
		}else{
			$data = $query->result_array();
			$result = array();
			foreach ($data as $key => $array) {
				
					$result[$array['id']] = $array['title'];
			}
			return $result;
		}
	}
}