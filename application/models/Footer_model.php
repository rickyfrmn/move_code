<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Footer_model extends CI_model
{

public function tambahDataFooter()
	{
		$data = [
				"nama" => $this->input->post('nama', true),
				"email" => $this->input->post('email', true),
				"subject" => $this->input->post('nohp',true),
				"pesan" => $this->input->post('alamat', true),
				'date_send'=> time()
		];
		$this->db->insert('footer', $data);
	}
	

}