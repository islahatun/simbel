<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalDokter extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MJadwalDokter');
	}

	public function index()
	{
		$data['title'] = 'Jadwal Tenaga Kesehatan';
		$data['subtitle'] = 'Data Jadwal Tenaga Kesehatan';

		$data['content_overview'] = $this->load->view('jadwaldokter', $data, true);
		$this->load->view('overview', $data);
	}

	public function datalist()
	{
		$list = $this->MJadwalDokter->datalist();
		$rtn = array();
		$i = 1;

		foreach ($list as $jd) {

			$rtn[] = array(
				'nomor'          	 => $i,
				'nama_dokter'        => "<a href='" . base_url('jadwaldokter/Update/' . $jd->id_dokter) . "' >
                						<span class='badge badge-info'> " . $jd->nama_dokter . " </span> </a> ",
				'poliklinik_id'      => $jd->poliklinik_name,
				'senin'      => $jd->senin,
				'selasa'      => $jd->selasa,
				'rabu'      => $jd->rabu,
				'kamis'      => $jd->kamis,
				'jumat'      => $jd->jumat,
				'sabtu'      => $jd->sabtu,
				'minggu'      => $jd->minggu,
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	// public function add()
	// {
	// 	$data['title'] = 'Tenaga Kesehatan';
	// 	$data['subtitle'] = 'Tambah Data Tenaga Kesehatan';

	// 	$data['prov'] = $this->MFunction->prov();

	// 	$data['poli'] = $this->MFunction->poli();

	// 	$data['content_overview'] = $this->load->view('tenagakesehatan/formadd', $data, true);
	// 	$this->load->view('overview', $data);
	// }

	public function update($id)
	{
		$data['title'] = 'Jadwal Dokter';
		$data['subtitle'] = 'Ubah Data Jadwal Dokter';
		$data["tk"] = $this->MJadwalDokter->getById($id);
		$data['poli'] = $this->MFunction->poli();

		$data['content_overview'] = $this->load->view('jadwaldokter/formupdate', $data, true);
		$this->load->view('overview', $data);
	}

	// public function save()
	// {
	// 	$data = array(
	// 		'poliklinik_id' 	=> $this->input->post('poliklinik_id'),
	// 		'nama_dokter' 		=> $this->input->post('nama_dokter'),
	// 		'no_hp' 			=> $this->input->post('no_hp'),
	// 		'jenis_kelamin' 	=> $this->input->post('jenis_kelamin'),
	// 		'no_ijin' 			=> $this->input->post('no_ijin'),
	// 		'alamat' 			=> $this->input->post('alamat'),
	// 		'prov_id'			=> $this->input->post('prov_id'),
	// 		'kab_id'			=> $this->input->post('kab_id'),
	// 		'kec_id'			=> $this->input->post('kec_id'),
	// 		'status' 			=> '1'
	// 	);

	// 	$this->db->insert("dm_dokter", $data);
	// }

	function updateSave()
	{
		$data = array(
			'id_dokter' 		=> $this->input->post('id_dokter'),
			'poliklinik_id' 	=> $this->input->post('poliklinik_id'),
			'nama_dokter' 		=> $this->input->post('nama_dokter'),
			'senin' 			=> $this->input->post('senin'),
			'selasa' 			=> $this->input->post('selasa'),
			'rabu' 				=> $this->input->post('rabu'),
			'kamis' 			=> $this->input->post('kamis'),
			'jumat' 			=> $this->input->post('jumat'),
			'sabtu' 			=> $this->input->post('sabtu'),
			'minggu' 			=> $this->input->post('minggu'),
		);

		$this->db->where('id_dokter', $this->input->post('id_dokter'));
		$this->db->update("dm_dokter", $data);
	}

	// public function delete()
	// {
	// 	$data = array(
	// 		'status' => '0',
	// 	);

	// 	$this->db->where('id_dokter', $this->input->post('id_dokter'));
	// 	$this->db->update("dm_dokter", $data);
	// }
}
