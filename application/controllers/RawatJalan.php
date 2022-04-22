<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RawatJalan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFunction');
		$this->load->model('MRawatJalan');
	}

	public function index()
	{
		$data['title'] = 'Pendaftaran Rawat Jalan';
		$data['subtitle'] = 'Data Pendaftaran Rawat Jalan';

		$data['content_overview'] = $this->load->view('rawatjalan', $data, true);
		$this->load->view('overview', $data);
	}

	public function cariPasien()
	{
		$id = $this->input->post('pasien_id');
		// $data['pasien'] =  
		$pasien = $this->MRawatJalan->cariPasien($id);
		echo json_encode($pasien);
		// $this->load->view('search', $pasien);
		// $data['content_overview'] = $this->load->view('rawatjalan/formadd', $data, true);
		// $this->load->view('overview', $data);
	}


	public function datalist()
	{
		$list = $this->MRawatJalan->datalist();

		$rtn = array();
		$i = 1;

		foreach ($list as $rj) {

			$rtn[] = array(
				'nomor'          	 	=> $i,
				'id_pendaftaran'      	=>  $rj->id_pendaftaran,
				'tanggal_pendaftaran'   => $rj->tanggal_pendaftaran,
				'pasien_id'      		=> $rj->name,
				'tgl_lahir'       		=> $rj->tgl_lahir,
				'poliklinik_id'			=> $rj->poliklinik_name,
				'id_dokter'		 		=> $rj->nama_dokter,
				'jenis_pasien'			=> $rj->jenis_pasien,
				'status'         		=> "<span class='badge badge-warning'> " . $this->MFunction->tr_status($rj->status) . " </span>",
				// 'sts'			 		=> $rj->sts,
				// 'btn_action'         	=> "<i class='fas fa-plus'></i> | <i class='fas fa-plus'></i>"
				// "<a href='" . base_url('pendaftaran/update/' . $rj->id_pendaftaran) . "' class='btn btn-sm btn-outline-success'> 
				// 								<i class='fas fa-edit'></i>
				// 							</a>
				// 							<button type='button' id='btn_pendaftaran_del' vid_pendaftaran=" . $rj->id_pendaftaran . " class='btn btn-sm btn-outline-danger'> 
				// 								<i class='fas fa-trash-alt'></i>
				// 							</button>"
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function listPasien()
	{
		$list = $this->MRawatJalan->listPasien();

		$rtn = array();
		$i = 1;

		foreach ($list as $pasien) {

			$rtn[] = array(
				'nomor'         		=> $i,
				'pasien_id'             => $pasien->pasien_id,
				'name'                  => $pasien->name,
				'jenis_kelamin'         => $this->MFunction->php_jk($pasien->jenis_kelamin),
				'umur'                  => $this->MFunction->php_umur($pasien->tgl_lahir),
				'telp'                  => $pasien->telp,
				'alamat'                => $pasien->alamat
			);
			$i++;
		}

		echo json_encode($rtn);
	}

	public function add()
	{
		$data['title'] = 'Pendaftaran Rawat Jalan';
		$data['subtitle'] = 'Tambah Pendaftaran Rawat Jalan';

		$data['prov'] = $this->MFunction->prov();
		$data['poli'] = $this->MFunction->poli();
		$data['jenisrujukan'] = $this->MFunction->jenisrujukan();
		$data['dokter'] = $this->MFunction->dokter();

		$data['content_overview'] = $this->load->view('rawatjalan/formadd', $data, true);
		$this->load->view('overview', $data);
	}

	public function save()
	{
		$currentDate = date('Ymd');
		$vid_pendaftaran = $this->MRawatJalan->genCode('RJ', $currentDate);

		$data = array(
			'id_pendaftaran'		=> $vid_pendaftaran,
			'pasien_id' 			=> $this->input->post('pasien_id'),
			'tgl_lahir' 			=> $this->input->post('tgl_lahir'),
			'jenis_rujukan'			=> $this->input->post('jenis_rujukan'),
			'tanggal_pendaftaran'	=> $this->input->post('tanggal_pendaftaran'),
			// 'keluhan'				=> $this->input->post('keluhan'),
			'poliklinik_id'			=> $this->input->post('poliklinik_id'),
			'id_dokter'				=> $this->input->post('id_dokter'),
			'jenis_pasien'	 		=> $this->input->post('jenis_pasien'),
			'status' => '1'
		);

		$this->db->insert("tr_pendaftaran", $data);
	}
}
