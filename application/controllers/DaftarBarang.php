<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarBarang extends CI_Controller
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
		// $data['template_page'] = $this->load->view('daftarBarang', $data, true);
		$this->load->view('daftarBarang', $data);
	}
	public function detail($id)
	{
		$data['barang'] = $this->MDaftarBarang->konfirmasi();
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
		);

		$this->db->insert("trans_pemesanan", $data);
		redirect('DaftarBarang/order');
	}
}
