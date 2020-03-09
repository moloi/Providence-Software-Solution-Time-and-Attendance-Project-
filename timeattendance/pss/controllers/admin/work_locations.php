<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class work_locations extends MY_Controller
{
    var $error;
    function __construct()
    {
        parent::__construct();
        $this->data['sucess'] = $this->session->flashdata('msg');
        if(empty($this->adminData->id)){
            redirect(HTTP_PATH.'admin');
        }
        $this->load->model('admin/work_locations_model');
    }

    public function index()
    {
    	$records = $this->work_locations_model->Accesswork_locations();
        $header = array("Location","Country","Address","Mobile","Latitude","Longitude","Status");
        $columns = array("title","country","address","mobile","latitude","longitude","status");
        $actions = array(
        	"edit"=>array("LABEL"=>"Edit","URL"=>"work_locations/edit","CLASS"=>"btn-info","ICON"=>"fa-edit","TARGET"=>"_self","TITLE"=>"Edit Partner","QUERY_STRING"=>array("id"=>"id"),"ID"=>"edit_partner"),
        	"delete"=>array("LABEL"=>"Delete","URL"=>"work_locations/delete","CLASS"=>"btn-danger","ICON"=>"fa-trash-o","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id"),"ID"=>"delete_partner"),
            "assign"=>array("LABEL"=>"","URL"=>"","CLASS"=>"","ICON"=>"","TARGET"=>"_self","QUERY_STRING"=>array("id"=>"id","partner_id"=>"id"),"TITLE"=>"","ASSIGN"=>1,"ID"=>"partner","AJAX_ID"=>"id")
            );
        $partner['rows'] 		= $records;
        $partner['header'] 	    = $header;
        $partner['columns'] 	= $columns;
        $partner['actions'] 	= $actions;
        $work_locations[] 			= $partner;
        $data['title'] = " Work Locations";
        $data['table_data'] = $work_locations;
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'work_locations','URL'=>'')
        	);
        $this->load->view('admin/frames/header' , $data);
        $this->load->view('admin/work_locations/work_locationsview',$data);
    }

    public function form()
    {
    	$data['title'] = " Add work_locations";
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'work_locations','URL'=>base_url('').'work_locations'),
        	'2'=>array('LABEL'=>'Add work_locations','URL'=>'')
        	);
        if($this->form_validation->run('work_locations') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/work_locations/work_locationsaddview',$data);
    	}else{
    		$work_locations = $this->input->post();
        		$this->insert($work_locations);
            }
    	}

    public function insert($data)
    {
    	//$latitude = $this->getCoordinates($data['address']);
		//print_r($data);exit;
		//$data['latitude'] = $latitude[0];
		//$data['longitude'] = $latitude[1];
		//print_r($data);exit;
		$result = $this->work_locations_model->_insert($data);
    	if($result == true)
    	{
            set_flashdata(1);
    		redirect(HTTP_PATH."work_locations");
    	}
    }

    public function edit($id)
    {
    	$records = $this->work_locations_model->Accesswork_locations($id);
    	$data['work_locations'] = $records;
    	$data['title'] = " Edit work_locations";
        $data['breadcrumbs'] = array(
        	'0'=>array('LABEL'=>'Dashboard','URL'=>base_url('').'admin'),
        	'1'=>array('LABEL'=>'work_locations','URL'=>base_url('').'userroles'),
        	'2'=>array('LABEL'=>'Edit work_locations','URL'=>'')
        	);
        if($this->form_validation->run('work_locations') === false){
	    	$this->load->view('admin/frames/header' , $data);
	        $this->load->view('admin/work_locations/work_locationsaddview',$data);
    	}else{
           
        		$work_locations = $this->input->post();
                //$latitude = $this->getCoordinates($work_locations['address']);
		//print_r($latitude);exit;
		//$work_locations[latitude] = $latitude[0];
		//$work_locations[longitude ] = $latitude[1];
                $this->update($work_locations,$id);
            }
    	}
    

    public function update($data,$id)
    {
    	$result = $this->work_locations_model->_update($data,$id);
    	if($result == true)
    	{
            set_flashdata(2);
    		redirect(HTTP_PATH."work_locations");
    	}
    }

    public function delete($id)
	{
		$result = $this->work_locations_model->_delete($id);
    	if($result == true)
    	{
            set_flashdata(3);
    		redirect(HTTP_PATH."work_locations");
    	}
	}

    public function active_inactive_work_locations($id, $action)
    {
        if($action == "active"){
            $result = $this->work_locations_model->ChangeStatus("work_locations", $id, '1');
        }
        else{
            $result = $this->work_locations_model->ChangeStatus("work_locations", $id, '2');
        }
        set_flashdata(1);
        echo $result;
        exit;
    }
	public function getCoordinates($address){
    $address = urlencode($address);
    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;
    $response = file_get_contents($url);
    $json = json_decode($response,true);
 
    $lat = $json['results'][0]['geometry']['location']['lat'];
    $lng = $json['results'][0]['geometry']['location']['lng'];
 
    return array($lat, $lng);
}
 
}