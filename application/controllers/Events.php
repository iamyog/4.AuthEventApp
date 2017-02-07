<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('msg','Unauthorised Access');
			redirect('auth');
		}
		$this->load->model('event_model');
	}	 
	public function index()
	{
		///$events = $this->event_model->getRecrods();
		$this->load->view('events/index');
	}
	public function addEvent()
	{
		//if you are using serialize for ajax geting data then you need to add name for input type field.
	 
		$data = array(
			 'title' => $this->input->post('event_title'),
			 'date' => $this->input->post('event_date'),
			 'time' => $this->input->post('event_time'),
			 'desc' => $this->input->post('event_desc')
		);	

	 	if($this->event_model->addEv($data))
		{			 
			echo true;		
		}
		else
		{
			echo false;
		}
	}
	public function getAllRecords()
	{
		$results = $this->event_model->getRecrods();		 
		print_r(json_encode($results));		
	}
	
	public function deleteRecord()
	{
		$id = $this->input->get('id');
		if($this->event_model->delete_event($id)){
			echo true;
		}
		else
		{
			echo false;
		}

	}

	public function getRow()
	{
		$id = $this->input->get('id');
		$row = $this->event_model->getRow($id);
		print_r(json_encode($row));
	}

	public function editEvent()
	{

		$id = $this->input->post('e_id');
		$data = array(
			 'title' => $this->input->post('e_title'),
			 'date' => $this->input->post('e_date'),
			 'time' => $this->input->post('e_time'),
			 'desc' => $this->input->post('e_desc')
		);	

	 	if($this->event_model->editEv($id,$data))
		{			 
			echo true;		
		}
		else
		{
			echo false;
		}
	}
}