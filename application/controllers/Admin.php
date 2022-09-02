<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$data['title']= 'Dashboard';
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// echo 'selamat datang '. $data['user']['name'];
		
		$this->load->view('templates/header_admin', $data);
		// $this->load->view('admin/sidebar', $data);
		// $this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}
	public function setting()
	{
		$data['title']= 'Dashboard';
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// echo 'selamat datang '. $data['user']['name'];
		$this->load->model('User_model');
		$this->form_validation->set_rules('name','Name','required',true);
		
		if($this->form_validation->run() == False) {
		$this->load->view('templates/header_admin', $data);
		// $this->load->view('templates/sidebar', $data);
		// $this->load->view('templates/topbar', $data);
		$this->load->view('admin/setting', $data);
		$this->load->view('templates/footer');
		}
		else{
			$this->User_model->ubahDataUser();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin');
		}
	}
	public function mentor()
	{
		$data['judul']='List of Mentor';
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Mentor_model', 'mentor');

		//load library
		$this->load->library('pagination');
		
		//ambil data keyword
		if($this->input->post('submit'))
		{
			$data['keyword']= $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword']= $this->session->userdata('keyword');
		}

		//config
		//data yang dicari
		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('email', $data['keyword']);

		$this->db->from('mentor');

		$config['total_rows']= $this->db->count_all_results();

		// menampilkan seluruh data
		// $config['total_rows']= $this->peoples->countAllPeoples();

		
		$data['total_rows']=$config['total_rows'];
		$config['per_page']= 8;
		
		 
		

		//initialize
		$this->pagination->initialize($config);

		$data['start']= $this->uri->segment(3);
		$data['mentor']= $this->mentor->getMentor($config['per_page'], $data['start'], $data['keyword']); 
		// angka 12 berarti yg ditampilin 12 data, angka 30 berarti data mulai dari data ke 31

		$this->load->view('templates/header_admin', $data);
		$this->load->view('admin/mentor', $data);
		$this->load->view('templates/footer');
	}
	public function detailMentor($id)
	{
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Mentor_model');
		$data['judul']='Detail data mentor';
		$data['mentor']= $this->Mentor_model->getMentorById($id);
		$this->load->view('templates/header_admin', $data);
		
		$this->load->view('admin/mentor/detail', $data);
		$this->load->view('templates/footer');
	}

	public function subscribe()
	{
		$data['judul']='List of Subscribe';
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Subscribe_model', 'subscribe');

		//load library
		$this->load->library('pagination');
		
		//ambil data keyword
		if($this->input->post('submit'))
		{
			$data['keyword']= $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword']= $this->session->userdata('keyword');
		}

		//config
		//data yang dicari
		
		$this->db->like('email', $data['keyword']);

		$this->db->from('subscribe');

		$config['total_rows']= $this->db->count_all_results();

		// menampilkan seluruh data
		// $config['total_rows']= $this->peoples->countAllPeoples();

		
		$data['total_rows']=$config['total_rows'];
		$config['per_page']= 8;
		
		 
		

		//initialize
		$this->pagination->initialize($config);

		$data['start']= $this->uri->segment(3);
		$data['subscribe']= $this->subscribe->getSubscribe($config['per_page'], $data['start'], $data['keyword']); 
		// angka 12 berarti yg ditampilin 12 data, angka 30 berarti data mulai dari data ke 31

		$this->load->view('templates/header_admin', $data);
		$this->load->view('admin/subscribe', $data);
		$this->load->view('templates/footer');
	}
	public function contact_us()
	{
		$data['judul']='List of Contact-us';
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Contact_model', 'contact');

		//load library
		$this->load->library('pagination');
		
		//ambil data keyword
		if($this->input->post('submit'))
		{
			$data['keyword']= $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword']= $this->session->userdata('keyword');
		}

		//config
		//data yang dicari
		
		$this->db->like('email', $data['keyword']);

		$this->db->from('contact-us');

		$config['total_rows']= $this->db->count_all_results();

		// menampilkan seluruh data
		// $config['total_rows']= $this->peoples->countAllPeoples();

		
		$data['total_rows']=$config['total_rows'];
		$config['per_page']= 8;
		
		 
		

		//initialize
		$this->pagination->initialize($config);

		$data['start']= $this->uri->segment(3);
		$data['contact']= $this->contact->getContact($config['per_page'], $data['start'], $data['keyword']); 
		// angka 12 berarti yg ditampilin 12 data, angka 30 berarti data mulai dari data ke 31

		$this->load->view('templates/header_admin', $data);
		$this->load->view('admin/contact-us', $data);
		$this->load->view('templates/footer');
	}
	public function detailContact($id)
	{
		$data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->model('Contact_model');
		$data['judul']='Detail data contact';
		$data['contact']= $this->Contact_model->getContactById($id);
		$this->load->view('templates/header_admin', $data);
		
		$this->load->view('admin/contact/detail', $data);
		$this->load->view('templates/footer');
	}

	// coding hapus

	public function hapus($id)
	{	
		$this->load->model('Mentor_model');
		$this->load->model('Contact_model');
		$this->load->model('Subscribe_model');
		$this->Mentor_model->hapusDataMentor($id);
		$this->Contact_model->hapusDataContact($id);
		$this->Subscribe_model->hapusDataSubscribe($id);

		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin');
	}
}