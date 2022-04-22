<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KajianRawatJalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MKajianRawatJalan');
    }

    public function index()
    {
        $data['title'] = 'Kajian Rawat Jalan';
        $data['subtitle'] = 'Data Kajian Rawat Jalan';

        $data['content_overview'] = $this->load->view('kajianrawatjalan', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MKajianRawatJalan->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pendaftaran'         => "<a href='" . base_url('KajianRawatJalan/add/' . $di->id_pendaftaran) . "'><span class='badge badge-info'> " . $di->id_pendaftaran . " </span></a>",
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
        $data['title'] = 'Kajian Rawat Jalan';
        $data['subtitle'] = 'Input Kajian Rawat Jalan';
        $data["di"] = $this->MKajianRawatJalan->getById($id);

        $data['content_overview'] = $this->load->view('kajianrawatjalan/formadd', $data, true);
        $this->load->view('overview', $data);
    }


    public function save()
    {
        $data = array(
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
            'pasien_id' => $this->input->post('pasien_id'),
            'berat_badan' => $this->input->post('berat_badan'),
            'buta_warna' => $this->input->post('buta_warna'),
            'gol_darah' => $this->input->post('gol_darah'),
            'tekanan_darah' => $this->input->post('tekanan_darah'),
            'suhu' => $this->input->post('suhu'),
            'nadi' => $this->input->post('nadi'),
            'catatan' => $this->input->post('catatan'),
            'keluhan' => $this->input->post('keluhan'),
            'cacat_badan' => $this->input->post('cacat_badan'),
            'alergi' => $this->input->post('alergi'),
            'respirasi' => $this->input->post('respirasi'),
            'tinggi_badan' => $this->input->post('tinggi_badan'),
            'status' => '2',
            'tanggal_catatan' => date('y/m/d')
        );

        $this->db->insert("tr_catatan", $data);

        $this->db->set("status", 2);
        $this->db->where("id_pendaftaran", $this->input->post('id_pendaftaran'));
        $this->db->update("tr_pendaftaran");
        return ('KajianRawatJalan');
    }
}
