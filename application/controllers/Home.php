<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data['title']= 'Home';
		$this->load->model('Contact_model');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_rules('pesan','Pesan','required');
		if($this->form_validation->run() == False) {
		$this->load->view('templates/header_home', $data);
		
		$this->load->view('home/index', $data);
		$this->load->view('home/pilar', $data);
		$this->load->view('home/testimoni_mitra', $data);
		$this->load->view('home/testimoni_user1', $data);
		$this->load->view('home/contact-us', $data);
		$this->load->view('templates/footer_home', $data);
	}else{
			$this->Contact_model->tambahDataContact();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('');
		}
		
	}
}