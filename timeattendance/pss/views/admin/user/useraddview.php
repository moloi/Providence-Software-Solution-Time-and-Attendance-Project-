<?php
    $status_array = array(
    '1' => 'Active',
    '2' => 'Inactive'
    );
	$gender_array = array(
    'M' => 'Male',
    'F' => 'Female'
    );
    $contract_array = array(
        'permanent'=>'Permanent',
        'Shift worker'=>'Shift worker',
        'Fixed term contractor'=>'Fixed term contractor',
        'Temporary contractor'=>'Temporary contractor'

    );
   $departments = array(
        'HR'=>'Human resource',
        'IT support'=>'Information Technology Support',
        'IT network'=>'Information Technology Network',
        'Microsoft SQL Database Admin'=>'Microsoft SQL Database Admin',
        'BA'=>'Business Analyst',
        'Project manager'=>'Project manager',
        'Excutive Director'=>'Excutive Director',
        'SharePoint Administrator'=>'SharePoint Administrator',
        'HR'=>'HR Manager',
        'Operations Manager'=>'Operations Manager',
        'Internship'=>'Internship',
        'Marketing and Graphic Designer Specialist'=>'Marketing and Graphic Designer Specialist',
        'Finance & Accounts Admin'=>'Finance & Accounts Admin',
        'Front End Lead'=>'Front End Lead',
        'Chief Excutive Offer'=>'Chief Excutive Offer',
        'Web Designer'=>'Web Designer',
        'HR assistant- Legal Administrator'=>'HR assistant- Legal Administrator',
        'IT Administrator'=>'IT Administrator',
        'Business Development Executive'=>'Business Development Executive',
        'System Engineer'=>'System Engineer',
        'Support Engineer (Databases and Project Office)'=>'Support Engineer (Databases and Project Office)',
        'Marketing'=>'Marketing',
        'Junior Business Analyst'=>'Junior Business Analyst',
        'Chief Excutive Offer'=>'Chief Excutive Offer',
        'SharePoint Developer'=>'SharePoint Developer',
        'Project Engineer'=>'Project Engineer',
        'Office Administrator/Technical Support'=>'Office Administrator/Technical Support',
        'Junior Mobile App Developer'=>'Junior Mobile App Developer',
        'Software Engineer : IT Project Manager'=>'Software Engineer : IT Project Manager',
        'Trainee: Software Developer'=>'Trainee: Software Developer',
        'Mobile Application Developer'=>'Mobile Application Developer',
        'C# Developer'=>'C# Developer',
        'Sales Excutive'=>'Sales Excutive',
        'Junior Developer'=>'Junior Developer',
        'Senior Developer'=>'Senior Developer'
    );
    $id = $fname = $reportedto = $worklocation = $sname = $gender = $lname = $dob = $email = $mobile = $telephone = $userrole = $username = $status = $dep=$contract=$emp_address=$id_num="";
    if(isset($roles) && count($roles) > 0)
    {
        foreach ($roles as $key => $array) {
            $id         = isset($array['id'])?$array['id']:'';
            $fname      = isset($array['firstName'])?$array['firstName']:'';
            $lname      = isset($array['lastName'])?$array['lastName']:'';
			$sname      = isset($array['surName'])?$array['surName']:'';
			$reportedto = isset($array['reported_to'])?$array['reported_to']:'';
			$gender   	= isset($array['gender'])?$array['gender']:'';
            $contract  	= isset($array['job_type'])?$array['job_type']:'';
            $dob        = isset($array['date_of_birth'])?$array['date_of_birth']:'';
            $email      = isset($array['email'])?$array['email']:'';
			$worklocation= isset($array['work_location'])?$array['work_location']:'';
            $dep= isset($array['department'])?$array['department']:'';
            $emp_address     = isset($array['emp_address'])?$array['emp_address']:'';
            $id_num     = isset($array['id_num'])?$array['id_num']:'';
			$mobile     = isset($array['mobile'])?$array['mobile']:'';
            $telephone  = isset($array['telephone'])?$array['telephone']:'';
            $userrole   = isset($array['user_role'])?$array['user_role']:'';
            $username   = isset($array['username'])?$array['username']:'';
            $status     = isset($array['status'])?$array['status']:'';
        }
    }
    else{
    $fname      = isset($fname)?$rr['firstName']:$fname;
    $lname      = isset($lname)?$rr['lastName']:$lname;
    $sname      = isset($sname)?$rr['surName']:$sname;
    $reportedto = isset($reportedto)?$rr['reported_to']:$reportedto;
    $gender   	= isset($gender)?$rr['gender']:$gender;
    $contract  	= isset($contract)?$rr['job_type']:$contract;
    $dob        = isset($dob)?$rr['date_of_birth']:$dob;
    $email      = isset($email)?$rr['email']:$email;
    $worklocation= isset($worklocation)?$rr['work_location']:$worklocation;
    $dep         = isset($dep)?$rr['department']:$dep;
    $emp_address     = isset($emp_address)?$rr['emp_address']:$emp_address;
    $id_num     = isset($id_num)?$rr['id_num']:$id_num;
    $mobile     = isset($mobile)?$rr['mobile']:$mobile;
    $telephone  = isset($telephone)?$rr['telephone']:$telephone;
    $userrole   = isset($userrole)?$rr['user_role']:$userrole;
    $username   = isset($username)?$rr['username']:$username;
    $status     = isset($status)?$rr['status']:$status;
    }

	$set_gender = isset($gender)?$gender:set_value("gender",$this->input->post("gender"));
    $set_status = isset($status)?$status:set_value("status",$this->input->post("status"));
    $set_role   = isset($userrole)?$userrole:set_value("user_role",$this->input->post("user_role"));
	$set_worklocation   = isset($worklocation)?$worklocation:set_value("work_location",$this->input->post("work_location"));
    $set_dep = isset($dep)?$dep:set_value("department",$this->input->post("department"));
    $set_reported_to = isset($reportedto)?$reportedto:set_value("reported_to",$this->input->post("reported_to"));
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
                         <?php if(isset($this->data['sucess']) && $this->data['sucess'] == 1): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Saved Successfully.
                            </div>
                        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 2): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Updated Successfully.
                            </div>
                        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 3): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Deleted Successfully.
                            </div>
                        <?php endif; ?>
                            <h3 class="box-title"><?php echo $title; ?></h3>
                            <h3 class="box-title" style="float:right;color:white !important;"><a style="color:white !important;" class="btn btn-primary" href="<?php echo HTTP_PATH."user" ?>"><i class="fa fa-toggle-left"></i> Back</a>
                        </div>
                        <!-- general form elements -->
                        <div class="box">
                            <!-- form start -->
                            <?php $this->form_validation->set_error_delimiters("<p class='text-danger'>" , "</p>"); ?>
                            <?php if(isset($id) && $id != ""): ?>
                                <form role="form" action="<?php echo HTTP_PATH."user/edit/".$id; ?>" method="post">
                            <?php else: ?>
                                <form role="form" action="<?php echo HTTP_PATH."user/form"; ?>" method="post">
                            <?php endif; ?>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input  type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="<?php echo isset($fname)?$fname:set_value('firstName') ?>">
                                        <?php if(form_error('firstName')) echo form_error('firstName'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="<?php echo isset($lname)?$lname:set_value('lastName') ?>">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Sur Name</label>
                                        <input type="text" class="form-control" id="surName" name="surName" placeholder="Sur Name" value="<?php echo isset($sname)?$sname:set_value('surName') ?>">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">User Role</label>
                                        <?php echo form_dropdown('user_role',$user_role,$set_role,'class="form-control" id="user_role"'); ?>
                                    </div>
									 <div class="form-group">
                                        <label for="exampleInputEmail1">Gender</label>
                                        <?php echo form_dropdown('gender',$gender_array,$set_gender,'class="form-control" id="gender"'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Department</label>
                                        <?php echo form_dropdown('department',$departments,$set_dep,'class="form-control" id="dep"'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date of Birth</label>
                                        <input type="text" class="form-control date" id="date_of_birth" name="date_of_birth" readonly="readonly" placeholder="Date of Birth" value="<?php echo isset($dob)?$dob:set_value('date_of_birth') ?>">
                                        <?php if(form_error('date_of_birth')) echo form_error('date_of_birth'); ?>
                                    </div>
                                  <div class="form-group">
                                        <label for="exampleInputEmail1">ID number</label>
                                       <input type="text" class="form-control" id="id_num" name="id_num" placeholder="ID number" value="<?php echo isset($id_num)?$id_num:set_value('id_num') ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contract type</label>
                                        <?php echo form_dropdown('job_type',$contract_array,$set_contract,'class="form-control" id="job_type"'); ?>                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" id="emp_address" name="emp_address" placeholder="Address" value="<?php echo isset($emp_address)?$emp_address:set_value('emp_address') ?>">
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Work Location</label>
                                        <?php echo form_dropdown('work_location',$work_location,$set_worklocation,'class="form-control" id="work_location"'); ?>
                                    </div>
									<div class="form-group">
                                        <label for="exampleInputEmail1">Reported To</label>
                                        <?php echo form_dropdown('reported_to',$reported_to,$set_reported_to,'class="form-control" id="reported_to"'); ?>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo isset($email)?$email:set_value('email') ?>">
                                        <?php if(form_error('email')) echo form_error('email'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php echo isset($mobile)?$mobile:set_value('mobile') ?>">
                                        <?php if(form_error('mobile')) echo form_error('mobile'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Telephone</label>
                                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone" value="<?php echo isset($telephone)?$telephone:set_value('telephone') ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username as an email</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo isset($username)?$username:set_value('username') ?>">
                                        <?php if(form_error('username')) echo form_error('username'); ?>
                                    </div>
                                <?php if($id==""): ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo isset($password)?$password:set_value('password') ?>">
                                        <?php if(form_error('password')) echo form_error('password'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" value="<?php echo isset($cpassword)?$cpassword:set_value('cpassword') ?>">
                                        <?php if(form_error('cpassword')) echo form_error('cpassword'); ?>
                                    </div>
                                <?php endif; ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <?php echo form_dropdown('status',$status_array,$set_status,'class="form-control" id="status"'); ?>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div><!-- /.box -->
                    </div>
                </div>
        </section>
    </aside>
</div>
<?php require_once(APPPATH.'views/admin/common/scripts.php') ?>
</body>
</html>