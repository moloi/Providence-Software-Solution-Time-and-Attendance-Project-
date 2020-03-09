<?php
$cpass = array(
    'name'          => 'txt_cpass',
    'id'            => 'txt_cpass',
    'placeholder'   => 'New password',
    'class'         => 'form-control'
);
$email_extra = 'autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="true"';

$pass = array(
    'name'          => 'txt_pwd',
    'id'            => 'txt_pwd',
    'placeholder'   => 'Confirm Password',
    'class'         => 'form-control'
);

$login_button = array(
    'name'      => 'sign_in',
    'value'     => 'Change password',
    'class'     => 'btn bg-olive btn-block',
);

$logo_properties = array(
    'src'       => 'assets/admin/images/logo.png',
    'alt'       => 'Logo',
    'width'     => '100%',
    'height'    => '100'
);
?>

    <aside class="right-side">
        <section class="content-header">
            <h1>
               Password Setting
            </h1>
            <?php $this->load->view('admin/common/breadcrumbs' , $breadcrumbs); ?>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                        <?php if(isset($this->data['sucess']) && $this->data['sucess'] == 1): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Saved Successfully.
                            </div>
                        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 2): ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               Password Successfully changed
                            </div>
                        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 3): ?>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Password Unsuccessfully changed
                            </div>
                        <?php endif; ?>
                            <h3 class="box-title">Set password</h3>
                            <!--<h3 class="box-title" style="float:right;color:white !important;"><a style="color:white !important;" class="btn btn-primary" href="<?php echo HTTP_PATH."user/form" ?>"><i class="fa fa-plus-square-o"></i> Add</a>-->
                        </div>
                    
                     <div class="form-box" id="login-box">
 
                         <?php echo form_open(base_url('').'user/setting'); ?>
            <div class="body bg-gray">
                <?php
                    if(isset($login_error))
                    {
                        echo "<div class='alert alert-danger' id='error'>$login_error</div>";
                    }
                    $this->form_validation->set_error_delimiters("<p class='text-danger'>" , "</p>");
                ?>
                <?php
                    if(form_error('txt_cpass'))
                    {
                        echo "<div class='form-group has-error'>";
                        echo form_password($cpass);
                        echo form_error('txt_cpass');
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div class='form-group'>";
                        echo form_password($cpass);
                        echo"</div>";
                    }
                    if(form_error('txt_pwd'))
                    {
                        echo "<div class='form-group has-error'>";
                        echo form_password($pass);
                        echo form_error('txt_pwd');
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div class='form-group'>";
                        echo form_password($pass);
                        echo"</div>";
                    }
                     echo form_submit($login_button);
                ?>
            </div>

        <?php echo form_close(); ?>
      </div>
                    </div>
                </div>
        </section>
    </aside>
</div>
<?php require_once(APPPATH.'views/admin/common/scripts.php') ?>
</body>
</html>