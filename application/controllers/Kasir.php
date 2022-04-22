<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MKasir');
	}

	public function index()
	{
		$data['title'] = 'Kasir';
		$data['subtitle'] = 'Data Kasir';

		$data['content_overview'] = $this->load->view('kasir', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MKasir->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $s) {

			$rtn[] = array(
				'nomor'          	 	=> $i,
				'id_pendaftaran'      	=>  "<a href='" . base_url('Kasir/Add/' . $s->id_pendaftaran) . "' >
				<span class='badge badge-info'> " . $s->id_pendaftaran . " </span> </a> ",
				'tanggal_pendaftaran'   => $s->tanggal_pendaftaran,
				'pasien_id'      		=> $s->name,
				'tgl_lahir'       		=> $s->tgl_lahir,
				'poliklinik_id'			=> $s->poliklinik_name,
				'id_dokter'		 		=> $s->nama_dokter
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add($id)
	{
		$data['title'] = 'Payment';
		$data['subtitle'] = 'Tambah Data Kasir';
		$data["di"] = $this->MKasir->getById($id);
		$data["list"] = $this->MKasir->daftarBiayaObat($id);
		$data["list_pelayanan"] = $this->MKasir->daftarBiayaPelayanan($id);
		// $n = $this->MKasir->daftarBiaya($id);

		// var_dump($n);
		// die;

		$data['content_overview'] = $this->load->view('kasir/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function update($id)
	{
		$data['title'] = 'Kasir';
		$data['subtitle'] = 'Ubah Data Kasir';

		$data["s"] = $this->MKasir->getById($id);
		$data['prov'] = $this->MFunction->prov();

		$data['content_overview'] = $this->load->view('kasir/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	public function daftar_biaya($id)
	{

		$list = $this->MKasir->daftarBiaya($id);

		$rtn = array();
		$i = 1;

		foreach ($list as $di) {

			$rtn[] = array(

				'nomor'                 => $i,
				'id_pendaftaran' => $di->id_pendaftaran,
				'nama_obat'           => $di->nama_obat,
				'aturan'         => $di->aturan,
				'quantity'      => $di->quantity,
				'harga_resep'         => $di->harga_resep,
				'pelayanan'            => $di->pelayanan,
				'harga_pelayanan'            => $di->harga_pelayanan,
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function save()
	{
		$data = array(
			'supplier_name' 	=> $this->input->post('supplier_name'),
			'alamat' 			=> $this->input->post('alamat'),
			'prov_id'			=> $this->input->post('prov_id'),
			'kab_id'			=> $this->input->post('kab_id'),
			'kec_id'			=> $this->input->post('kec_id'),
			'telp' 				=> $this->input->post('telp'),
			'email'	 			=> $this->input->post('email'),
			'bank_id' 			=> $this->input->post('bank_id'),
			'no_rekening' 		=> $this->input->post('no_rekening'),
			'rek_name' 			=> $this->input->post('rek_name'),
			'status' 			=> '1'
		);

		$this->db->insert("dm_supplier", $data);
	}

	function updateSave()
	{
		$data = array(
			'supplier_name' 	=> $this->input->post('supplier_name'),
			'alamat' 			=> $this->input->post('alamat'),
			'prov_id'			=> $this->input->post('prov_id'),
			'kab_id'			=> $this->input->post('kab_id'),
			'kec_id'			=> $this->input->post('kec_id'),
			'telp' 				=> $this->input->post('telp'),
			'email' 			=> $this->input->post('email'),
			'bank_id' 			=> $this->input->post('bank_id'),
			'no_rekening'	 	=> $this->input->post('no_rekening'),
			'rek_name' 			=> $this->input->post('rek_name'),
		);

		$this->db->where('supplier_id', $this->input->post('supplier_id'));
		$this->db->update("dm_supplier", $data);
	}

	public function delete()
	{
		$data = array(
			'status' => '0',
		);

		$this->db->where('supplier_id', $this->input->post('supplier_id'));
		$this->db->update("dm_supplier", $data);
	}

	public function pembayaran($id)
	{

		$list = $this->MKasir->daftarBiayaObat($id);
		$list_pelayanan = $this->MKasir->daftarBiayaPelayanan($id);

		foreach ($list as $l) {
			$harga_resep[]    = $l['harga_resep'];
			$quantity[]    = $l['harga_resep'] * $l['quantity'];
		}
		foreach ($list_pelayanan as $l) {
			$harga[]    = $l['harga'];
		}
		$pelayanan = array_sum($harga);
		$obat = array_sum($quantity);
		$total_harga    = $obat + $pelayanan;
		//	return $this->MFunction->idr($total_harga);

		$data = array(
			'id_dokter' 	=> $this->input->post('id_dokter'),
			'pasien_id' 			=> $this->input->post('pasien_id'),
			'id_pendaftaran'			=> $this->input->post('id_pendaftaran'),
			'diskon'			=> $this->input->post('diskon'),
			'total_bayar'			=> $this->input->post('total_bayar'),
			'total' 				=> $total_harga,
			'kembali' => $total_harga - $this->input->post('diskon')
		);



		$this->db->insert("tr_kasir", $data);

		$this->db->set("status", 4);
		$this->db->where('id_pendaftaran', $id);
		$this->db->update("tr_pendaftaran");
	}
	public function detail_pembayaran($id)
	{
		$data['title'] = 'Payment';
		$data['subtitle'] = 'Tambah Data Kasir';
		$data["di"] = $this->MKasir->getById($id);
		$data["list"] = $this->MKasir->daftarBiayaObat($id);
		$data["list_pelayanan"] = $this->MKasir->daftarBiayaPelayanan($id);
		// $n = $this->MKasir->daftarBiaya($id);

		// var_dump($n);
		// die;

		$data['content_overview'] = $this->load->view('kasir/detail', $data, true);
		$this->load->view('overview', $data);
	}
}
