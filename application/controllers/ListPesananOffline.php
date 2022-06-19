<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ListPesananOffline extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MListPesananOffline');
		$this->load->model('MStatusPemesanan');
		$this->load->model('MMasterBarang');
	}

	public function index()
	{
		$data['title'] = 'Daftar Pesanan';
		$data['subtitle'] = 'Data Daftar Pesanan';
		$data['barang'] = $this->MMasterBarang->datalist();
		$data['content_overview'] = $this->load->view('listPesananOffline', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MListPesananOffline->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $ListPesananOffline) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'id_pemesanan'         => $ListPesananOffline->id_pemesanan,
				'id_pelanggan'         => $ListPesananOffline->id_pelanggan,
				'nama_barang'         => $ListPesananOffline->nama_barang,
				'harga_barang'         => $this->MFunction->idr($ListPesananOffline->harga_barang),
				'jumlah_beli'         => $ListPesananOffline->jumlah_beli,
				'total_pembelian'         => $this->MFunction->idr($ListPesananOffline->total_pembelian),
				'tanggal_pemesanan'         => $ListPesananOffline->tanggal_pemesanan,
				'status_pemesanan'       => "<span class='badge badge-warning'> " . $ListPesananOffline->status_pemesanan . " </span>",
				'btn_action'            => "<a href='" . base_url('ListPesananOffline/update/' . $ListPesananOffline->id_pemesanan) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											",
				'print'            => "<a href='" . base_url('ListPesananOffline/update/' . $ListPesananOffline->id_pemesanan) . "' class='btn btn-sm btn-outline-info'> 
				<i class='fas fa-print'></i>
											</a>
											"

			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Tambah Pemesanan Offline';
		$data['subtitle'] = 'Tambah Tambah Pemesanan Offline';


		$data['content_overview'] = $this->load->view('listPesananOffline/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Daftar Pesanan';
		$data['subtitle'] = 'Ubah Daftar Pesanan';
		$data["ao"] = $this->MListPesananOffline->getById($id);
		$data['barang'] = $this->MMasterBarang->datalist();
		$data['status_pemesanan'] = $this->MStatusPemesanan->datalist();

		$data['content_overview'] = $this->load->view('listPesananOffline/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$data = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			// 'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'id_po' => $this->input->post('id_po'),
			'harga_barang' => $this->input->post('harga_barang'),
			'jumlah_beli' => $this->input->post('jumlah_beli'),
			'status_pemesanan' => '3',
			'total_pembelian' => $this->input->post('total_pembelian'),
			'tanggal_pemesanan' => date('Y-m-d'),
		);
		$this->db->insert('trans_pemesanan_offline', $data);
		redirect('ListPesananOffline');
	}

	function updateSave()
	{
		$data = array(
			'id_po' => $this->input->post('id_po'),
			'harga_barang' => $this->input->post('harga_barang'),
			'jumlah_beli' => $this->input->post('jumlah_beli'),
			'status_pemesanan' => '3',
			'total_pembelian' => $this->input->post('total_pembelian'),
		);

		$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
		$this->db->update("trans_pemesanan_offline", $data);
	}

	public function delete()
	{

		$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
		$this->db->delete("trans_pemesanan_offline");
	}

	public function pdf()
	{
		$data['barang'] = $this->MListPesananOffline->datalistRow();
		$data['list'] = $this->MListPesananOffline->datalist();
		// $this->pdf->setPaper('A4', 'landscape');
		// $this->pdf->filename = "Laporan-Daftar-Pemesanan.pdf";
		$this->load->view('listPesananOffline/listpesanan', $data);
	}

	public function bayar()
	{

		$data = array(
			'status_pemesanan' => '4',
		);

		$this->db->where('status_pemesanan', '3');
		$this->db->update("trans_pemesanan_offline", $data);
	}
}
