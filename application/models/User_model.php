<?php 
/**
 * 
 */
class User_model extends CI_model
{
	
	public function getAllMentor()
	{
		$query = $this->db->get('mentor');
		return $query->result_array();
	}
	public function getMentorById($id)
	{
		return $this->db->get_where('mentor', ['id' => $id])->row_array();
	}
	public function ubahDataUser()
	{
		$data = [
				"name" => $this->input->post('name', true),
				
				
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
	}
}