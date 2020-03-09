<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
        $this->data['sucess'] = $this->session->flashdata('msg');
		$this->load->model('admin/admin_model');
		if(is_array($this->session->userdata('admin'))){
			redirect(HTTP_PATH.'dashboard');	
		}
	}
	
	public function index()
	{
        if(!empty($this->adminData->id)){
            redirect(HTTP_PATH.'dashboard');
        }
        else 
        {
           
            $this->session->sess_destroy();
            $data['title']    = "Providence Software Solutions :: Administrator";
            $this->load->view('admin/home/loginview',$data);
        }
	}
	
	public function login()
	{
        if(!empty($this->adminData->id)){
            redirect(HTTP_PATH.'dashboard');
        }
        else 
        {
            $this->form_validation->set_rules('txt_email', 'Username', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('txt_pwd', 'Password', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE){
                $this->index();
            }else{
                $this->authentication();
            }
        }
	}
	
	private function authentication()
	{
       
	   $check_user = $this->admin_model->check_user($this->input->post());
        if(empty($check_user))
        {
            $data['login_error'] = "Invalid credentials";
            $data['title']    = "Providence Software Solutions -::- Administrator";
            $this->load->view('admin/home/loginview' , $data);
        }
        else
        {
            $data = array(
                    'id'        => $check_user->id,
                    'user_role' => $check_user->user_role,
                    'username'  => ucfirst($check_user->username),
                    'firstName'  => ucfirst($check_user->firstName)
            );

            $this->session->set_userdata('admin',$data);
            $this->adminData=(object)$this->session->userdata('admin');
            redirect(HTTP_PATH.'dashboard');
        }
	}

    public function forgot_password()
    {
        $data['title']    = "Providence Software Solutions -::- Forgot Password";
        $this->load->view('admin/home/forgotview',$data);
    }
    public function reset_passwordApi($email)
    {
        if(!empty($this->adminData->id)){
            redirect(HTTP_PATH.'dashboard');
        }
        else 
        {
            // $this->form_validation->set_rules('txt_email', 'Username or Email', 'trim|required|valid_email|xss_clean');

            // if ($this->form_validation->run() == FALSE){
            //     $this->forgot_password();
            // }else{
                
        	    $data['txt_email'] = $email; 
				$res = $this->admin_model->pwd_recovery($data);
                if($res!=false){
                if(isset($res) && count($res) > 0){
                    $qstr=base64_encode($res->id."_".$res->password);
                    $body='<table width="100%" border="0" cellspacing="2" cellpadding="2">
                      <tr>
                        <td>Click on below link to get your password</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><a href="'.HTTP_PATH.'admin/reset/'.$qstr.'">'.HTTP_PATH.'admin/reset/'.$qstr.'"</a></td>
                      </tr>
                    </table>';
                    $config['protocol'] = 'mail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';
                    $this->email->initialize($config);
                    $this->email->from('admin@providencesoft.net', 'ADMIN_MAIL');
                    $this->email->to($res->email); 
                    $this->email->subject('Request placed for password recovery');
                    $this->email->message($body);
					$this->email->send();
//echo $this->email->print_debugger(); exit;
                    set_flashdata(2);
                  //  redirect(HTTP_PATH.'admin');
                    //exit();
               // }
                }else{
                    $this->forgot_password();
                }
            }
        }
    }
    public function reset_password()
    {
        if(!empty($this->adminData->id)){
            redirect(HTTP_PATH.'dashboard');
        }
        else 
        {
            $this->form_validation->set_rules('txt_email', 'Username or Email', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE){
                $this->forgot_password();
            }else{
        	    $data = $this->input->post('txt_email'); 
		$res = $this->admin_model->pwd_recovery($data);
                if($res!=false){
                if(isset($res) && count($res) > 0){
                    $qstr=base64_encode($res->id."_".$res->password);
                    $body='<table width="100%" border="0" cellspacing="2" cellpadding="2">
                      <tr>
                        <td>Click on below link to get your password</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><a href="'.HTTP_PATH.'admin/reset/'.$qstr.'">'.HTTP_PATH.'admin/reset/'.$qstr.'"</a></td>
                      </tr>
                    </table>';
                    $config['protocol'] = 'mail';
                    $config['mailpath'] = '/usr/sbin/sendmail';
                    $config['charset'] = 'iso-8859-1';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';
                    $this->email->initialize($config);
                    $this->email->from('admin@providencesoft.net', 'ADMIN_MAIL');
                    $this->email->to($res->email); 
                    $this->email->subject('Request placed for password recovery');
                    $this->email->message($body);
					$this->email->send();
//echo $this->email->print_debugger(); exit;
                    set_flashdata(2);
                    redirect(HTTP_PATH.'admin');
                    exit();
                }
                }else{
                    $this->forgot_password();
                }            
            }
        }
    }

    public function reset()
    {
        $q   = $this->uri->segment(3, 0);
        $arr = explode('_',base64_decode($q));
        $res = $this->admin_model->change_pwd($arr);
        $cnt=count($res);
        if($cnt>0)
        {
            $this->load->helper('string');
            $this->load->helper('array');
            $array = array('@','!','#','$');
                        $array2 = array(0,1,2,3,4,5,6,7,8,9);

            $pwd            = random_string('alnum', 10).random_element($array).random_element($array2);
            $random_string  = $pwd;
            $changepwd = $this->admin_model->update_pwd($arr[0],$random_string);
            $body='<table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tr>
                    <td>You have been requested for password Recovery</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Following are your Login Details</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><strong>Username: '.$res->username.'</strong></td>
                  </tr>
                   <tr>
                    <td><strong>Password: '.$pwd.'</strong></td>
                  </tr>
                </table>';
            $config['protocol'] = 'mail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from('admin@providencesoft.net', 'ADMIN_MAIL');
            $this->email->to($res->email); 
            $this->email->subject('Request placed for password recovery');
            $this->email->message($body);
			$this->email->send();
// echo $body;
            $data['res_mail'] = $res->username;
            $data['res_pwd'] = $pwd;
            set_flashdata(3);
        //    header("location:".HTTP_PATH."admin");
         //   redirect(HTTP_PATH.'admin');
             $this->load->view('admin/home/getpwdview.php',$data);
           // exit();
        }
        else
        {
            $this->forgot_password();
            exit();
        }
    }

    public function alpha_dash_space_num($str)
    {
        if(! preg_match("/^([-\w\s])+$/i", $str)) {
             $this->form_validation->set_message('alpha_dash_space_num', 'Username May not contain disallowed characters');
             return false;
        }else{
            return true;
        }

    }

    public function logout(){
        set_flashdata(1);   
        $this->session->sess_destroy();
    }

}

/* End of file admin.php */
/* Location: ./pss/controllers/admin/admin.php */