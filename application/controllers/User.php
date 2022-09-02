<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	

	public function index()
	{
		$data['title']= 'my profile';
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// echo 'selamat datang '. $data['user']['name'];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}
	public function nana()
	{
		$data['title']= 'MOVEInovation';
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['mentor']= $this->db->get('mentor')->result_array();
		// echo 'selamat datang '. $data['user']['name'];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/nana', $data);
		$this->load->view('templates/footer');
	}
	public function detail($id)
	{
		$data['title']= 'MOVEInovation';
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('User_model');
		$data['mentor']= $this->User_model->getMentorById($id);

		// echo 'selamat datang '. $data['user']['name'];

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/detail', $data);
		$this->load->view('templates/footer');
	}
}