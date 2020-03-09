<?php
    $years = range(2000, date("Y"));
	$month = array(
    'Jan' => 'Jan',
    'Feb' => 'Feb',
    'Mar' => 'Mar',
    'Apr' => 'Apr',
    'May' => 'May',
    'Jun' => 'Jun',
    'Jul' => 'Jul',
    'Aug' => 'Aug',
    'Sep' => 'Sep',
    'Oct' => 'Oct',
    'Nov' => 'Nov',
    'Dec' => 'Dec'

    );
    $id = $fname = $reported_to = $worklocation = $sname = $gender = $lname = $dob = $email = $mobile = $telephone = $userrole = $username = $status = $dep="";
    if(isset($roles) && count($roles) > 0)
    {
        foreach ($roles as $key => $array) {
            $id         = isset($array['id'])?$array['id']:'';
            $fname      = isset($array['firstName'])?($array['firstName'].' '.$array['lastName']):'';
            $lname      = isset($array['lastName'])?$array['lastName']:'';
			$sname      = isset($array['surName'])?$array['surName']:'';
			$reported_to= isset($array['reported_to'])?$array['reported_to']:'';
			$gender   	= isset($array['gender'])?$array['gender']:'';
            $dob        = isset($array['date_of_birth'])?$array['date_of_birth']:'';
            $email      = isset($array['email'])?$array['email']:'';
			$worklocation= isset($array['work_location'])?$array['work_location']:'';
            $dep= isset($array['department'])?$array['department']:'';
			$mobile     = isset($array['mobile'])?$array['mobile']:'';
            $telephone  = isset($array['telephone'])?$array['telephone']:'';
            $userrole   = isset($array['user_role'])?$array['user_role']:'';
            $username   = isset($array['username'])?$array['username']:'';
            $status     = isset($array['status'])?$array['status']:'';
        }
    }
    else{
         $fname      =$fileName;
         $id = '123456';
    }
     $set_years = count($years)-1;
     $set_month = 'Jan';
?>
    <aside class="right-side">
        <section class="content-header">
            <h1>
                Download 
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
                            <div class="alert alert-danger alert-dismissable center">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <p style="text-align:center;">No record</p>
                            </div>
                        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 3): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Downloaded Successfully.
                            </div>
                        <?php endif; ?>
                            <h3 class="box-title"><?php echo $title;?></h3>
                            <?php if(isset($type) && $type != 'allTrips'){?>
                            <h3 class="box-title" style="float:right;color:white !important;"><a style="color:white !important;" class="btn btn-primary" href="<?php echo HTTP_PATH."reports/".$type ?>"><i class="fa fa-toggle-left"></i> Back</a>
                        <?php }?>
                        </div>
                        <!-- general form elements -->
                        <div class="box">
                            <!-- form start -->
                            <?php $this->form_validation->set_error_delimiters("<p class='text-danger'>" , "</p>"); ?>
                            <?php if(isset($id) && $id != ""): ?>
                                <form role="form" action="<?php echo HTTP_PATH."reports/downloadReports/".$id."/".$type."/".$func; ?>" method="post">
                            <?php else: ?>
                                <form role="form" action="<?php echo HTTP_PATH."user/form"; ?>" method="post">
                            <?php endif; ?>
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Save as </label>
                                        <input  type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="<?php echo isset($fname)?$fname:set_value('firstName') ?>" required>
                                        <?php if(form_error('firstName')) echo form_error('firstName'); ?>
                                    </div>
									 <div class="form-group">
                                        <label for="exampleInputEmail1">Month</label>
                                        <?php echo form_dropdown('month',$month,$set_month,'class="form-control" id="month"'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Year</label>
                                        <?php echo form_dropdown('year',$years,$set_years,'class="form-control" id="year"'); ?>
                                    </div>
                    
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Download</button>
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