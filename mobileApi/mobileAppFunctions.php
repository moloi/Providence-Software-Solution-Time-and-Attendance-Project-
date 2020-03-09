<?php
define('DB_WILD_PREFIX','');
class MobileAppFunctions {

	// const DB_SERVER = "sql41.jnb2.host-h.net";
	// const DB_USER = "providwusertms";
	  const DB_SERVER = "127:0.0.0:8888";
    const DB_USER = "root";
    const DB_PASSWORD = "qcCchZzMmz8";
    const DB = "providencetms";

	private $db = NULL;

	public function __construct(){
		$this->dbConnect();
	}

	private function dbConnect(){

		$this->db = mysql_connect(self::DB_SERVER,self::DB_USER,self::DB_PASSWORD);
		if($this->db)
			mysql_select_db(self::DB,$this->db);
	}
function Getlocations(){

		$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."work_locations order by id",$this->db);

		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			// while($row = mysql_fetch_assoc($result)){
			// $rs[] = $row;
			// }

	  header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id', 'country', 'title', 'latitude', 'longitude','created_on','created_by','modified_on','modified_by','status','mobile'),';',' ');  
     $row[] = mysql_fetch_assoc($result);
	 $count=0;
	  while($ro = mysql_fetch_assoc($result))  
      {  
           
	// 	//    $rs[] = explode(",",$row);
	          $row[] = $ro;
		   
	   		    fputcsv($output,array($row[$count]['id'],$row[$count]['country'],$row[$count]['title'],$row[$count]['latitude'],$row[$count]['longitude'],$row[$count]['created_on'],$row[$count]['created_by'],$row[$count]['modified_on'],$row[$count]['modified_by'],$row[$count]['status'],$row[$count]['mobile']),';',' ');
		   $count++;
      }  

      fclose($output);  
	
		}


	}
	function locations(){

		$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."work_locations order by id",$this->db);

		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;
		}
	}

		function GetAllEmps(){
	       $result = mysql_query("call prc_getAllEmp()",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;
		}

	}
	function managers($user_role){

        if($user_role==2)
		{
			$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."users where user_role = 1 order by firstName",$this->db);
		}
		elseif($user_role==3)
		{
            $result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."users where user_role = 2 order by firstName",$this->db);
		}
		else
		{
		  $result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."users where user_role = 1 OR user_role=2 order by firstName",$this->db);
		}
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;
		}
	}

	function checkin($userId,$location,$GPS,$reportto){

		$result = mysql_query("INSERT INTO ".DB_WILD_PREFIX."employee_login_details (emp_no,checkin,checkout,work_location,GPS_location,reported_to,working_hours) VALUES ('".$userId."', now(), '', '".$location."', '".$GPS."', '".$reportto."', '')",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return mysql_insert_id();
	}

	function checkout($userId,$recordId) {

		//$result = mysql_query("UPDATE ".DB_WILD_PREFIX."employee_login_details SET checkout = now() where id='".$recordId."' and emp_no='".$userId."'",$this->db);
                $result = mysql_query("call prc_checkout($recordId,$userId)",$this->db);
		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return 'updated';
	}

	function BusinessTrip($userId,$name,$slocation,$dlocation,$stime,$dtime,$distance,$reason,$approver,$status,$travel_time){

		$result = mysql_query("INSERT INTO ".DB_WILD_PREFIX."business_trip (userId,name,slocation,dlocation,start_time,end_time,distance,reason,approver,status,travel_time,created_on) VALUES ('".$userId."','".$name."', '".$slocation."', '".$dlocation."', '".$stime."', '".$dtime."', '".$distance."', '".$reason."', '".$approver."', '".$status."','".$travel_time."', now())",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else {
        $subject = 'Website Change Request';
	$headers = "From: no-reply" ."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$body ="<html >
		<body style='text-align:center;'>
		<div sytle='text-align:center;'>Providence Software Solutions</div>
		<hr style='display: block; margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto; border-style: inset;border-width: 1px;border-color:red;width:100%'/> 
		<table style='display: table;max-width:600px;border-spacing: 10px; border-collapse: separate;
		width: 50%;
		margin-left: auto;
		margin-right: auto;'>
		<tr style='color: white;background-color: red;'>
		<th>Traveller</th>
		<th>Departure Address</th>
		<th>Destination Address</th>
		<th>Date</th>
		<th>Travel distance</th>
		<th>Travel time</th>
		<th>Reason</th>
		</tr>
		<tr>
		<td style='text-align:center;'>".$name."</td>
		<td style='text-align:center;'>".$slocation."</td>
		<td style='text-align:center;'>".$dlocation." </td>
		<td style='text-align:center;'>".$stime."</td>
		<td style='text-align:center;'>".$distance."</td>
		<td style='text-align:center;'>".$travel_time."</td>
		<td style='text-align:center;'>".$reason."</td>
		</tr>
		</table>
		<div style='margin-top: 20px;'>May you please go to PSS app to take actions on this request</div>
		</body>
		</html>
		";

			if(mail($approver,"No reply",$body,$headers))
			{
			  return mysql_insert_id();
			}
			else return mysql_insert_id();
			
				
   }
	}
	function GetBusinessTrips(){

		//$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."business_trip order by id",$this->db);
	       $result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."business_trip where created_on BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW() order by created_on desc",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;
		}

	}

	function UpdateBusinessTripStatus($Id,$Status) {
		//return "UPDATE ".DB_WILD_PREFIX."business_trip SET status = '".$Status."' where id='".$Id."'";
		$result = mysql_query("UPDATE ".DB_WILD_PREFIX."business_trip SET status = '".$Status."' where id='".$Id."'",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return 'updated';
	}

			function LeaveApplication($userId,$name,$leavetype,$sdate,$edate,$comments,$approver,$status,$other){

	//return "INSERT INTO ".DB_WILD_PREFIX."tblLeave (UserId,EmpName,LeaveType,StartDate,EndDate,Comments,Approver,Status,Created_on) VALUES ('".$userId."','".$name."', '".$leavetype."', '".$sdate."', '".$edate."', '".$comments."', '".$approver."', '".$status."', now())"
		$result = mysql_query("INSERT INTO ".DB_WILD_PREFIX."tblLeave (UserId,EmpName,LeaveType,StartDate,EndDate,Comments,Approver,Status,other,Created_on) VALUES ('".$userId."','".$name."', '".$leavetype."', '".$sdate."', '".$edate."', '".$comments."', '".$approver."', '".$status."', '".$other."', now())",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else {
        $subject = 'Website Change Request';
	$headers = "From: no-reply" ."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$body ="<html >    
 <body style='text-align:center;'>
<div sytle='text-align:center;'>Providence Software Solutions</div>
<hr style='display: block; margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto; border-style: inset;border-width: 1px;border-color:red;width:100%'/> 
<table style='display: table;max-width:600px;border-spacing: 10px; border-collapse: separate;
    width: 50%;
    margin-left: auto;
    margin-right: auto;'>
  <tr style='color: white;background-color: red;'>
    <th>Emp Name</th>
    <th>Start date</th> 
    <th>End date</th>
    <th>Comment</th>
  </tr>
  <tr>
    <td style='text-align:center;'>".$name."</td>
    <td style='text-align:center;'>".$sdate."</td> 
    <td style='text-align:center;'>".$edate."</td>
    <td style='text-align:center;'>".$comments."</td>
  </tr>
</table>
 <div style='margin-top: 20px;'>May you please go to PSS app to take actions on this request</div>
    </body>
</html>";

			if(mail($approver,"No reply",$body,$headers))
			{
			  return 'submitted';
			}
			else{
							  return 'submitted';
			}
	 }
	}
	function GetLeaveRequests(){

	       $result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."tblLeave where Created_on BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW() order by Created_on desc",$this->db);
		//$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."tblLeave order by id",$this->db);
                   // $result = mysql_query("call new_procedure()",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;
		}

	}

        function Escalate($request_id)
	{
		$result = mysql_query("call escalate($request_id)",$this->db);
		if(! $result )
		{
                  die('Could not enter data: ' . mysql_error());
		} else return 'updated';

	}
		function GetTimesheetsdownload($name,$userId,$fromdate,$todate){
		$result = mysql_query("call prc_getTimesheetReports('$userId','$fromdate','$todate')",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {

			$output = fopen("../reportsdownloads/Timesheet/".$name.".csv", "w");
			fputcsv($output, array('id', 'UserId', 'Employee Name', 'Morning Session', 'Afternon Session','TimeSheet Date','Created On','Appoved','Approver','Reporting To'),';',' ');  
			$row[] = mysql_fetch_assoc($result);
			$count=0;
			while($ro = mysql_fetch_assoc($result))  
			{  
			$row[] = $ro;
			fputcsv($output,array($row[$count]['Id'],$row[$count]['UserId'],$row[$count]['EmpName'],$row[$count]['MorningSession'],$row[$count]['AfternoonSession'],$row[$count]['TimesheetDate'],$row[$count]['Created_On'],$row[$count]['approve'],$row[$count]['approver'],$row[$count]['report_to']),';',' ');
			$count++;
			}
                        fputcsv($output,array($row[$count]['Id'],$row[$count]['UserId'],$row[$count]['EmpName'],$row[$count]['MorningSession'],$row[$count]['AfternoonSession'],$row[$count]['TimesheetDate'],$row[$count]['Created_On'],$row[$count]['approve'],$row[$count]['approver'],$row[$count]['report_to']),';',' ');

			fclose($output);  
                     return $row;
		}
	}
	function GetTripsdownload($name,$userId,$fromdate,$todate){
		$result = mysql_query("call prc_getTripsreports('$userId','$fromdate','$todate')",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {

			$output = fopen("../reportsdownloads/TripsReports/".$name.".csv", "w");
			fputcsv($output, array('id', 'userId', 'Employee Name', 'Depature', 'Destination','Travel time','Distance','Reason','Approver','Status','Date Created'),';',' ');  
			$row[] = mysql_fetch_assoc($result);
			$count=0;
			while($ro = mysql_fetch_assoc($result))  
			{  
			$row[] = $ro;  
			fputcsv($output,array($row[$count]['id'],$row[$count]['userId'],$row[$count]['name'],$row[$count]['slocation'],$row[$count]['dlocation'],$row[$count]['travel_time'],$row[$count]['distance'],$row[$count]['reason'],$row[$count]['approver'],$row[$count]['status'],$row[$count]['created_on']),';',' ');
			$count++;
			}  
		  fputcsv($output,array($row[$count]['id'],$row[$count]['userId'],$row[$count]['name'],$row[$count]['slocation'],$row[$count]['dlocation'],$row[$count]['travel_time'],$row[$count]['distance'],$row[$count]['reason'],$row[$count]['approver'],$row[$count]['status'],$row[$count]['created_on']),';',' ');
			fclose($output);  
                     return $row;
		}
	}

	function GetAttendancedownload($name,$userId,$fromdate,$todate){
		$result = mysql_query("call prc_attendanceReports('$userId','$fromdate','$todate')",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {

			$output = fopen("../reportsdownloads/AttendanceReports/".$name.".csv", "w");  
			fputcsv($output, array('id', 'userId', 'Check In', 'Check Out', 'Work Location','Report To','Working hours'),';',' ');  
			$row[] = mysql_fetch_assoc($result);
			$count=0;
			while($ro = mysql_fetch_assoc($result))  
			{  
			$row[] = $ro;  
			fputcsv($output,array($row[$count]['id'],$row[$count]['emp_no'],$row[$count]['checkin'],$row[$count]['checkout'],$row[$count]['work_location'],$row[$count]['report_to'],$row[$count]['working_hours']),';',' ');
			$count++;
			}  
			fputcsv($output,array($row[$count]['id'],$row[$count]['emp_no'],$row[$count]['checkin'],$row[$count]['checkout'],$row[$count]['work_location'],$row[$count]['report_to'],$row[$count]['working_hours']),';',' ');
			fclose($output);  
                     return $row;
		}
	}

	function GetLeavedownload($name,$userId,$fromdate,$todate){
		$result = mysql_query("call prc_leaveReports('$userId','$fromdate','$todate')",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {

			$output = fopen("../reportsdownloads/LeaveReports/".$name.".csv", "w");  
			fputcsv($output, array('id', 'userId', 'Employee Name', 'Leave Type', 'Start Date','End Date','Comments','Approver','Status','Created On','Escalated To'),';',' ');  
			$row[] = mysql_fetch_assoc($result);
			$count=0;
			while($ro = mysql_fetch_assoc($result))  
			{  
			$row[] = $ro;  
			fputcsv($output,array($row[$count]['Id'],$row[$count]['UserId'],$row[$count]['EmpName'],$row[$count]['LeaveType'],$row[$count]['StartDate'],$row[$count]['EndDate'],$row[$count]['Comments'],$row[$count]['Approver'],$row[$count]['Status'],$row[$count]['Created_on'],$row[$count]['escalated_to']),';',' ');
			$count++;
			}  
			fputcsv($output,array($row[$count]['Id'],$row[$count]['UserId'],$row[$count]['EmpName'],$row[$count]['LeaveType'],$row[$count]['StartDate'],$row[$count]['EndDate'],$row[$count]['Comments'],$row[$count]['Approver'],$row[$count]['Status'],$row[$count]['Created_on'],$row[$count]['escalated_to']),';',' ');
			fclose($output);  
                     return $row;
		}
	}

	function GetTimesheets($userId,$fromdate,$todate){

		$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."tblTimesheet where userId='".$userId."' AND timesheetdate >='".$fromdate."' AND timesheetdate <='".$todate."' order by id",$this->db);

		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;
		}

	}

	function TimesheetApplication($userId,$name,$morningsession,$afternoonsession,$timesheetdate,$report_to){

	//return "INSERT INTO ".DB_WILD_PREFIX."tblLeave (UserId,EmpName,LeaveType,StartDate,EndDate,Comments,Approver,Status,Created_on) VALUES ('".$userId."','".$name."', '".$leavetype."', '".$sdate."', '".$edate."', '".$comments."', '".$approver."', '".$status."', now())"
		$result = mysql_query("INSERT INTO ".DB_WILD_PREFIX."tblTimesheet (UserId,EmpName,morningsession,afternoonsession,timesheetdate,report_to,Created_on) VALUES ('".$userId."','".$name."', '".$morningsession."', '".$afternoonsession."', '".$timesheetdate."', '".$report_to."', now())",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return 'submitted';
	}

	function GetAllEmployees($username,$user_role){

if($user_role==1)
{
$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."users WHERE user_role!=1 order by id",$this->db);
}
else
{
$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."users WHERE reported_to='".$username."' order by id",$this->db);
}
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;
		}

	}


	function UpdateLeaveRequest($Id,$Status) {
		//return "UPDATE ".DB_WILD_PREFIX."business_trip SET status = '".$Status."' where id='".$Id."'";
		$result = mysql_query("UPDATE ".DB_WILD_PREFIX."tblLeave SET Status = '".$Status."' where Id='".$Id."'",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return 'updated';
	}


	/*function endBusinessTrip($userId,$recordId,$dlocation,$dgps,$traveltime,$distance) {

		$result = mysql_query("UPDATE ".DB_WILD_PREFIX."business_trip SET dlocation = '".$dlocation."',dgps = '".$dgps."',end_time = now(),travel_time = '".$traveltime."',distance = '".$distance."' where id='".$recordId."' and userId='".$userId."'",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return 'updated';
	}*/

	function validate_login($username,$pwd){

		//$result = mysql_query("SELECT *  FROM ".DB_WILD_PREFIX."users WHERE username='".$username."' AND password='".$pwd."'",$this->db);
		$result = mysql_query("call prc_login_pss('$username','$pwd')",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			$row = mysql_fetch_assoc($result);
			return $row;
		}
	}
function autoApproveTimeSheet($id,$Time_sheetStatus,$time_submitted,$approver)
	{

			 $result = mysql_query("UPDATE ".DB_WILD_PREFIX."tblTimesheet SET approve = '".$Time_sheetStatus."' WHERE Id='".$id."' AND TimesheetDate='".$time_submitted."'",$this->db);
			 $result = mysql_query("UPDATE ".DB_WILD_PREFIX."tblTimesheet SET approver = '".$approver."' WHERE Id='".$id."' AND TimesheetDate='".$time_submitted."'",$this->db);
			 if(! $result )
			 {
				 die('Could not enter data: ' . mysql_error());
			 } else return 'updated';

	}

function SetPassword($user_id,$new_pwd)
{

		$result = mysql_query("UPDATE ".DB_WILD_PREFIX."users SET password = '".$new_pwd."' where id='".$user_id."'",$this->db);
		if(! $result )
		{
		die('Could not enter data: ' . mysql_error());
		} else return 'updated';

}

function mci_SetPassword($user_id,$new_pwd)
{

		$result = mysql_query("UPDATE ".DB_WILD_PREFIX."mciregister SET mci_pwd = '".$new_pwd."' where mci_email='".$user_id."'",$this->db);
		if(! $result )
		{
		die('Could not enter data: ' . mysql_error());
		} else return 'updated';

}


function insertTestDemo($name,$email)
{
		$result = mysql_query("INSERT INTO ".DB_WILD_PREFIX."TestDemo (Name,Email) VALUES ('".$name."','".$email."')",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return 'submitted';
}

function mci_restPasswordLink($email)
{
$result = mysql_query("call prc_mcigetpasswordmd5('$email')",$this->db);
$row[] = mysql_fetch_assoc($result);

if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		}
		else {
			
			$acTag = "<p>"."Your request has been received.<br>Please use this temporary password to login to your IFSO-2018 account. Please note this password can be updated on my profile.<br>Password :".$row[0]['tmppwd']."</p>";
			$subject = 'Website Change Request';
			$headers = "From: no-reply" ."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message = '<html><body>';
			$message .= '<h1>Hello, World!</h1>';
			$message .= '</body></html>';
			$message = '<html><body>';
			$message .= $acTag;
			$message .= "</body></html>";

			if(mail($email,"No reply",$message,$headers))
			{
			  return 'submitted';
			}
			else die('Could not enter data: ' . mysql_error());
		}

}


function restPasswordLink($email)
{
$result = mysql_query("call prc_getpasswordmd5('$email')",$this->db);
$row[] = mysql_fetch_assoc($result);
$link = "http://providencesoftware.co.za/mobileApi/updateRestedPassword?tmplink=".$row[0]['password']."&key=".$email.">";
$acTag = "<a href=".$link ."Click here to rest PSS password"."</a>";
$subject = 'Website Change Request';
$headers = "From: no-reply" ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = '<html><body>';
$message .= '<h1>Hello, World!</h1>';
$message .= '</body></html>';
$message = '<html><body>';
$message .= $acTag;
$message .= "</body></html>";
if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		}
		else {
			if(mail($email,"No reply",$message,$headers))
			{
			  return 'submitted';
			}
			else die('Could not enter data: ' . mysql_error());
		}

}

function updateRestedPassword($tmplink,$key)
{
	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 5; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
  $pwd = "P$".implode($pass)."s35";
  $Epwd = md5($pwd);

	$result = mysql_query("call updateRestPassword('$tmplink','$Epwd','$key')",$this->db);
	$row[] = mysql_fetch_assoc($result);
	if(! $result )
	{
		die('Could not enter data: ' . mysql_error());
	} else{

		if($row[0]['countRow']==1)
		{
			 $body='
<style>
tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table align="center" width="50%" border="1" cellspacing="2" cellpadding="2">
                  <tr>
                    <td>PSS Password Recovery</td>
                  </tr>

                  <tr>
                    <td>Following are your Login Details</td>
                  </tr>
                
		   <tr>
                    <td><strong>Username: '.$row[0]['tmp_email'].'</strong></td>
                  </tr>
                   <tr>
                    <td><strong>Password: '.$pwd.'</strong></td>
                  </tr>
                  <tr>
                 <td>password and username has been rest to your email</td>
                   </tr>
                </table>';
		$subject = 'Website Change Request';
		$headers = "From: no-reply" ."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$message = '<html><body>';
		$message .=$body;
		$message .= '</body></html>';

		mail($row[0]['tmp_email'],"No reply",$message,$headers);

		echo $message;
                

		}
		else {
			die('The link is already used!');
		}

	 }
}

function newtimesheet($report_to)
{

	$result = mysql_query("call prc_newtimesheet('$report_to')",$this->db);
			if(mysql_num_rows($result) <= 0){
				return $rs[] = '';
			} else {
				while($row = mysql_fetch_assoc($result)){
				$rs[] = $row;
				}
			return $rs;
			}
}


function update_registersocial($socialid,$f_name,$l_name,$email,$pwd,$logintype){
	$result = mysql_query("call prc_update_registersocial('$socialid','$f_name','$l_name','$email','$pwd','$logintype')",$this->db);
	$row[] = mysql_fetch_assoc($result);
	if(!$result)
	{
		die('Could not enter data: ' . mysql_error());
	}
	else{

		 return $row[0];
	 }
}
function mci_allContacts(){

		$result = mysql_query("call prc_mci_allContacts()",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;}
	}

function upload_start($base64,$id){
	$result = mysql_query("call prc_upload('$id','$base64')",$this->db);
	if(! $result )
	{
		die('Could not enter data: ' . mysql_error());
	} else{
		return 'updated';
	}
}
function upload_end($base64,$id){
	$result = mysql_query("call prc_uploadend('$id','$base64')",$this->db);
	if(! $result )
	{
		die('Could not enter data: ' . mysql_error());
	} else{
		return 'updated';
	}
}
function RegisterUser($title,$f_name,$l_name,$email,$reg_type,$address,$country,$pwd,$mobile_num,$logintype,$token)
{
	//$result = mysql_query("call prc_mcireg('$title','$f_name','$l_name','$email','$reg_type','$address','$country','$pwd','$mobile_num')",$this->db);
	$result = mysql_query("call prc_mcireg('$title','$f_name','$l_name','$mobile_num','$email','$reg_type','$address','$country','$pwd','$logintype','$token')",$this->db);
	$row[] = mysql_fetch_assoc($result);
	if(! $result)
	{
		
	  die('Could not enter data: ' . mysql_error());
	}
	else{

     return $row[0];
	 }
}
function registersocialG($givenName,$familyName,$userId,$email,$token){
	$result = mysql_query("call prc_registersocialG('$givenName','$familyName','$userId','$email','$token')",$this->db);
	$row[] = mysql_fetch_assoc($result);
	if(!$result)
	{
		die('Could not enter data: ' . mysql_error());
	}
	else{

		 return $row[0];
	 }
}

function registersocialF($fname,$userId,$token){
	$result = mysql_query("call prc_registersocialF('$fname','$userId','$token')",$this->db);
	$row[] = mysql_fetch_assoc($result);
	if(!$result)
	{
		die('Could not enter data: ' . mysql_error());
	}
	else{

		 return $row[0];
	 }
}
function upload_proPic($base64,$id){
	$result = mysql_query("call prc_uploadproPc('$id','$base64')",$this->db);
	if(! $result )
	{
		die('Could not enter data: ' . mysql_error());
	} else{
		$row[] = mysql_fetch_assoc($result);
		if(file_exists("../".$row[0]["pro_url"])){
		unlink("../".$row[0]["pro_url"]);
		}
		return $base64;
	}
}
function mciupdateProfile($Title,$FirstName,$LastName,$RegistrationType,$Email,$Address,$Country,$MobileNumber){
$result = mysql_query("call prc_update_profile('$Title','$FirstName','$LastName','$RegistrationType','$Email','$Address','$Country','$MobileNumber')",$this->db);
	$row[] = mysql_fetch_assoc($result);
	if(!$result)
	{
		die('Could not enter data: ' . mysql_error());
	}
	else{

		 return $row[0];
	 }
}

function mcipicUpdate($email,$base64){
	$result = mysql_query("call prc_updateprofilePic('$email','$base64')",$this->db);
	if(!$result)
	{
		die('Could not enter data: ' . mysql_error());
	}
	else{

		 return 'yes';
	 }
}

	function meetingUpdates($meeting,$date,$name){
		$result = mysql_query("call prc_updateminutes('$meeting','$date','$name')",$this->db);
		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return 'submitted';
	}
	function getMeeting(){
		$result = mysql_query("call prc_getupdates()",$this->db);
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			$row = mysql_fetch_assoc($result);
			return $row;
		}
	}

		function getAllminutes($fromdate,$todate){

		$result = mysql_query("SELECT * FROM ".DB_WILD_PREFIX."tblmeeting where tbldate >='".$fromdate."' AND tbldate <='".$todate."' order by idtblmeeting",$this->db);
            
		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			while($row = mysql_fetch_assoc($result)){
			$rs[] = $row;
			}
		return $rs;
		}

	}
function travell_emails()
{

			$acTag = "<p>"."Your request has been received.<br>Please use this temporary password to login to your IFSO-2018 account. Please note this password can be updated on my profile.<br>Password :".$row[0]['tmppwd']."</p>";
			$subject = 'Website Change Request';
			$headers = "From: no-reply" ."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message = '<html><body>';
			$message .= '<h1>Hello, World!</h1>';
			$message .= '</body></html>';
			$message = '<html><body>';
			$message .= $acTag;
			$message .= "</body></html>";
$body ="<html >    
 <body style='text-align:center;'>
<div sytle='text-align:center;'>Providence Software Solutions</div>
<hr style='display: block; margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto; border-style: inset;border-width: 1px;border-color:red;width:100%'/> 
<table style='display: table;max-width:600px;border-spacing: 10px; border-collapse: separate;
    width: 50%;
    margin-left: auto;
    margin-right: auto;'>
<tr style='color: white;background-color: red;'>
    <th>Approver</th>
    <th>Traveller</th>
    <th>Departure Address</th> 
    <th>Destination Address</th>
    <th>Date</th>
    <th>Travel distance</th>
    <th>Travel time</th>
    <th>Reason</th>
  </tr>
  <tr>
    <td style='text-align:center;'>Sobhan</td>
    <td style='text-align:center;'>Emma</td>
    <td style='text-align:center;'>RTT</td> 
    <td style='text-align:center;'>Pss 35 </td>
    <td style='text-align:center;'>02-jan-2017</td>
    <td style='text-align:center;'>45Km</td> 
    <td style='text-align:center;'>1hr</td>
    <td style='text-align:center;'>going to meeting</td>
  </tr>
</table>
 <div style='margin-top: 20px;'>May you please go to PSS app to take actions on this request</div>
    </body>
</html>";

			if(mail('nocksmulea@gmail.com',"No reply",$body,$headers))
			{
			  return 'submitted';
			}
			else die('Could not enter data: ' . mysql_error());
	

}
	function UpdateLeaveRequestType($Id,$type) {
		//return "UPDATE ".DB_WILD_PREFIX."business_trip SET status = '".$Status."' where id='".$Id."'";
		$result = mysql_query("UPDATE ".DB_WILD_PREFIX."tblLeave SET paidtype = '".$type."' where Id='".$Id."'",$this->db);

		if(! $result )
		{
		  die('Could not enter data: ' . mysql_error());
		} else return 'updated';
	}
function mci_Contactus($email,$name,$msg)
{
$result = mysql_query("call prc_mciContactUs('$email','$name','$msg')",$this->db);

if($result){
$subject = 'Website Change Request';
$headers = "From: no-reply" ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
$body ="<html >    
 <body>
<div sytle='text-align:center;'>IFSO 2018 </div>
<hr style='display: block; margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto; border-style: inset;border-width: 1px;border-color:#ba3e7d;width:100%'/> 
<table style='display: table;max-width:600px;border-spacing: 10px; border-collapse: separate;
    width: 100%;
    margin-left: auto;
    margin-right: auto;'>
<tr style='color: white;background-color: #ba3e7d;'>
Good day,<br/><br/>
".$msg."<br/><br/>
Kind regards<br/>".
$name."<br/>
email:".$email."
  </tr>
</table>

    </body>
</html>";

			if(mail("ifso2018@mci-group.com","No reply",$body,$headers))
			{
			  return 'submitted';
			}
			else{
				return 'notsubmitted';
			}
		// }
}
else{
	return 'notsubmitte';
}

}


function mci_login($username,$pwd){

		$result = mysql_query("call prc_mcilogin('$username','$pwd')",$this->db);

		if(mysql_num_rows($result) <= 0){
			return $rs[] = '';
		} else {
			$row = mysql_fetch_assoc($result);
			return $row;
		}
	}

function update_allow_pushnotifications($uID, $pushNotificationFlog, $playSoundsFlog, $vibrateFlog, $popupFlog) {
	$result = mysql_query("call prc_update_allow_pushnotifications('$uID', '$pushNotificationFlog', '$playSoundsFlog', '$vibrateFlog', '$popupFlog')", $this -> db); 
	$row[] = mysql_fetch_assoc($result); 
	if ( ! $result) {
		die('Could not enter data: ' . mysql_error()); 
	}
	else {

		 return $row[0]; 
	 }
}

} //Class End


?>
