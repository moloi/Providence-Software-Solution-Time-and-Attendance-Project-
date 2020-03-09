<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Front_controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('events_model');
		$this->load->model('videos_model');
	}
	public function header()
	{
		$data = array();
		$this->data['header'] = $this->load->view('front/templates/header',$data,true);
	}
	
	public function right_widget()
	{
		$data['open_events'] 	= $this->events_model->AccessWidgetEvents(1);
		$data['closed_events'] 	= $this->events_model->AccessWidgetEvents(2);
		$data['video_demo'] 	= $this->videos_model->AccessVideos(1);
		$data['videos_count'] 	= $this->videos_model->GetTotalRows();
		$this->data['right_widget'] = $this->load->view('front/templates/right_widget',$data,true);
	}
	public function footer()
	{
		$data = array();
		$data['ads'] = $this->home_model->AccessAds();
		$this->data['footer'] = $this->load->view('front/templates/footer',$data,true);
	}

}
	
