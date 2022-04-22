<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Farmasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MFarmasi');
    }

    public function index()
    {
        $data['title'] = 'Antrian Farmasi';
        $data['subtitle'] = 'Data Antrian Farmasi';

        $data['content_overview'] = $this->load->view('farmasi', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MFarmasi->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pendaftaran'         => "<a href='" . base_url('Farmasi/add/' . $di->id_pendaftaran) . "'><span class='badge badge-info'> " . $di->id_pendaftaran . " </span></a>",
                'pasien_id'       => $di->pasien_id,
                'nama_dokter'       => $di->nama_dokter,
                'poliklinik_name'       => $di->poliklinik_name,
                'tanggal_pendaftaran'       => $di->tanggal_pendaftaran,
                'name'       => $di->name,
                'jenis_kelamin'       => $di->jenis_kelamin,
                'tgl_lahir'       => $di->tgl_lahir,
                'jenis_pasien'       => $di->jenis_pasien,
                'status'                 => "<span class='badge badge-warning'> " . $this->MFunction->tr_status($di->status) . " </span>",
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add($id)
    {
        $data['title'] = 'Proses Permintaan Farmasi';
        $data['subtitle'] = 'Data Antrian Farmasi';
        $data["di"] = $this->MFarmasi->getById($id);

        $data['content_overview'] = $this->load->view('farmasi/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function data_resep($id)
    {
        $list = $this->MFarmasi->getResep($id);

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pendaftaran'         => $di->id_pendaftaran,
                'kode_obat'       => $di->kode_obat,
                'nama_obat'       => $di->nama_obat,
                'dosis_name'       => $di->dosis_name,
                'tuslah'       => $di->tuslah,
                'aturan'       => $di->aturan,
                'quantity'       => $di->quantity,
                'harga_resep'       => $di->harga_resep,
                'harga_nonresep'       => $di->harga_nonresep,
                'total'            => $di->quantity * $di->harga_resep
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function proses_farmasi()
    {
        $data = [
            'status' => 5
        ];

        $this->db->where('id_pendaftaran', $this->input->post('id_pendaftaran'));
        $this->db->update('tr_pendaftaran', $data);
    }
    public function selesai_farmasi()
    {
        $data = [
            'status' => 6
        ];

        $this->db->where('id_pendaftaran', $this->input->post('id_pendaftaran'));
        $this->db->update('tr_pendaftaran', $data);
    }
}
