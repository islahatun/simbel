<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{
	function __construct()
	{

		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MDaftarBarang');
	}

	public function index()
	{
		$data['barang'] = $this->MDaftarBarang->datalist();
		if ($this->session->userdata('status') != "login") {
			$data['title'] = 'Login';
			$this->load->view('login', $data);
		} else {

			// if ($this->session->userdata('status_login') == '2') {
			// 	$data['title'] = 'Dasboard';
			// 	$data['content_overview'] = $this->load->view('dashboard', $data, true);
			// 	$this->load->view('overview', $data);
			// } else {
			// 	$data['title'] = 'Dasboard';
			// 	$data['content_overview'] = $this->load->view('daftarBarang', $data, true);
			// 	$this->load->view('overview', $data);
			// }
		}
	}
	function login()
	{
		$username = $this->input->post('nama');
		$password = $this->input->post('sandi');

		$where = array(
			'nama' => $username,
			'sandi' => md5($password),
		);
		$user = $this->db->get_where('dm_pengguna', ['nama' => $username])->row_array();
		// $cek = $this->MLogin->clogin("dm_pengguna", $where)->num_rows();

		if ($user) {
			if (password_verify($password, $user['sandi'])) {
				$data = [
					'id' => $user['id'],
					'nama' => $user['nama'],
					'status_login' => $user['status_login']
				];
				$this->session->set_userdata($data);
				switch ($user['status_login']) {
					case 1;
						redirect(base_url('DaftarBarang'));
						break;
					case 2;
						redirect(base_url('Dashboard'));
						break;
					default:
						redirect('laporan');
						break;
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
			<strong>Kata sandi salah</strong> 
			</div>');
				redirect('auth');
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
