<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultant extends CI_Controller
{
	public function index()
	{
		$data['title']= 'Mentor';
		
		$this->load->view('templates/header_home');
		$this->load->view('templates/slide');
		// $this->load->view('mentor/manfaat');
		$this->load->view('consultant/index', $data);
		$this->load->view('templates/footer_home', $data);
	}
	public function registration()
	{
		$data['title']= 'Daftar';
		
		
		$this->load->model('Mentor_model');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('nohp','nohp','required|numeric');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('pendidikan','Pendidikan','required');
		// $this->form_validation->set_rules('keahlian','Keahlian','required');
		// $this->form_validation->set_rules('sertifikasi','Sertifikasi','required');
		$this->form_validation->set_rules('pengalaman','Pengalaman','required');
		$this->form_validation->set_rules('projek_startup','Projek_startup','required');
		$this->form_validation->set_rules('bisnis','Bisnis');
		$this->form_validation->set_rules('lama','Lama');
		$this->form_validation->set_rules('sektor','Sektor','required');
		$this->form_validation->set_rules('des','Des','required');
		
		$this->form_validation->set_rules('motivasi','Motivasi','required');
		// $this->form_validation->set_rules('konsultan','Konsultan','required');
		

		

		if($this->form_validation->run() == False) {
		$this->load->view('templates/header_home');
		$this->load->view('consultant/daftar', $data);
		$this->load->view('templates/footer_home', $data);
		}
		else{
			$this->Mentor_model->tambahDataMentor();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('consultant');
		}
		
		
		
		

	}
}