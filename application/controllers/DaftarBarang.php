<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarBarang extends CI_Controller
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
		$data['info'] = $this->MLogin->infoToko();
		$data['barang'] = $this->MDaftarBarang->datalist();
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('daftarBarang', $data);
	}
	public function detail($id)
	{
		$data['pengguna'] = $this->MLogin->session();
		$data['info'] = $this->MLogin->infoToko();
		$data['barang'] = $this->MDaftarBarang->konfirmasi();
		$data['detail'] = $this->MDaftarBarang->getById($id);
		$data['ulasan'] = $this->MDaftarBarang->ulasan($id);
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('daftarBarang/detailBarang', $data);
	}
	public function detailNotLogin($id)
	{
		$data['pengguna'] = $this->MLogin->session();
		$data['info'] = $this->MLogin->infoToko();
		$data['ulasan'] = $this->MDaftarBarang->ulasan($id);
		$data['detail'] = $this->MDaftarBarang->getById($id);
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('daftarBarang/detailBarang', $data);
	}
	public function order()
	{
		$data = $this->session->userdata['id'];
		$nama = $this->session->userdata['nama'];
		$data = array(
			'id_pelanggan' => $data,
			'nama_pelanggan' => $nama,
			'id_po' => $this->input->post('id_po'),
			'jumlah_beli' => $this->input->post('jumlah_beli'),
			'total_pembelian' => $this->input->post('total_pembelian'),
			'harga_barang' => $this->input->post('harga_barang'),
			'status_pemesanan' => 5,
			'tanggal_pemesanan' => date('Y-m-d'),
			'ongkir' => $this->input->post('ongkir'),
		);

		$this->db->insert("trans_pemesanan", $data);
		redirect('DaftarBarang/DetailOrder/' . $this->input->post('id_po'));
	}
	public function orderKeranjang()
	{
		$data = $this->session->userdata['id'];
		$nama = $this->session->userdata['nama'];
		$data = array(
			'id_pelanggan' => $data,
			'nama_pelanggan' => $nama,
			'id_po' => $this->input->post('id_po'),
			'jumlah_beli' => $this->input->post('jumlah_beli'),
			'total_pembelian' => $this->input->post('total_pembelian'),
			'harga_barang' => $this->input->post('harga_barang'),
			'status_pemesanan' => 5,
			'tanggal_pemesanan' => date('Y-m-d'),
			'ongkir' => $this->input->post('ongkir'),
		);
		$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
		$this->db->update("trans_pemesanan", $data);
		// $this->db->insert("trans_pemesanan", $data);
		redirect('DaftarBarang/DetailOrder/' . $this->input->post('id_po'));
	}
	public function detailOrder($id)
	{
		$data['toko'] = $this->MDaftarBarang->Toko();
		$data['pengguna'] = $this->MLogin->session();
		$data['info'] = $this->MLogin->infoToko();
		$data['barang'] = $this->MDaftarBarang->konfirmasi();
		$data['detail'] = $this->MDaftarBarang->beli($id);

		// var_dump($data);
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('daftarBarang/detailOrder', $data);
	}
	public function pembayaran()
	{
		$id = $this->input->post('id_po');


		$foto = $_FILES['foto']['name'];
		if ($foto) {
			$config['upload_path']          = './assets/img/barang/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2048;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
			} else {

				$new_foto = $this->upload->data('file_name');
				$data = array(
					'no_rekening' => $this->input->post('no_rekening'),
					'status_pemesanan' => 6,
					'bukti_pembayaran' => $new_foto
				);
				$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
				$this->db->update("trans_pemesanan", $data);

				$detail = $this->MDaftarBarang->getById($id);
				$databarang = array(
					'stok' => ($detail['stok']) - 1
				);

				$this->db->where('id_po', $this->input->post('id_po'));
				$this->db->update("dm_po", $databarang);
				redirect('DaftarBarang');
			}
		}
	}
	public function pesanan()
	{
		$data['pengguna'] = $this->MLogin->session();
		$data['info'] = $this->MLogin->infoToko();
		$data['barang'] = $this->MDaftarBarang->pesanan();
		// $data['detail'] = $this->MDaftarBarang->getById($id);
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);

		$this->load->view('DaftarBarang/daftarOrder', $data);
	}
	public function Tracking()
	{
		$data['pengguna'] = $this->MLogin->session();
		$data['info'] = $this->MLogin->infoToko();
		$data['barang'] = $this->MDaftarBarang->Tracking();
		// $data['detail'] = $this->MDaftarBarang->getById($id);
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('DaftarBarang/daftarTracking', $data);
	}
	public function Profil()
	{
		$data['pengguna'] = $this->MLogin->session();
		$data['info'] = $this->MLogin->infoToko();
		$data['barang'] = $this->MDaftarBarang->Tracking();
		// $data['detail'] = $this->MDaftarBarang->getById($id);
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('DaftarBarang/Profil', $data);
	}
	public function keranjang()
	{
		$data = $this->session->userdata['id'];
		$nama = $this->session->userdata['nama'];
		$data = array(
			'id_pelanggan' => $data,
			'nama_pelanggan' => $nama,
			'id_po' => $this->input->post('id_po'),
			'ongkir' => $this->input->post('ongkir'),
			'jumlah_beli' => $this->input->post('jumlah_beli'),
			'total_pembelian' => $this->input->post('total_pembelian'),
			'harga_barang' => $this->input->post('harga_barang'),
			'status_pemesanan' => 7,
			'tanggal_pemesanan' => date('Y-m-d'),
		);

		$this->db->insert("trans_pemesanan", $data);
		redirect('DaftarBarang/Pesanan');
	}
	public function hapus()
	{

		$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));

		$this->db->delete('trans_pemesanan');

		redirect('DaftarBarang/pesanan');
	}

	public function ulasan()
	{
		$data = $this->session->userdata['id'];
		$foto = $this->input->post('id_pemesanan');
		var_dump($foto);
		$foto = $_FILES['foto']['name'];
		if ($foto) {
			$config['upload_path']          = './assets/img/barang/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2048;
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
			} else {

				$new_foto = $this->upload->data('file_name');
				$data = array(
					'konfirmasi' => $this->input->post('konfirmasi'),
					'foto_konfirmasi' => $new_foto
				);
				$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
				$this->db->update("trans_pemesanan", $data);
			}
		} else {
			$data = array(
				'konfirmasi' => $this->input->post('konfirmasi'),
			);
			$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
			$this->db->update("trans_pemesanan", $data);
		}
		redirect('DaftarBarang/Tracking');
	}
}
