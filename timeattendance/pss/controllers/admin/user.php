<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->data['sucess'] = $this->session->flashdata('msg');
        if(empty($this->adminData->id)){
            redirect(HTTP_PATH.'admin');
        }
        $this->load->model('admin/user_model');
    }

    public function index()
    {
    	$records 	= $this->user_model->AccessUsers();
        $header 	= array("Name","Work Location","Email","Mobile","Reported To","Username");
        $columns 	= array("name","wl","email","mobilenum","reported_to","username");
        $actions 	= array(
        	"edit"=>array("LABEL"=>"Edit","URL"=>"user/edit","CLASS"=>"btn-info","ICON"=>"fa-edit","TARGET"=>"_self","TITLE"=>"Edit Client","QUERY_STRING"=>array("id"=>"id"),"ID"=>"edit_user"),
        	"delete"=>array("LABEL"=>"Delete","URL"=>"user/delete","CLASS"=>"btn-danger","ICON"=>"fa-trash-o","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"delete_user"),
            "assign"=>array("LABEL"=>"","URL"=>"","CLASS"=>"","ICON"=>"","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id","user_id"=>"id"),"TITLE"=>"","ASSIGN"=>1,"ID"=>"user","AJAX_ID"=>"id"),
			"view"=>array("LABEL"=>"View","URL"=>"user/user_view","CLASS"=>"btn-success","ICON"=>"fa-eye","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"view")
            );
        $user['rows'] 		= $records;
        $user['header'] 	= $header;
        $user['columns'] 	= $columns;
        $user['actions'] 	= $actions;
        $users[] 			= $user;
        $data['title'] 		= "Users";
        $data['table_data'] = $users;
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>'')
        	);
            // print_r($records);
        $this->load->view('admin/frames/header' , $data);
        $this->load->view('admin/user/userview',$data);


        // $records =  $this->user_model->AccessUsers();
        // $header = array("Location","Country","Address","Mobile","Latitude","Longitude");
        // $columns 	= array("name","wl","email","mobilenum","reported_to","username");
        // $actions = array(
        // 	"edit"=>array("LABEL"=>"Edit","URL"=>"work_locations/edit","CLASS"=>"btn-info","ICON"=>"fa-edit","TARGET"=>"_self","TITLE"=>"Edit Partner","QUERY_STRING"=>array("id"=>"id"),"ID"=>"edit_partner"),
        // 	"delete"=>array("LABEL"=>"Delete","URL"=>"work_locations/delete","CLASS"=>"btn-danger","ICON"=>"fa-trash-o","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"delete_partner"),
        //     "assign"=>array("LABEL"=>"","URL"=>"","CLASS"=>"","ICON"=>"","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id","partner_id"=>"id"),"TITLE"=>"","ASSIGN"=>1,"ID"=>"partner","AJAX_ID"=>"id")
        //     );
        // $partner['rows'] 		= $records;
        // $partner['header'] 	    = $header;
        // $partner['columns'] 	= $columns;
        // $partner['actions'] 	= $actions;
        // $work_locations[] 			= $partner;
        // $data['title'] = " Work Locations";
        // $data['table_data'] = $work_locations;
        // $data['breadcrumbs'] = array(
        // 	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        // 	'1'=>array('LABEL'=>'work_locations','URL'=>'')
        // 	);
        // $this->load->view('admin/frames/header' , $data);
        // $this->load->view('admin/user/userview',$data);
    }

   

    public function form()
    {
    	$data['title'] = " Add User";
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Add User','URL'=>'')
        	);
		$data['work_location'] = $this->user_model->AccessWorklocations();
	    $data['user_role'] = $this->user_model->AccessRoles(); 
        $data['reported_to'] = $this->user_model->AccessManagers();
      
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|regex_match[/(?=.*[!@#$*])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/]');
        $this->form_validation->set_rules('cpassword', 'password confirmation', 'trim|required|matches[password]');
         $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|matches[email]|is_unique[users.username]');
        $this->form_validation->set_message('regex_match', 'password must have at least have 0-9,a-z,A-Z and ! @ # $ * characters.');
        $this->form_validation->set_rules('date_of_birth', 'date of birth', 'trim|required');
        $this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
        $this->form_validation->set_rules('surName', 'Sur Name', 'trim|required');
        $this->form_validation->set_rules('emp_address', 'Address', 'trim|required');

        if($this->form_validation->run('user') === false){  
            $data['rr'] = $this->input->post();
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/user/useraddview',$data);
           
    	}else{
    		$data = $this->input->post();
    		$this->insert($data);
            
    	}
    }

    public function insert($data)
    {
    	$result = $this->user_model->_insert($data);
    	if($result == true)
    	{
            set_flashdata(1);
    		
$this->sendReg_email($data);
    	}
    }

 public function sendReg_email($data)
    {

            $body='<table width="100%" border="0" cellspacing="2" cellpadding="2">
                  <tr>
                    <td>Hi '.$data['firstName'].' <br/> <br/> Following are your Login Details for PSS App.<br/><br/> Please note that the application is applicable for Android.</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td><strong>Username: '.$data['username'].'</strong></td>
                  </tr>
                   <tr>
                    <td><strong>Password: '.$data['password'].'</strong></td>
                  </tr>
                 <tr>
                    <td><a href="https://drive.google.com/open?id=0BxKK4t-p8K-URG5TR1hyWGhuZms">Click here to download https://drive.google.com/open?id=0BxKK4t-p8K-URG5TR1hyWGhuZms</a></td>
                 </tr>
                </table>';
            $config['protocol'] = 'mail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from('admin@providencesoft.net', 'ADMIN_MAIL');
            $this->email->to($data['username']); 
            $this->email->subject('PSS Registration');
            $this->email->message($body);
	    $this->email->send();
            redirect(HTTP_PATH."user");

    }

    public function edit($id)
    {
    	$records = $this->user_model->AccessUser($id);
    	$data['roles'] = $records;
    	$data['title'] = " Edit Userroles";
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Users','URL'=>base_url('').'user'),
        	'2'=>array('LABEL'=>'Edit User','URL'=>'')
        	);
		$data['work_location'] = $this->user_model->AccessWorklocations();	
        $data['user_role'] = $this->user_model->AccessRoles();
        $data['reported_to'] = $this->user_model->AccessManagers();
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'username', 'trim|required|matches[email]');
        $this->form_validation->set_rules('date_of_birth', 'date of birth', 'trim|required');
        $this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
        $this->form_validation->set_rules('surName', 'Sur Name', 'trim|required');

        if($this->form_validation->run('useredit') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/user/useraddview',$data);
    	}else{
    		$data = $this->input->post();
    		$this->update($data,$id);
    	}
    }

    public function update($data,$id)
    {
    	$result = $this->user_model->_update($data,$id);
    	if($result == true)
    	{
            set_flashdata(2);
    		redirect(HTTP_PATH."user");
    	}
    }
    public function update_pwd($dat,$id)
    {		
        $data['password'] = md5($dat['txt_cpass']); 
    	$result = $this->user_model->_update($data,$id);
       
    
    	if($result == true)
    	{
            set_flashdata(2);
    		redirect(HTTP_PATH."user/setting");
    	}
        else{
             set_flashdata(3);
    		redirect(HTTP_PATH."user/setting");
        }
    }

    public function delete($id)
	{
		$result = $this->user_model->_delete($id);
    	if($result == true)
    	{
            set_flashdata(3);
    		redirect(HTTP_PATH."user");
    	}
	}

    public function active_inactive_user($id, $action)
    {
        if($action == "active"){
            $result = $this->user_model->ChangeStatus("users", $id, '1');
        }
        else{
            $result = $this->user_model->ChangeStatus("users", $id, '2');
        }
        set_flashdata(1);
        echo $result;
        exit;
    }
	public function user_view($id)
    {
        $records = $this->user_model->AccessUsers($id);
        $data['roles'] = $records;
        $data['title'] = " View Users";
        $data['breadcrumbs'] = array(
            '0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
            '1'=>array('LABEL'=>'users','URL'=>base_url('').'user'),
            '2'=>array('LABEL'=>'View Content','URL'=>'')
            );
			if($this->form_validation->run('user') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/user/userdetailview',$data);
    	}
       
    }
     public function setting(){
         $data['title'] = " View Users";
        $data['breadcrumbs'] = array(
            '0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
            '1'=>array('LABEL'=>'users','URL'=>base_url('').'user'),
            '2'=>array('LABEL'=>'View Content','URL'=>'')
            );
        $this->form_validation->set_rules('txt_cpass', 'password', 'trim|required|min_length[5]|max_length[12]|regex_match[/(?=.*[!@#$*])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/]');
        $this->form_validation->set_rules('txt_pwd', 'password confirmation', 'trim|required|matches[txt_cpass]');
        $this->form_validation->set_message('regex_match', 'password must have at least have 0-9,a-z,A-Z and ! @ # $ * characters.');
        // $this->form_validation->set_message('regex_match', 'password must have at least have 0-9,a-z,A-Z and ! @ # $ * characters.');
             if($this->form_validation->run() === false){
            $this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/user/settingview',$data);
    	}else{
    		$data = $this->input->post();
            $this->adminData=(object)$this->session->userdata('admin');
    		$this->update_pwd($data,$this->adminData->id);
    	}
        }
}