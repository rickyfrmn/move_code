<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_model extends CI_model
{	
	public function getAllSubscribe()
	{
		return $this->db->get('subscribe')->result_array();
	}
	public function getSubscribe($limit,$start,$keyword = null)
	{
		if ($keyword){
			
			$this->db->like('email', $keyword);
		}
		return $this->db->get('subscribe', $limit, $start)->result_array();
	}
	public function hapusDataSubscribe($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('subscribe');
	}
}