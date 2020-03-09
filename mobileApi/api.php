<?php
error_reporting(E_ALL ^ E_DEPRECATED);

require_once("Rest.inc.php");
require_once("mobileAppFunctions.php");
header("Access-Control-Allow-Origin: *");
class API extends REST {
	public $data = "";
	//Enter details of your database
	// const DB_SERVER = "sql41.jnb2.host-h.net";
	// const DB_USER = "providwusertms";
	const DB_SERVER = "127.0.0.1:3306";
	const DB_USER = "root";
	const DB_PASSWORD = "root";
	// const DB_PASSWORD = "qcCchZzMmz8";
	const DB = "providencetms";

	private $db = NULL;

	public function __construct(){

		parent::__construct();  // Init parent contructor
		$this->dbConnect();
	}

	private function dbConnect(){

		$this->db = mysql_connect(self::DB_SERVER,self::DB_USER,self::DB_PASSWORD);
		if($this->db)
			mysql_select_db(self::DB,$this->db);
	}

    /*
     * Public method for access api.
     * This method dynmically call the method based on the query string
     *
     */
	public function processApi(){

		$func = strtolower(trim(str_replace("/","",$_REQUEST['request'])));
		if((int)method_exists($this,$func) > 0)
			$this->$func();
		else
			$this->response('Error code 404, Page not found',404);   // If the method not exist with in this class, response would be "Page not found".
	}

	/*
     *  get work locations
	 */

	private function Getlocations(){

		$mobileAppFunctions = new mobileAppFunctions();
		$result['locations']	= $mobileAppFunctions->Getlocations();
	    $this->response($this->json($result), 200);
	}

	private function locations(){

		$mobileAppFunctions = new mobileAppFunctions();
		$result['locations']	= $mobileAppFunctions->locations();
		$this->response($this->json($result), 200);
	}

		private function GetAllEmps(){

		$mobileAppFunctions = new mobileAppFunctions();
		$result['emps']	= $mobileAppFunctions->GetAllEmps();
		$this->response($this->json($result), 200);
	}
	/*
     *  get managers
	 */
	private function managers(){

		if($this->get_request_method() != "GET"){
		$this->response('',406);
		}
		$user_role 	= $this->_request['user_role'];

		$mobileAppFunctions = new mobileAppFunctions();
		$result['managers']	= $mobileAppFunctions->managers($user_role);
		$this->response($this->json($result), 200);
	}
	/*
     *  Emp Checkin
     */
	private function checkin(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 	= $this->_request['userId'];
		$location 	= $this->_request['location'];
		$GPS 		= $this->_request['GPS'];
		$reportto	= $this->_request['reportto'];

		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($userId) && !empty($location)){
			// checking whether the login data is there or not
			$result['checkin'] = $mobileAppFunctions->checkin($userId,$location,$GPS,$reportto);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}

	/*
     *  Emp Checkout
     */
	private function checkout(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$recordId 	= $this->_request['recordId'];
		$userId 	= $this->_request['userId'];

		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($userId) && !empty($recordId)){
			// checking whether the login data is there or not
			$result['checkout'] = $mobileAppFunctions->checkout($userId,$recordId);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}

	/*
     *  Start Business Trip
     */
	private function BusinessTrip(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 	= $this->_request['userId'];
		$name 		= $this->_request['name'];
		$slocation 	= $this->_request['slocation'];
		$dlocation 	= $this->_request['dlocation'];
		$stime		= $this->_request['stime'];
		$dtime		= $this->_request['dtime'];
                $travel_time	= $this->_request['travel_time'];
		$distance	= $this->_request['distance'];
		$reason		= $this->_request['reason'];
		$approver	= $this->_request['approver'];
		$status		= $this->_request['status'];

		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($userId) && !empty($slocation)){
			// checking whether the login data is there or not
			$result['BusinessTrip'] = $mobileAppFunctions->BusinessTrip($userId,$name,$slocation,$dlocation,$stime,$dtime,$distance,$reason,$approver,$status,$travel_time);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}

	/*
     *  GetBusinessTrips
     */
	private function GetBusinessTrips(){

		$mobileAppFunctions = new mobileAppFunctions();
		$result['businesstrips']	= $mobileAppFunctions->GetBusinessTrips();
		$this->response($this->json($result), 200);
	}

	/*
     *  Update BusinessTrip Status
     */
	private function UpdateBusinessTripStatus(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$Status 	= $this->_request['Status'];
		$Id 		= $this->_request['Id'];
		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($Id) && !empty($Status)){
			// checking whether the login data is there or not
			$result['UpdateBusinessTripStatus'] = $mobileAppFunctions->UpdateBusinessTripStatus($Id,$Status);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}


	/*
     *  Submit Leave Application
     */
		private function LeaveApplication(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 	= $this->_request['userId'];
		$name 		= $this->_request['name'];
		$leavetype 	= $this->_request['leavetype'];
		$sdate 		= $this->_request['sdate'];
		$edate		= $this->_request['edate'];
		$comments	= $this->_request['comments'];
		$approver	= $this->_request['approver'];
		$status		= $this->_request['status'];
                $other		= $this->_request['other'];
		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($userId)){
			// checking whether the login data is there or not
			$result['LeaveApplication'] = $mobileAppFunctions->LeaveApplication($userId,$name,$leavetype,$sdate,$edate,$comments,$approver,$status,$other);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}


	/*
     *  GetLeaveRequests
     */
	private function GetLeaveRequests(){

		$mobileAppFunctions = new mobileAppFunctions();
		$result['LeaveRequests']	= $mobileAppFunctions->GetLeaveRequests();
		$this->response($this->json($result), 200);
	}

	/*
     *  GetTimesheets
     */
private function Escalate()
{
	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}
	$request_id 	= $this->_request['requestId'];
	$mobileAppFunctions = new MobileAppFunctions();
        $result['LeaveRequest'] = $mobileAppFunctions->Escalate($request_id);
	$this->response($this->json($result), 200);
}

		private function GetTimesheetsdownload(){
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 				= $this->_request['userId'];
		$name				    = $this->_request['name'];
		$fromdate 				= $this->_request['fromdate'];
		$todate			 		= $this->_request['todate'];
		$mobileAppFunctions = new mobileAppFunctions();
		$result['GetTimesheets']	= $mobileAppFunctions->GetTimesheetsdownload($name,$userId,$fromdate,$todate);
	        $this->response($this->json($result), 200);
	}

private function GetTripsdownload(){
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 				= $this->_request['userId'];
		$name				    = $this->_request['name'];
		$fromdate 				= $this->_request['fromdate'];
		$todate			 		= $this->_request['todate'];
		$mobileAppFunctions = new mobileAppFunctions();
		$result['GetTrips']	= $mobileAppFunctions->GetTripsdownload($name,$userId,$fromdate,$todate);
	        $this->response($this->json($result), 200);
	}
		private function GetAttendancedownload(){
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 				= $this->_request['userId'];
		$name				    = $this->_request['name'];
		$fromdate 				= $this->_request['fromdate'];
		$todate			 		= $this->_request['todate'];
		$mobileAppFunctions = new mobileAppFunctions();
		$result['GetAttenance']	= $mobileAppFunctions->GetAttendancedownload($name,$userId,$fromdate,$todate);
	        $this->response($this->json($result), 200);
	}
	private function GetLeavedownload(){
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 				= $this->_request['userId'];
		$name				    = $this->_request['name'];
		$fromdate 				= $this->_request['fromdate'];
		$todate			 		= $this->_request['todate'];
		$mobileAppFunctions = new mobileAppFunctions();
		$result['GetLeave']	= $mobileAppFunctions->GetLeavedownload($name,$userId,$fromdate,$todate);
	        $this->response($this->json($result), 200);
	}
	private function GetTimesheets(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 				= $this->_request['userId'];
		$fromdate 				= $this->_request['fromdate'];
		$todate			 		= $this->_request['todate'];

		$mobileAppFunctions = new mobileAppFunctions();
		$result['GetTimesheets']	= $mobileAppFunctions->GetTimesheets($userId,$fromdate,$todate);
		$this->response($this->json($result), 200);
	}


	/*
     *  Submit Timesheet Application
     */
	private function TimesheetApplication(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$userId 			= $this->_request['userId'];
		$name 				= $this->_request['name'];
		$morningsession 	= $this->_request['morningsession'];
		$afternoonsession 	= $this->_request['afternoonsession'];
		$timesheetdate		= $this->_request['timesheetdate'];
                $report_to = $this->_request['report_to'];

		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($userId)){
			// checking whether the login data is there or not
			$result['TimesheetApplication'] = $mobileAppFunctions->TimesheetApplication($userId,$name,$morningsession,$afternoonsession,$timesheetdate,$report_to);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}

	/*
     *  GetallEmployees
     */
	private function GetAllEmployees(){

			if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$username 	= $this->_request['username'];
    $user_role =$this->_request['user_role'];
		$mobileAppFunctions = new mobileAppFunctions();
		$result['GetAllEmployees']	= $mobileAppFunctions->GetAllEmployees($username,$user_role);
		$this->response($this->json($result), 200);
	}
	/*
     *  Update Leave Request
     */
	private function UpdateLeaveRequest(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$Status 	= $this->_request['Status'];
		$Id 		= $this->_request['Id'];
		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($Id) && !empty($Status)){
			// checking whether the login data is there or not
			$result['LeaveRequest'] = $mobileAppFunctions->UpdateLeaveRequest($Id,$Status);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}



	/*
     *  End Business Trip
     */
	private function endBusinessTrip(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$recordId 	= $this->_request['recordId'];
		$userId 	= $this->_request['userId'];
		$dlocation 	= $this->_request['dlocation'];
		$dgps	 	= $this->_request['dgps'];
		$traveltime	= $this->_request['traveltime'];
		$distance 	= $this->_request['distance'];

		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($userId) && !empty($recordId)){
			// checking whether the login data is there or not
			$result['endBusinessTrip'] = $mobileAppFunctions->endBusinessTrip($userId,$recordId,$dlocation,$dgps,$traveltime,$distance);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}

	/*
     *  Login
     */
	private function login(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$username = $this->_request['username'];
		$pwd = md5($this->_request['pwd']);

		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($username) && !empty($pwd)){
			// checking whether the login data is there or not
			$result['user_details'] = $mobileAppFunctions->validate_login($username,$pwd);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}
	private function ApproveTimeSheet_func()
	{
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$stat = $this->_request['status'];
		$user_Id = $this->_request['userId'];
		$timedate = $this->_request['timesheet'];
		$approver = $this->_request['approver'];
		$mobileAppFunctions = new MobileAppFunctions();
              if(!empty($stat) && !empty($user_Id) && !empty($timedate))
               {
		$result['st'] = $mobileAppFunctions->autoApproveTimeSheet($user_Id,$stat,$timedate,$approver);
               }
               else
               {
                return false;
               }
                $this->response($this->json($result), 200);

	}


	private function SetPassword()
	{
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$new_pwd = md5($this->_request['pwd']);
		$user_Id = $this->_request['user_id'];
		$mobileAppFunctions = new MobileAppFunctions();
		$result['isSet'] = $mobileAppFunctions->SetPassword($user_Id,$new_pwd);
                $this->response($this->json($result), 200);
	}

	private function mci_SetPassword()
	{
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$new_pwd = md5($this->_request['pwd']);
		$user_Id = $this->_request['user_id'];
		$mobileAppFunctions = new MobileAppFunctions();
		$result['isSet'] = $mobileAppFunctions->mci_SetPassword($user_Id,$new_pwd);
                $this->response($this->json($result), 200);
	}

	private function InsertTestDemo()
	{
	 if($this->get_request_method() != "GET"){
		 $this->response('',406);
	 }
	 $email = $this->_request['email'];
	 $name = $this->_request['name'];
	 $mobileAppFunctions = new MobileAppFunctions();
	 $result['isInsert'] = $mobileAppFunctions->insertTestDemo($name,$email);
			 $this->response($this->json($result), 200);

	}

	private function restPasswordLink()
	 {
		 if($this->get_request_method() != "GET"){
			 $this->response('',406);
		 }
		 $email = $this->_request['email'];
		 $mobileAppFunctions = new MobileAppFunctions();
		 $result['sent'] = $mobileAppFunctions->restPasswordLink($email);
		 $this->response($this->json($result), 200);
	 }


private function updateRestedPassword()
{
	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}
	$tmplink = $this->_request['tmplink'];
	$key = $this->_request['key'];
	$mobileAppFunctions = new MobileAppFunctions();
	$result['sent'] = $mobileAppFunctions->updateRestedPassword($tmplink,$key);
	//$this->response($this->json($result), 200);
}

private function mci_restPasswordLink()
	 {
		 if($this->get_request_method() != "GET"){
			 $this->response('',406);
		 }
		 $email = $this->_request['email'];
		 $mobileAppFunctions = new MobileAppFunctions();
		 $result['sent'] = $mobileAppFunctions->mci_restPasswordLink($email);
		 $this->response($this->json($result), 200);
	 }

private function update_registersocial(){

	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}

	$f_name =  $this->_request['fname'];
	$l_name =  $this->_request['lname'];
	$email = $this->_request['email'];
	$socialid = $this->_request['socialid'];
	$pwd = md5($this->_request['pwd']);
        $logintype = $this->_request['login_type'];
	$mobileAppFunctions = new MobileAppFunctions();
	$result['isupdated'] = $mobileAppFunctions->update_registersocial($socialid,$f_name,$l_name,$email,$pwd,$logintype);
	$this->response($this->json($result), 200);

}

private function newtimesheet()
{
	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}
	$report_to = $this->_request['report_to'];
	$mobileAppFunctions = new MobileAppFunctions();
	$result['newtimeSt'] = $mobileAppFunctions->newtimesheet($report_to);
	$this->response($this->json($result), 200);
}

		private function mci_allContacts(){

		$mobileAppFunctions = new MobileAppFunctions();
		$result['user_details'] = $mobileAppFunctions->mci_allContacts();
		$this->response($this->json($result), 200);

		}

private function registerUser(){
	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}
	$title =  $this->_request['title'];
	$f_name =  $this->_request['f_name'];
	$l_name =  $this->_request['l_name'];
	$email = $this->_request['email'];
	$reg_type = $this->_request['regtype'];
	$address =  $this->_request['address'];
	$country =  $this->_request['country'];
	$pwd =  md5($this->_request['pwd']);
	$mobile_num = $this->_request['mobile_num'];
        $logintype = $this->_request['login_type'];
	$token = $this->_request['token'];
	$mobileAppFunctions = new MobileAppFunctions();
	if(!empty($token) && !empty($title) && !empty($pwd) && !empty($f_name) && !empty($l_name)&& !empty($email)&& !empty($reg_type)&& !empty($address)&& !empty($mobile_num) && !empty($country)){
		// checking whether the login data is there or not
		$result['isreg'] = $mobileAppFunctions->RegisterUser($title,$f_name,$l_name,$email,$reg_type,$address,$country,$pwd,$mobile_num,$logintype,$token);
	}
	else
	{
		return false;
	}
	$this->response($this->json($result), 200);


}

private function registersocialG()
{
	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}
	$f_name =  $this->_request['fname'];
	$l_name =  $this->_request['lname'];
	$email = $this->_request['email'];
	$socialid = $this->_request['socialid'];
	$token = $this->_request['token'];
	$mobileAppFunctions = new MobileAppFunctions();
	if(!empty($token) && !empty($f_name) && !empty($l_name)&& !empty($email)&& !empty($socialid)){
		// checking whether the login data is there or not
		$result['user_details'] = $mobileAppFunctions->registersocialG($f_name,$l_name,$socialid ,$email,$token);
	}
	else
	{
		return false;
	}
	$this->response($this->json($result), 200);
}

private function registersocialF()
{
	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}

	$f_name =  $this->_request['fname'];
	$socialid = $this->_request['socialid'];
	$token = $this->_request['token'];
	$mobileAppFunctions = new MobileAppFunctions();
	if(!empty($token) && !empty($f_name) && !empty($socialid)){
		// checking whether the login data is there or not
		$result['user_details'] = $mobileAppFunctions->registersocialF($f_name,$socialid,$token);
	}
	else
	{
		return false;
	}
	$this->response($this->json($result), 200);
}

private function upload_start(){

$m = "uploads/";
$target_path = $m.basename($_FILES['file']['name']);
$type = pathinfo($target_path, PATHINFO_EXTENSION);
$id  = pathinfo($target_path,PATHINFO_FILENAME);


if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)){
	$data = file_get_contents($target_path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	$mobileAppFunctions = new MobileAppFunctions();
	$result['update'] = $mobileAppFunctions->upload_start($base64,$id);
	$this->response($this->json($result), 200);
}else{
echo $target_path;
    echo "There was an error uploading the file, please try again!";
}

}

private function upload_end(){

$m = "uploads/";
$target_path = $m.basename($_FILES['file']['name']);
$type = pathinfo($target_path, PATHINFO_EXTENSION);
$id  = pathinfo($target_path,PATHINFO_FILENAME);


if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)){
	$data = file_get_contents($target_path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	$mobileAppFunctions = new MobileAppFunctions();
	$result['update'] = $mobileAppFunctions->upload_end($base64,$id);
	$this->response($this->json($result), 200);
}else{
echo $target_path;
    echo "There was an error uploading the file, please try again!";
}

}

private function mciupdateProfile(){
	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}
	$title =  $this->_request['title'];
	$f_name =  $this->_request['f_name'];
	$l_name =  $this->_request['l_name'];
	$email = $this->_request['email'];
	$reg_type = $this->_request['regtype'];
	$address =  $this->_request['address'];
	$country =  $this->_request['country'];
	$mobile_num = $this->_request['mobile_num'];

	$mobileAppFunctions = new MobileAppFunctions();
	if(!empty($title) && !empty($f_name) && !empty($l_name)&& !empty($email)&& !empty($reg_type)&& !empty($address)&& !empty($mobile_num) && !empty($country)){
		// checking whether the login data is there or not
		$result['updated'] = $mobileAppFunctions->mciupdateProfile($title,$f_name,$l_name,$reg_type,$email,$address,$country,$mobile_num);
	}
	else
	{
		return false;
	}
	$this->response($this->json($result), 200);

}


private function mcipicUpdate(){
	if($this->get_request_method() != "GET"){
		$this->response('',406);
	}

	$email = $this->_request['email'];
	$base64= $this->_request['base64'];
	$mobileAppFunctions = new MobileAppFunctions();
	if(!empty($email)&& !empty($base64)){
		// checking whether the login data is there or not
		$result['isupdated'] = $mobileAppFunctions->mcipicUpdate($email,$base64);
	}
	else
	{
		return false;
	}
	$this->response($this->json($result), 200);
}
private function meetingUpdates(){
			if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$meeting = $this->_request['morningsession'];
		$date = $this->_request['date'];
		$name = $this->_request['name'];

		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($meeting) && !empty($date)){
			// checking whether the login data is there or not
			$result['details'] = $mobileAppFunctions->meetingUpdates($meeting,$date,$name);
		} else {
			return $rs[]='';
		}
		$this->response($this->json($result), 200);
}
	private function getMeeting(){
	$mobileAppFunctions = new MobileAppFunctions();
	$result['meeting'] = $mobileAppFunctions->getMeeting();
	$this->response($this->json($result), 200);
	}


	private function getAllminutes(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$fromdate = $this->_request['fromdate'];
		$todate	= $this->_request['todate'];

		$mobileAppFunctions = new mobileAppFunctions();
		$result['getminutes'] = $mobileAppFunctions->getAllminutes($fromdate,$todate);
		$this->response($this->json($result), 200);
	}
private function travell_emails()
	{
	// 	 if($this->get_request_method() != "GET"){
	// 		 $this->response('',406);
	// 	 }
	// 	 $email = $this->_request['email'];
		 $mobileAppFunctions = new MobileAppFunctions();
		 $result['sent'] = $mobileAppFunctions->travell_emails();
		 $this->response($this->json($result), 200);
	 }
		private function UpdateLeaveRequestType(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$type 	= $this->_request['paidtype'];
		$Id 		= $this->_request['Id'];
		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($Id) && !empty($type)){
			// checking whether the login data is there or not
			$result['LeaveRequest'] = $mobileAppFunctions->UpdateLeaveRequestType($Id,$type);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}

private function mci_Contactus()
	 {
		 if($this->get_request_method() != "GET"){
			 $this->response('',406);
		 }
		$email = $this->_request['email'];
		$name = $this->_request['name'];
		$msg = $this->_request['msg'];
		if(!empty($msg) && !empty($name) && !empty($email)){
		 $mobileAppFunctions = new MobileAppFunctions();
		 $result['sent'] = $mobileAppFunctions->mci_Contactus($email,$name,$msg);
		 $this->response($this->json($result), 200);
		}
		else {
return false;
		}
	 }
private function upload_proPic(){
$prefix = "../";
$naming = "uploads_profile_pics/".date('Y-m-d-H-i-s') . '_' . uniqid();
$getname = basename($_FILES['file']['name']);
$id  = pathinfo($getname,PATHINFO_FILENAME);
$target_path = $naming.basename($_FILES['file']['name']);

if(move_uploaded_file($_FILES['file']['tmp_name'], $prefix.$target_path)){
	$mobileAppFunctions = new MobileAppFunctions();
	$result['update'] = $mobileAppFunctions->upload_proPic($target_path,$id);

	$this->response($this->json($result), 200);
}else{
    echo $target_path;
    echo "There was an error uploading the file, please try again!";
}
}
	private function mci_login(){

		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}
		$username = $this->_request['username'];
		$pwd = md5($this->_request['pwd']);

		$mobileAppFunctions = new MobileAppFunctions();
		if(!empty($username) && !empty($pwd)){
			// checking whether the login data is there or not
			$result['user_details'] = $mobileAppFunctions->mci_login($username,$pwd);
		} else {
			return false;
		}
		$this->response($this->json($result), 200);
	}
	
	/* 
	*  Update Push Notifications Status
	*/
	private function update_allow_pushnotifications(){
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}

		$uID =  $this->_request['uID'];
		$pushNotificationFlog = $this->_request['pushNotificationFlog'];
		$playSoundsFlog = $this->_request['playSoundsFlog'];
		$vibrateFlog = $this->_request['vibrateFlog'];
		$popupFlog = $this->_request['popupFlog'];
		$mobileAppFunctions = new MobileAppFunctions();
		$result['isupdated'] = $mobileAppFunctions->update_allow_pushnotifications($uID, $pushNotificationFlog, $playSoundsFlog, $vibrateFlog, $popupFlog);
		$this->response($this->json($result), 200);
	}
	
	/* 
	*  Get Committee results
	*/
	private function get_committee(){
		if($this->get_request_method() != "GET"){
			$this->response('',406);
		}		
		$result = '{"core":[{"title":"Dr","name":"Ali Khammas","country":"UAE","position":"Congress President","url":"Ali.jpg", "dtls":""},{"title":"Dr","name":"Abdul Wahid AlWahidi","country":"UAE","position":"","url":"Abdulwahid.jpg", "dtls":""},{"title":"Dr","name":"Faruq M. Badiuddin","country":"UAE","position":"","url":"Faruq.jpg", "dtls":""},{"title":"Prof","name":"Karl Miller","country":"UAE","position":"","url":"Karl.jpg", "dtls":""},{"title":"Dr","name":"Abdelrahman Nimeri","country":"UAE","position":"","url":"Abdelrahman.jpg", "dtls":""},{"title":"Dr","name":"Aayed Al Qahtani","country":"KSA","position":"","url":"Aayed.jpg", "dtls":""},{"title":"Dr","name":"Basim Alkhafaji","country":"UAE","position":"","url":"Basim.jpg", "dtls":""},{"title":"Dr","name":"Essa Muallemi","country":"UAE","position":"","url":"Essa.jpg", "dtls":""},{"title":"Dr","name":"Salman Sabah","country":"UAE","position":"","url":"Salman.jpg", "dtls":""}],"scientific":[{"title":"Prof","name":"Jacques Himpens","country":"Belgium","position":"IFSO President","url":"Jacques.jpg", "dtls":"Chief, Metabolic Surgery department CHIREC Hospital, Delta Campus, Brussels, Belgium Consultant, Saint Pierre University Hospital, Brussels, Belgium"},{"title":"Dr","name":"Ali Khammas","country":"UAE","position":"Local Chair","url":"Ali.jpg", "dtls":""},{"title":"Dr","name":"Faruq Badiuddin","country":"UAE","position":"Chairman of Organizing Committee","url":"Faruq.jpg", "dtls":"Consultant Surgeon - Mediclinic Dubai, UAE"},{"title":"Dr","name":"Abdelrahman Nimeri","country":"UAE","position":"Chairman of Scientific Committee","url":"Abdelrahman.jpg", "dtls":"President, Pan Arab Society for Metabolic and Bariatric Surgery (PASMBS) Director, Bariatric & Metabolic Institute BMI Abu Dhabi Chief, Division of General, Thoracic & Vascular Surgery Surgeon Champion, ACS NSQIP & MBSAQIP at SKMC"},{"title":"Dr","name":"Aayad Al Qahtani","country":"KSA","position":"Vice Chairman of Scientific Committee","url":"Aayed.jpg", "dtls":"Professor and Consultant of MIS and Obesity Surgery at King Saud University KSADirector of King Saud\'s University\'s Obesity Chair KSA"},{"title":"Prof","name":"Karl Miller","country":"UAE","position":"Vice Chairman of Organizing Committee","url":"Karl.jpg", "dtls":"Associate Professor of SurgeryCMO Mohamed Bin Rashid Al Maktoum Academic Medical Centre, Dubai UAE"},{"title":"Prof","name":"Almino Ramos","country":"Brazil","position":"IFSO President Elect","url":"Almino.jpg", "dtls":""},{"title":"Prof","name":"Wendy Brown","country":"Australia","position":"Chair of IFSO Scientific Committee","url":"Wendy.jpg", "dtls":"President, Australia and New Zealand Gastrooesophageal Surgery AssociationPast President, Australia and New Zealand Metabolic and Obesity Surgery Society Chair, Monash University Department of Surgery Alfred Health Clinical Director, Australian and New Zealand Bariatric Surgery Registry Chair, IFSO Scientific Committee Deputy Chair, Victorian Surgical Consultative Council"},{"title":"Prof","name":"Miguel Herrera","country":"","position":"Vice Chair of IFSO Scientific Committee","url":"Miguel.jpg", "dtls":"Professor of Bariatric Surgery UNAM, Mexico Director, Nutrition and Obesity Center, ABC Medical Center, Mexico"},{"title":"Ms","name":"Tracy Martinez","country":"","position":"Chair of IFSO I.H. Committee","url":"Tracy.jpg", "dtls":"RN, BSN, CBN Program Director, Wittgrove Bariatric Center, Del Mar, Calif, USA Chair, IFSO Integrated Health Committee Past President, ASMBS Integrated Health Board Member Obesity Action Coalition Committee Member ASMBS CBN committee"},{"title":"Ms","name":"Mary O\'Kane","country":"UK","position":"Vice Chair of I.H. Committee","url":"Mary.jpg", "dtls":"Chair Elect, IFSO Integrated Health Committee Allied Health Professional representative British Obesity and Metabolic Surgery Society (BOMSS) British Dietetic Association Fellow Consultant Dietitian (Adult Obesity), Leeds Teaching Hospitals NHS Trust"},{"title":"Assoc. Prof","name":"John Morton","country":"North America Chapter","position":"Representative","url":"John.jpg", "dtls":"Chief, Bariatric and Minimally Invasive Surgery Past-President, American Society for Metabolic and Bariatric Surgery 2014-2015 Stanford School of Medicine"},{"title":"Dr","name":"Muffazal Lakdawala","country":"Asia Pacific Chapter","position":"Representative","url":"Muffazal.jpg", "dtls":"Founder, Digestive Health Institute Chairman - Institute of Minimal Access Surgical Sciences and Research Centre, Saifee Hospital, India Mumbai Section Chief: Division of Laparoscopic Oncology, India"},{"title":"Prof","name":"Jean Marc Chevallier","country":"Europe Chapter","position":"Representative","url":"Jean.jpg", "dtls":"Gastrointestinal Surgeon at Hopital Europeen Georges-Pompidou, France"},{"title":"Dr","name":"Camilo Boza","country":"Latin America Chapter","position":"Representative","url":"Camilo.jpg", "dtls":""}],"organising":[{"title":"","name":"Faruq M Badiuddin","country":"UAE","position":"Chairman of Organizing Committee","url":"Faruq.jpg", "dtls":""},{"title":"","name":"Karl Miller","country":"UAE","position":"Vice Chairman of Organizing Committee","url":"Karl.jpg", "dtls":""},{"title":"","name":"Amer Darazi","country":"Bahrain","position":"","url":"camera.png", "dtls":""},{"title":"","name":"Almino Ramos","country":"Brazil","position":"","url":"Almino.jpg", "dtls":""},{"title":"","name":"Antonio Torres","country":"Spain","position":"","url":"Antonio.jpg", "dtls":""},{"title":"","name":"Asim Shabbir","country":"Singapore","position":"","url":"Asim.jpg", "dtls":""},{"title":"","name":"Bassem Safadi","country":"Lebanon","position":"","url":"Bassem.jpg", "dtls":""},{"title":"","name":"CK Huang","country":"Taiwaan","position":"","url":"Huang.jpg", "dtls":""},{"title":"","name":"DH Park","country":"Korea","position":"","url":"camera.png", "dtls":""},{"title":"","name":"Jean Marc Chavellier","country":"France","position":"","url":"Jean.jpg", "dtls":""},{"title":"","name":"Kelvin Higa","country":"USA","position":"","url":"Kelvin.jpg", "dtls":""},{"title":"","name":"Khalid Gawdat","country":"Egypt","position":"","url":"Khaled.jpg", "dtls":""},{"title":"","name":"Lillian Kow","country":"Australia","position":"","url":"Lillian.jpg", "dtls":""},{"title":"","name":"Luigi Angrisani","country":"Italy","position":"","url":"Luigi.jpg", "dtls":""},{"title":"","name":"Michel Gagner","country":"Canada","position":"","url":"Michel2.jpg", "dtls":""},{"title":"","name":"Manoel Galvao Neto","country":"Brazil","position":"","url":"Manoel2.jpg", "dtls":""},{"title":"","name":"Mousa Khoursheed","country":"Kuwait","position":"","url":"Mousa.jpg", "dtls":""},{"title":"","name":"Pradeep Chowbey","country":"India","position":"","url":"Pradeep.jpg", "dtls":""},{"title":"","name":"Praveen Raj","country":"India","position":"","url":"Praveen2.jpg", "dtls":""},{"title":"","name":"Raad Almehdi","country":"Oman","position":"","url":"Raad.jpg", "dtls":""},{"title":"","name":"Rudolf Weiner","country":"Germany","position":"","url":"Rudolf.jpg", "dtls":""},{"title":"","name":"Shaw Somers","country":"UK","position":"","url":"Shaw.jpg", "dtls":""},{"title":"","name":"Scott Shikora","country":"USA","position":"","url":"Scott.jpg", "dtls":""},{"title":"","name":"Simon Wong","country":"Thailand","position":"","url":"Simon.jpg", "dtls":""},{"title":"","name":"Waleed Bukhari","country":"KSA","position":"","url":"Waleed.jpg", "dtls":""}]}';
		//$this->response($this->json($result), 200);
		$this->response($result, 200);
	}	
	
	private function get_committee_json(){
		$result = '[{"core":[{"title": "Dr","name": "Ali Khammas","country": "UAE","position": "Congress President","url": "Ali.jpg"}, {"title": "Dr","name": "Abdul Wahid AlWahidi","country": "UAE","position": "","url": "Abdulwahid.jpg"}, {"title": "Dr","name": "Faruq M. Badiuddin","country": "UAE","position": "","url": "Faruq.jpg"}, {"title": "Prof","name": "Karl Miller","country": "UAE","position": "","url": "Karl.jpg"}, {"title": "Dr","name": "Abdelrahman Nimeri","country": "UAE","position": "","url": "Abdelrahman.jpg"}, {"title": "Dr","name": "Aayed Al Qahtani","country": "KSA","position": "","url": "Aayed.jpg"},{"title": "Dr","name": "Basim Alkhafaji","country": "UAE","position": "","url": "Basim.jpg"},{"title": "Dr","name": "Essa Muallemi","country": "UAE","position": "","url": "Essa.jpg"},{"title": "Dr","name": "Salman Sabah","country": "UAE","position": "","url": "Salman.jpg"}]},{"scientific": [{"title": "Prof","name": "Jacques Himpens","country": "Belgium","position": "IFSO President","url": "Jacques.jpg"}, {"title": "Dr","name": "Ali Khammas","country": "UAE","position": "Local Chair","url": "Ali.jpg"}, {"title": "Dr","name": "Faruq Badiuddin","country": "UAE","position": "Chairman of Organizing Committee","url": "Faruq.jpg"}, {"title": "Dr","name": "Abdelrahman Nimeri","country": "UAE","position": "Chairman of Scientific Committee","url": "Abdelrahman.jpg"}, {"title": "Dr","name": "Aayad Al Qahtani","country": "KSA","position": "Vice Chairman of Scientific Committee","url": "Aayed.jpg"}, {"title": "Prof","name": "Karl Miller","country": "UAE","position": "Vice Chairman of Organizing Committee","url": "Karl.jpg"}, {"title": "Prof","name": "Almino Ramos","country": "Brazil","position": "IFSO President Elect","url": "Almino.jpg"}, {"title": "Prof","name": "Wendy Brown","country": "Australia","position": "Chair of IFSO Scientific Committee","url": "Wendy.jpg"}, {"title": "Prof","name": "Miguel Herrera","country": "","position": "Vice Chair of IFSO Scientific Committee","url": "Miguel.jpg"}, {"title": "Ms","name": "Tracy Martinez","country": "","position": "Chair of IFSO I.H. Committee","url": "Tracy.jpg"}, {"title": "Ms","name": "Mary O\'Kane","country": "UK","position": "Vice Chair of I.H. Committee","url": "Mary.jpg"},{"title": "Assoc. Prof","name": "John Morton","country": "North America Chapter","position": "Representative","url": "John.jpg"}, {"title": "Dr","name": "Muffazal Lakdawala","country": "Asia Pacific Chapter","position": "Representative","url": "Muffazal.jpg"}, {"title": "Prof","name": "Jean Marc Chevallier","country": "Europe Chapter","position": "Representative","url": "Jean.jpg"}, {"title": "Dr","name": "Camilo Boza","country": "Latin America Chapter","position": "Representative	","url": "Camilo.jpg"}]}, {"organising": [{"title": "","name": "Faruq M Badiuddin","country": "UAE","position": "Chairman of Organizing Committee","url": "Faruq.jpg"}, {"title": "","name": "Karl Miller","country": "UAE","position": "Vice Chairman of Organizing Committee","url": "Karl.jpg"},{"title": "","name": "Amer Darazi","country": "Bahrain","position": "","url": "camera.png"},{"title": "","name": "Almino Ramos","country": "Brazil","position": "","url": "Almino.jpg"},{"title": "","name": "Antonio Torres","country": "Spain","position": "","url": "Antonio.jpg"},{"title": "","name": "Asim Shabbir","country": "Singapore","position": "","url": "Asim.jpg"},{"title": "","name": "Bassem Safadi","country": "Lebanon","position": "","url": "Bassem.jpg"},{"title": "","name": "CK Huang","country": "Taiwaan","position": "","url": "Huang.jpg"},{"title": "","name": "DH Park","country": "Korea","position": "","url": "camera.png"},{"title": "","name": "Jean Marc Chavellier","country": "France","position": "","url": "Jean.jpg"},{"title": "","name": "Kelvin Higa","country": "USA","position": "","url": "Kelvin.jpg"},{"title": "","name": "Khalid Gawdat","country": "Egypt","position": "","url": "Khaled.jpg"},{"title": "","name": "Lillian Kow","country": "Australia","position": "","url": "Lillian.jpg"},{"title": "","name": "Luigi Angrisani","country": "Italy","position": "","url": "Luigi.jpg"},{"title": "","name": "Michel Gagner","country": "Canada","position": "","url": "Michel2.jpg"},{"title": "","name": "Manoel Galvao Neto","country": "Brazil","position": "","url": "Manoel2.jpg"},{"title": "","name": "Mousa Khoursheed","country": "Kuwait","position": "","url": "Mousa.jpg"},{"title": "","name": "Pradeep Chowbey","country": "India","position": "","url": "Pradeep.jpg"},{"title": "","name": "Praveen Raj","country": "India","position": "","url": "Praveen2.jpg"},{"title": "","name": "Raad Almehdi","country": "Oman","position": "","url": "Raad.jpg"},{"title": "","name": "Rudolf Weiner","country": "Germany","position": "","url": "Rudolf.jpg"},{"title": "","name": "Shaw Somers","country": "UK","position": "","url": "Shaw.jpg"},{"title": "","name": "Scott Shikora","country": "USA","position": "","url": "Scott.jpg"},{"title": "","name": "Simon Wong","country": "Thailand","position": "","url": "Simon.jpg"},{"title": "","name": "Waleed Bukhari","country": "KSA","position": "","url": "Waleed.jpg"}]}]'; 
		$this->response($result, 200);
	}
	
    /*
     *  Encode array into JSON
     */
	private function json($data){
		if(is_array($data)){
			return json_encode($data);
		}
	}

	
} //End Class

// Initiiate Library
$api = new API;
$api->processApi();
?>