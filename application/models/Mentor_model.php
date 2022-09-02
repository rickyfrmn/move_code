<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentor_model extends CI_model
{

public function tambahDataMentor()
	{
		$data = [
				"nama" => $this->input->post('nama', true),
				"email" => $this->input->post('email', true),
				"nohp" => $this->input->post('nohp',true),
				"alamat" => $this->input->post('alamat', true),
				"pendidikan" => $this->input->post('pendidikan', true),
				"sertifikasi" => $this->input->post('sertifikasi', true),
				"keahlian" => $this->input->post('keahlian', true),
				"bisnis" => $this->input->post('bisnis', true),
				"lama" => $this->input->post('lama', true),
				"sektor" => $this->input->post('sektor', true),
				"projek_startup" => $this->input->post('projek_startup', true),
				"des" => $this->input->post('des', true),
				"pengalaman" => $this->input->post('pengalaman', true),
				"motivasi" => $this->input->post('motivasi', true),
				// "konsultasi" => $this->input->post('konsultasi', true),
				"waktu" => $this->input->post('waktu', true),
				
				'date_create'=> time()
		];
		$this->db->insert('mentor', $data);
	}
	public function getAllMentor()
	{
		return $this->db->get('mentor')->result_array();
	}
	public function getMentor($limit,$start,$keyword = null)
	{
		if ($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('email', $keyword);
		}
		return $this->db->get('mentor', $limit, $start)->result_array();
	}

	public function countAllMentor()
	{
		return $this->db->get('mentor')->num_rows();
	}
	public function getMentorById($id)
	{
		return $this->db->get_where('mentor', ['id' => $id])->row_array();
	}
	public function hapusDataMentor($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('mentor');
	}

}