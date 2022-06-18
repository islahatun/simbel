<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{

		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MLogin');
		$this->load->model('MDaftarBarang');
	}

	public function index()
	{

		$data['barang'] = $this->MDaftarBarang->datalist();

		$data['title'] = 'Login';
		$data['template_page'] = $this->load->view('login', $data, true);
		$this->load->view('overview', $data);
	}
	// public function Regis()
	// {
	// 	$data['title'] = 'Registrasi';
	// 	$data['template_page'] = $this->load->view('Regis', $data, true);
	// 	$this->load->view('overview', $data);
	// }

	public function registrasi()
	{
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pwd');

		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$cek = $this->MLogin->clogin("sys_admin", $where)->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url());
		} else {
			$this->session->set_flashdata('error_login', 'Maaf, Username/Password anda salah. Silahkan Username dan Password dengan benar.');
			//
		}

		redirect(base_url('login'));
	}

	function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url());
	}
}
