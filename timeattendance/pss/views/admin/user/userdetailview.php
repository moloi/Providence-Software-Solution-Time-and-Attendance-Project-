<?php 
     $status_array = array(
    '1' => 'Active',
    '2' => 'Inactive'
    );
	$gender_array = array(
    'M' => 'Male',
    'F' => 'Female'
    );

    $id = $fname = $reported_to = $worklocation = $sname = $gender = $lname = $dob = $email = $mobile = $telephone = $userrole = $username = $status = "";
    if(isset($roles) && count($roles) > 0)
    {
        foreach ($roles as $key => $array) {
            $id         = isset($array['id'])?$array['id']:'';
            $fname      = isset($array['firstName'])?$array['firstName']:'';
            $lname      = isset($array['lastName'])?$array['lastName']:'';
			$sname      = isset($array['surName'])?$array['surName']:'';
			$reported_to= isset($array['reported_to'])?$array['reported_to']:'';
			$gender   	= isset($array['gender'])?$array['gender']:'';
            $dob        = isset($array['date_of_birth'])?$array['date_of_birth']:'';
            $email      = isset($array['email'])?$array['email']:'';
			$worklocation= isset($array['wl'])?$array['wl']:'';
            $contract  	= isset($array['job_type'])?$array['job_type']:'';
           $emp_address     = isset($array['emp_address'])?$array['emp_address']:'';
            $id_num     = isset($array['id_num'])?$array['id_num']:'';
             $dep= isset($array['department'])?$array['department']:'';
            //print_r($work_location);exit;
			$mobile     = isset($array['mobilenum'])?$array['mobilenum']:'';
            $telephone  = isset($array['telephone'])?$array['telephone']:'';
            $userrole   = isset($array['user_role'])?$array['user_role']:'';
            $username   = isset($array['username'])?$array['username']:'';
            $status     = isset($array['status'])?$array['status']:'';
        }
    }
	$set_gender = isset($gender)?$gender:set_value("gender",$this->input->post("gender"));
    $set_status = isset($status)?$status:set_value("status",$this->input->post("status"));
    $set_role   = isset($userrole)?$userrole:set_value("user_role",$this->input->post("user_role"));
	$set_worklocation   = isset($worklocation)?$worklocation:set_value("work_location",$this->input->post("work_location"));
    $set_contract = isset($contract)?$contract:set_value("job_type",$this->input->post("job_type"));

	?>
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Users
            </h1>
            <?php $this->load->view('admin/common/breadcrumbs' , $breadcrumbs); ?>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">View User</h3>
                            <h3 class="box-title" style="float:right;color:white !important;"><a style="color:white !important;" class="btn btn-primary" href="<?php echo HTTP_PATH."user" ?>"><i class="fa fa-toggle-left"></i> Back</a>
                        </div>
                        <!-- general form elements -->
                        <div class="box">
                            <!-- form start -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <p class='text-danger' id='erMsg'></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label></br>
                                        <?php echo isset($fname)?$fname:''; ?> <?php echo isset($lname)?$lname:''; ?> <?php echo isset($sname)?$sname:''; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Reported To</label></br>
                                        <?php echo isset($reported_to)?$reported_to:''; ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Gender</label></br>
                                        <?php echo isset($gender)?$gender:''; ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Email</label></br>
                                        <?php echo isset($email)?$email:''; ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Date Of Birth</label></br>
                                        <?php echo isset($dob)?$dob:''; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID number</label></br>
                                        <?php echo isset($id_num)?$id_num:''; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label></br>
                                        <?php echo isset($emp_address)?$emp_address:''; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contract type</label></br>
                                        <?php echo isset($contract)?$contract:''; ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Work Location</label></br>
                                        <?php echo isset($worklocation)?$worklocation:''; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department</label></br>
                                        <?php echo isset($dep)?$dep:''; ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label></br>
                                        <?php echo isset($mobile)?$mobile:''; ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Telephone</label></br>
                                        <?php echo isset($$telephone)?$$telephone:''; ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">User Role</label></br>
                                        <?php echo isset($userrole)?$userrole:''; ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label></br>
                                        <?php echo isset($username)?$username:''; ?>
                                    </div>
									
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label></br>
                                        <?php echo isset($status)?$status_array[$status]:'' ?>
                                    </div>
                                </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>
        </section>
    </aside>
</div>
<?php require_once(APPPATH.'views/admin/common/scripts.php') ?>
</body>
</html>