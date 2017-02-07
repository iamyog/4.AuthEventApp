<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_Model extends CI_Model 
{	
	public function addEv($data)
	{		 
		return $this->db->insert('event',$data);		
	}
	public function getRecrods()
	{
		$query = $this->db->get('event');
		return $query->result();	

	}
	public function delete_event($id)
	{	
		$this->db->where('id',$id);
		return $this->db->delete('event');		
	}
	 public function editEv($id,$data)
	{	
		$this->db->where('id',$id);
		return $this->db->update('event',$data);		
	}
	public function getRow($id)
	{	
		$this->db->where('id',$id);
		$query = $this->db->get('event');		
		return $query->row();
	}
}
