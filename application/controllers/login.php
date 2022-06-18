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
		$username = $this->input->post('nama');
		$password = $this->input->post('sandi');

		$where = array(
			'nama' => $username,
			'sandi' => md5($password),
		);

		$cek = $this->MLogin->clogin("dm_pengguna", $where)->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				// 'status_login' => '1'
			);

			$this->session->set_userdata($data_session);
			if ($this->session->userdata('status_login') == 2) {
				redirect(base_url());
			} else {
				redirect(base_url('DaftarBarang'));
			}
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
