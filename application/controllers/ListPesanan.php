<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ListPesanan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MListPesanan');
		$this->load->model('MStatusPemesanan');
	}

	public function index()
	{
		$this->MListPesanan->kadaluarsa();
		$data['title'] = 'Daftar Pesanan';
		$data['subtitle'] = 'Data Daftar Pesanan';

		$data['content_overview'] = $this->load->view('listPesanan', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MListPesanan->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $listPesanan) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'id_pemesanan'         => $listPesanan->id_pemesanan,
				'id_pelanggan'         => $listPesanan->id_pelanggan,
				'nama_barang'         => $listPesanan->nama_barang,
				'harga_barang'         => $this->MFunction->idr($listPesanan->harga_barang),
				'jumlah_beli'         => $listPesanan->jumlah_beli,
				'total_pembelian'         => $this->MFunction->idr($listPesanan->total_pembelian),
				'tanggal_pemesanan'         => $listPesanan->tanggal_pemesanan,
				'status_pemesanan'       => "<span class='badge badge-warning'> " . $listPesanan->status_pemesanan . " </span>",
				'gambar'                 => "<a href='" . base_url('assets/img/barang/' . $listPesanan->bukti_pembayaran) . "' class='btn btn-sm btn-outline-success' target='blank'> Lihat Gambar ",
				'btn_action'            => "<a href='" . base_url('ListPesanan/update/' . $listPesanan->id_pemesanan) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											"
			);
			$i++;
		}

		echo json_encode($rtn);
	}


	public function update($id)
	{
		$data['title'] = 'Daftar Pesanan';
		$data['subtitle'] = 'Ubah Daftar Pesanan';
		$data["ao"] = $this->MListPesanan->getById($id);
		$data['status_pemesanan'] = $this->MStatusPemesanan->datalist();

		$data['content_overview'] = $this->load->view('listPesanan/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	function updateSave()
	{
		$data = array(
			'status_pemesanan' => $this->input->post('status_pemesanan'),
			'nomor_resi' => $this->input->post('nomor_resi'),
		);

		$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
		$this->db->update("trans_pemesanan", $data);
	}

	public function delete()
	{

		$this->db->where('id_pemesanan', $this->input->post('id_pemesanan'));
		$this->db->delete("trans_pemesanan");
	}
}
