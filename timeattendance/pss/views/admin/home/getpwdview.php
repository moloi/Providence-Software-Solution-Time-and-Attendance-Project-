<?php
$email = array(
    'name'          => 'txt_email',
    'id'            => 'txt_email',
    'value'         => set_value($res_mail),
    'placeholder'   => 'E-mail/Username',
    'class'         => 'form-control'
);
$email_extra = 'autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="true"';

$pass = array(
    'name'          => 'txt_pwd',
    'id'            => 'txt_pwd',
    'value'         => set_value($res_pwd),
    'placeholder'   => 'Password',
    'class'         => 'form-control'
);

$login_button = array(
    'name'      => 'sign_in',
    'value'     => 'Go to login',
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
        <div class="login_logo"><?php echo img($logo_properties); ?></div>
        <div class="header">Copy your credentials below and do not share to anyone</div>
        <?php if(isset($this->data['sucess']) && $this->data['sucess'] == 1): ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                You have been logged out Successfully
            </div>
        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 2): ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                An Email has been sent to you.
            </div>
        <?php elseif(isset($this->data['sucess']) && $this->data['sucess'] == 3): ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Password Reset Successfully,check your email again.
            </div>
        <?php endif; ?>
        <?php echo form_open(base_url('').'admin'); ?>
            <div class="body bg-gray">
                <?php
                    if(isset($login_error))
                    {
                        echo "<div class='alert alert-danger' id='error'>$login_error</div>";
                    }
                    $this->form_validation->set_error_delimiters("<p class='text-danger'>" , "</p>");
                ?>
                <?php
                    if(form_error('txt_email'))
                    {
                        echo "<div class='form-group has-error'>";
                        echo "Username : ".$res_mail;
                        echo form_error('txt_email');
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div class='form-group'>";
                        echo "Username : ".$res_mail;
                        echo"</div>";
                    }
                    if(form_error('txt_pwd'))
                    {
                        echo "<div class='form-group has-error'>";
                        echo "Password : ".$res_pwd;
                        echo form_error('txt_pwd');
                        echo "</div>";
                    }
                    else
                    {
                        echo "<div class='form-group'>";
                        echo "Password : ".$res_pwd;
                        echo"</div>";
                    }
                ?>
            </div>
            <div class="footer" style="margin:0px !important">
                <?php echo form_submit($login_button); ?>
            </div>
        <?php echo form_close(); ?>
    </div>
    <?php require_once(APPPATH .'views/admin/common/scripts.php'); ?>
</body>
</html>