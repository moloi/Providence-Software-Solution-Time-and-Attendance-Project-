<?php
$email = array(
    'name'          => 'txt_email',
    'id'            => 'txt_email',
    'value'         => set_value('txt_email'),
    'placeholder'   => 'E-mail/Username',
    'class'         => 'form-control'
);
$email_extra = 'autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="true"';

$pass = array(
    'name'          => 'txt_pwd',
    'id'            => 'txt_pwd',
    'placeholder'   => 'Password',
    'class'         => 'form-control'
);

$login_button = array(
    'name'      => 'sign_in',
    'value'     => 'Reset Password',
    'class'     => 'btn bg-olive btn-block',
);

$logo_properties = array(
    'src'       => 'assets/admin/images/logo.png',
    'alt'       => 'Logo',
    'width'     => '100%',
    'height'    => '100'
);
?>
<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <?php require_once(APPPATH .'views/admin/common/styles.php'); ?>
</head>
<body class="bg-black">
<div class="form-box" id="login-box">
    <div class="login_logo"><?php echo img($logo_properties); ?>
    
        <div class="header">Reset Password</div>
        <?php
            if(isset($login_error))
            {
                echo "<div class='alert alert-danger' id='error'>$login_error</div>";
            }
            $this->form_validation->set_error_delimiters("<p class='text-danger'>" , "</p>");
        ?>
        <?php echo form_open(base_url('').'admin/reset_password/'); ?>
            <div class="body bg-gray">
                <?php
                    if(form_error('txt_email'))
                    {
                        echo "<div class='form-group has-error'>";
                        echo form_input($email , '', $email_extra);
                        echo form_error('txt_email');
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div class='form-group'>";
                        echo form_input($email , '', $email_extra);
                        echo"</div>";
                    }
                ?>
            </div>
            <div class="footer" style="margin:0px !important">
                <?php echo form_submit($login_button); ?>
                <div><a href="<?php echo HTTP_PATH."admin" ?>">I already have a membership</a></div>
            </div>
        <?php echo form_close(); ?>
    </div></div>
    <?php require_once(APPPATH .'views/admin/common/scripts.php'); ?>
</body>
</html>