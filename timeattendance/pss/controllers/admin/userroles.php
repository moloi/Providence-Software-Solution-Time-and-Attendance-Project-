<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userroles extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->data['sucess'] = $this->session->flashdata('msg');
        if(empty($this->adminData->id)){
            redirect(HTTP_PATH.'admin');
        }
        $this->load->model('admin/userroles_model');
    }

    public function index()
    {
    	$records = $this->userroles_model->AccessRoles();
        $header = array("Title","Description");
        $columns = array("title","description");
        $actions = array(
        	"edit"=>array("LABEL"=>"Edit","URL"=>"userroles/edit","CLASS"=>"btn-info","ICON"=>"fa-edit","TARGET"=>"_self","TITLE"=>"Edit Client","QUERY_STRING"=>array("id"=>"id"),"ID"=>"edit_role"),
        	"delete"=>array("LABEL"=>"Delete","URL"=>"userroles/delete","CLASS"=>"btn-danger","ICON"=>"fa-trash-o","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"delete_role"),
            "assign"=>array("LABEL"=>"","URL"=>"","CLASS"=>"","ICON"=>"","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id","userrole_id"=>"id"),"TITLE"=>"","ASSIGN"=>1,"ID"=>"role","AJAX_ID"=>"id")

            );
        $userrole['rows'] 		= $records;
        $userrole['header'] 	= $header;
        $userrole['columns'] 	= $columns;
        $userrole['actions'] 	= $actions;
        $userroles[] 			= $userrole;
        $data['title'] = " Userroles";
        $data['table_data'] = $userroles;
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Userroles','URL'=>'')
        	);
        $this->load->view('admin/frames/header' , $data);
        $this->load->view('admin/userroles/userrolesview',$data);
    }

    public function form()
    {
    	$data['title'] = " Add Userroles";
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Userroles','URL'=>base_url('').'userroles'),
        	'2'=>array('LABEL'=>'Add Userroles','URL'=>'')
        	);
        if($this->form_validation->run('userrole') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/userroles/userrolesaddview',$data);
    	}else{
    		$data = $this->input->post();
    		$this->insert($data);
    	}
    }

    public function insert($data)
    {
    	$result = $this->userroles_model->_insert($data);
    	if($result == true)
    	{
            set_flashdata(1);
    		redirect(HTTP_PATH."userroles");
    	}
    }

    public function edit($id)
    {
    	$records = $this->userroles_model->AccessRoles($id);
    	$data['roles'] = $records;
    	$data['title'] = " Edit Userroles";
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'Userroles','URL'=>base_url('').'userroles'),
        	'2'=>array('LABEL'=>'Edit Userroles','URL'=>'')
        	);
        if($this->form_validation->run('userrole') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/userroles/userrolesaddview',$data);
    	}else{
    		$data = $this->input->post();
    		$this->update($data,$id);
    	}
    }

    public function update($data,$id)
    {
    	$result = $this->userroles_model->_update($data,$id);
    	if($result == true)
    	{
            set_flashdata(2);
    		redirect(HTTP_PATH."userroles");
    	}
    }

    public function delete($id)
	{
		$result = $this->userroles_model->_delete($id);
    	if($result == true)
    	{
            set_flashdata(3);
    		redirect(HTTP_PATH."userroles");
    	}
	}

    public function active_inactive_userrole($id, $action)
    {
        if($action == "active"){
            $result = $this->userroles_model->ChangeStatus("userroles", $id, '1');
        }
        else{
            $result = $this->userroles_model->ChangeStatus("userroles", $id, '2');
        }
        set_flashdata(1);
        echo $result;
        exit;
    }
}