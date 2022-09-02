<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_model
{

public function tambahDataContact()
	{
		$data = [
				"nama" => $this->input->post('nama', true),
				"email" => $this->input->post('email', true),
				"subject" => $this->input->post('subject',true),
				"pesan" => $this->input->post('pesan', true),
				'date_send'=> time()
		];
		$this->db->insert('contact-us', $data);
	}
	
	public function getAllContact()
	{
		return $this->db->get('contact-us')->result_array();
	}
	public function getContact($limit,$start,$keyword = null)
	{
		if ($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('email', $keyword);
		}
		return $this->db->get('contact-us', $limit, $start)->result_array();
	}

	public function countAllContact()
	{
		return $this->db->get('contact-us')->num_rows();
	}
	public function getContactById($id)
	{
		return $this->db->get_where('contact-us', ['id' => $id])->row_array();
	}
	public function hapusDataContact($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('contact-us');
	}
	

}