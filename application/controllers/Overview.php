<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{
	function __construct()
	{

		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MDaftarBarang');
		$this->load->model('MLogin');
	}

	public function index()
	{

		$data['barang'] = $this->MDaftarBarang->datalist();
		$data['info'] = $this->MLogin->infoToko();
		$data['title'] = 'Login';
		$this->load->view('login', $data);
		// if ($this->session->userdata('status') != "login") {
		// 	$data['title'] = 'Login';
		// 	// $this->load->view('login', $data);
		// 	echo "login";
		// } else {

		// if ($this->session->userdata('status_login') == '2') {
		// 	$data['title'] = 'Dasboard';
		// 	$data['content_overview'] = $this->load->view('dashboard', $data, true);
		// 	$this->load->view('overview', $data);
		// } else {
		// 	$data['title'] = 'Dasboard';
		// 	$data['content_overview'] = $this->load->view('daftarBarang', $data, true);
		// 	$this->load->view('overview', $data);
		// }
		// }
	}
	function login()
	{
		$username = $this->input->post('nama');
		$password = $this->input->post('sandi');;

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
					'status_login' => $user['status_login'],
					'status' => 'login'
				];
				$this->session->set_userdata($data);
				switch ($user['status_login']) {
					case 1;
						redirect('DaftarBarang');
						break;
					case 2;
						redirect('Dashboard');
						break;
					default:
						redirect('laporan');
						break;
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
			<strong>Kata sandi salah</strong> 
			</div>');
				redirect('overview');
			}
		} else {
			$this->session->set_flashdata('error_login', 'Maaf, Username/Password anda salah. Silahkan Username dan Password dengan benar.');
			//
		}

		// redirect(base_url('login'));
	}
	public function regis()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat'),
			// 'email' => $this->input->post('email'),
			'sandi' => password_hash($this->input->post('sandi'), PASSWORD_DEFAULT),

			'status_login' => 1,
		);

		$this->db->insert("dm_pengguna", $data);
		redirect('Overview');
	}

	function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url('Overview'));
	}
	public function profil()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			// 'sandi' => password_hash($this->input->post('sandi'), PASSWORD_DEFAULT),

			// 'status_login' => 1,
		);
		$this->db->where("id", $this->input->post('id'));
		$this->db->update("dm_pengguna", $data);

		$this->session->set_flashdata('message', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
		<strong>Data Berhasil Diubah</strong> 
		</div>');

		redirect('DaftarBarang/Profil');
	}
	public function ubahSandi()
	{
		$data = array(
			'sandi' => password_hash($this->input->post('sandi'), PASSWORD_DEFAULT),
		);
		$this->db->where("id", $this->input->post('id'));
		$this->db->update("dm_pengguna", $data);

		$this->session->set_flashdata('messageSandi', '<div class="alert alert-dangerterdaftar alert-dismissible fade show" role="alert">
			<strong>Kata Sandi Berhasil Diubah</strong> 
			</div>');

		redirect('DaftarBarang/Profil');
	}
}
