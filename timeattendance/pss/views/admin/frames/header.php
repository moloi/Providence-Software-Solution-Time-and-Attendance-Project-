<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Providence Software Solutions ::<?php echo $title ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php require_once(APPPATH . 'views/admin/common/styles.php'); ?>
</head>
<body class="skin-blue">

<div class="ajax_load"></div>
<header class="header">
    
         <a href="<?php echo HTTP_PATH."admin"; ?>" class="logo"> <img style="height:45px;"src="<?php echo base_url('assets/admin/images/rsz_logo.png'); ?>">
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <div class="sr-only">Toggle navigation</div>
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
            <div class="icon-bar"></div>
        </a>

        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i> <?php echo $this->adminData->firstName; ?> <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header bg-light-blue">
                            <img src="<?php echo base_url('assets/admin/images/avatar3.png') ?>" class="img-circle" alt="User Image"/>
                            <p>
                                <?php
                                if($this->adminData->user_role = "1")
                                {
                                    echo $this->adminData->firstName." - Admin";
                                }
                                elseif($this->adminData->user_role = "2")
                                {
                                    echo $this->adminData->firstName." - User";
                                }
                                
                                ?>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo HTTP_PATH,'dashboard/logout'; ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <aside class="left-side sidebar-offcanvas">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url('assets/admin/images/avatar3.png') ?> " class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, <?php echo $this->adminData->firstName; ?></p>

                    <i class="fa fa-circle text-success"></i> Online
                </div>
            </div><!-- sidebar menu: : style can be found in sidebar.less -->
			
            <ul class="sidebar-menu">
                <li>
                    <a href="<?php echo HTTP_PATH."admin"; ?>">
                        <i class="fa fa-dashboard"></i>Dashboard
                    </a>
                </li>
                
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-md"></i> User Management
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
						<li><a href="<?php echo HTTP_PATH."userroles" ?>"><i class="fa fa-user"></i> User Roles</a></li>
                        <li><a href="<?php echo HTTP_PATH."user" ?>"><i class="fa fa-angle-double-right"></i> Users</a></li>
                       
                        
                    </ul>
                </li>
               <!-- <li class="treeview">
                    <a href="#">
                        <i class="fa fa-desktop"></i> CMS Management
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo HTTP_PATH."cms" ?>"><i class="fa fa-angle-double-right"></i> About us</a></li>
						<li><a href="<?php echo HTTP_PATH."help" ?>"><i class="fa fa-angle-double-right"></i> Help</a></li>
                        <li><a href="<?php echo HTTP_PATH."cms/contactus" ?>"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>                    
                        <li><a href="<?php echo HTTP_PATH."cms/offerings" ?>"><i class="fa fa-angle-double-right"></i> Video pss Offerings</a></li>
						<li><a href="<?php echo HTTP_PATH."cms/termsandconditions" ?>"><i class="fa fa-angle-double-right"></i> Terms And Conditions</a></li>
					</ul>
                </li>
				<li>
                    <a href="<?php echo HTTP_PATH."quicklinks" ?>">
                        <i class="fa fa-link"></i> Quick Links
                        
                    </a>
                    
                </li>-->
                <li>
                    <a href="<?php echo HTTP_PATH."work_locations" ?>">
                        <i class="fa fa-group"></i> Work Locations 
                    </a>
                </li>
                
                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-file-text"></i> Reports
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
						<li><a href="<?php echo HTTP_PATH."reports/Timesheets" ?>"><i class="fa fa-briefcase"></i> Timesheet</a></li>
                        <li  class="treeview">
                   <a href="#">
                        <i class="fa fa-road"></i> Trips
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo HTTP_PATH."reports/Trips" ?>"><i class="fa fa-book"></i> Filter trips by Employee</a></li>
                        <li><a href="<?php echo HTTP_PATH."reports/AllTripsdownloads" ?>"><i class="fa fa-align-justify"></i> Download all trips</a></li>
                    </ul>
                    </li>
                        <li><a href="<?php echo HTTP_PATH."reports/Attendance" ?>"><i class="fa fa-clock-o"></i> Attendance</a></li>
                        <li><a href="<?php echo HTTP_PATH."reports/Leave" ?>"><i class="fa fa-home"></i> Leave</a></li>  
                
                 
                    </ul>
                </li>
                <li>
                    <a href="<?php echo HTTP_PATH."user/setting"; ?>">
                        <i class="fa fa-cog"></i>Change password
                    </a>
                </li>
               <!-- <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bullhorn"></i> Schedule Events 
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo HTTP_PATH."events" ?>"><i class="fa fa-angle-double-right"></i> Open Events</a></li>
                        <li><a href="<?php echo HTTP_PATH."events/closed" ?>"><i class="fa fa-angle-double-right"></i> Closed Events</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cloud-download"></i> Links & Downloads 
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo HTTP_PATH."links/categories" ?>"><i class="fa fa-angle-double-right"></i> Categories</a></li>
                        <li><a href="<?php echo HTTP_PATH."links" ?>"><i class="fa fa-angle-double-right"></i> Links</a></li>
                        <li><a href="<?php echo HTTP_PATH."links/downloads" ?>"><i class="fa fa-angle-double-right"></i> Downloads</a></li>
                    </ul>
                </li>               
				<li>
                    <a href="<?php echo HTTP_PATH."ads" ?>">
                        <i class="fa fa-group"></i> Advertisements
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-money"></i> Quotes 
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo HTTP_PATH."quotes" ?>"><i class="fa fa-angle-double-right"></i> Prepare Quote</a></li>
                        <li><a href="<?php echo HTTP_PATH."quotes/user" ?>"><i class="fa fa-angle-double-right"></i> User Quotes</a></li>
                    </ul>
                </li>
				 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user-md"></i> Home
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
						<li><a href="<?php echo HTTP_PATH."home/banners" ?>"><i class="fa fa-angle-double-right"></i> Banners</a></li>
                        <li><a href="<?php echo HTTP_PATH."home/content" ?>"><i class="fa fa-angle-double-right"></i> Content</a></li>
                        
                    </ul>
                </li>  -->          
                <!--<li>
                    <a href="<?php echo HTTP_PATH."pss_videos" ?>">
                        <i class="fa fa-video-camera"></i> pss Videos
                    </a>
                </li>-->
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <script>
        HTTP_PATH = '<?php echo HTTP_PATH ?>';
    </script>