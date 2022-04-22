<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanKunjungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MLaporanKunjungan');
    }

    public function index()
    {
        $data['title'] = 'Laporan Kunjungan';
        $data['subtitle'] = 'Laporan Kunjuangan';

        $data['content_overview'] = $this->load->view('laporanKunjungan/listkunjungan', $data, true);
        $this->load->view('overview', $data);
    }
    public function datalist()
    {
        $name = $this->input->post('name');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $list = $this->MLaporanKunjungan->datalist($name, $tgl_awal, $tgl_akhir);

        $rtn = array();
        $i = 1;

        foreach ($list as $pengunjung) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pendaftaran'        => $pengunjung->id_pendaftaran,
                'name'                  => $pengunjung->name,
                'tanggal_pendaftaran'               => $this->MFunction->tgl_indo($pengunjung->tanggal_pendaftaran),
                'pasien_id'             => $pengunjung->pasien_id,
                'poliklinik_name'       => $pengunjung->poliklinik_name,
                'nama_dokter'           => $pengunjung->nama_dokter,
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function test()
    {
        $data = [
            'name' => $this->input->post('name'),
            'tgl_awal' => $this->input->post('tgl_awal'),
        ];

        $this->db->insert("test", $data);
    }
}
