<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
	public function index()
	{
		$data['title']= 'Service';
		
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[subscribe.email]', [
			'is_unique' => 'This email has already subscribe'
		]);
		if($this->form_validation->run()==false){
		$this->load->view('templates/header_home');
		
		$this->load->view('service/index', $data);
		$this->load->view('templates/footer_home', $data);
		}else{
			$data = [
				
				'email' => htmlspecialchars($this->input->post('email', true)),
				'date_receive'=> time()
			];
			$this->db->insert('subscribe', $data);
			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  	// 			Your email has added!</div>');
			redirect('service');
		}
	}
}