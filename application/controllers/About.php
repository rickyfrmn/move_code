<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{
	public function index()
	{
		$data['title']= 'Home';
		
		$this->load->view('templates/header_home', $data);
		
		$this->load->view('about/index', $data);
		$this->load->view('about/faq', $data);
		
		$this->load->view('templates/footer_home', $data);
	}
}