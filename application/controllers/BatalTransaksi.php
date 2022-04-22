<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BatalTransaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MBatalTransaksi');
    }

    public function index()
    {
        $data['title'] = 'Batal Transaksi';
        $data['subtitle'] = 'Data Batal Transaksi';

        $data['content_overview'] = $this->load->view('bataltransaksi', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MBatalTransaksi->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pendaftaran'         => "<a href='" . base_url('BatalTransaksi/Add/' . $di->id_pendaftaran) . "' >
                						<span class='badge badge-info'> " . $di->id_pendaftaran . " </span> </a> ",
                'tanggal_pendaftaran'    => $this->MFunction->tgl_indo($di->tanggal_pendaftaran),
                'nama'                   => $di->name,
                'identitas_id'           => $di->identitas_id,
                'id'                     => $di->pasien_id,
                'alamat'                 => $di->alamat,
                'tgl_lahir'              => $di->tempat_lahir . ',' . $this->MFunction->tgl_indo($di->tgl_lahir),
                'status'                 => "<span class='badge badge-warning'> " . $this->MFunction->tr_status($di->status) . " </span>",

            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add($id)
    {
        $data['title'] = 'Pembatalan Transaksi Pasien';
        $data['subtitle'] = 'Pembatalan Transaksi';
        $data["di"] = $this->MBatalTransaksi->getById($id);
        // $data['di'] = $this->MBatalTransaksi->list_tindakan();

        $data['content_overview'] = $this->load->view('batalTransaksi/formAdd', $data, true);
        $this->load->view('overview', $data);
    }
    public function list_tindakan($id)
    {
        $list = $this->MBatalTransaksi->list_tindakan($id);

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                  => $i,
                'nama_pelayanan'         => $di->nama_pelayanan,
                'harga'                  => $di->harga
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function save()
    {
        $data = array(
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
            'pasien_id' => $this->input->post('pasien_id'),
            'tanggal_pendaftaran' => $this->input->post('tanggal_pendaftaran'),
            'status' => '7'

        );

        $dataupdate = array(
            // 'id_pendaftaran' => $this->input->post('id_pendaftaran'),
            'pasien_id' => $this->input->post('pasien_id'),
            'tanggal_pendaftaran' => $this->input->post('tanggal_pendaftaran'),
            'status' => '7'

        );

        $this->db->insert("tr_batal_transaksi", $data);
        $this->db->update("tr_pendaftaran", $dataupdate);
    }

    public function Listbatal()
    {
        $data['title'] = 'Daftar Transaksi Pasien';
        $data['subtitle'] = 'Pembatalan Transaksi/ Daftar Transaksi Pasien';

        // $data['di'] = $this->MBatalTransaksi->list_tindakan();

        $data['content_overview'] = $this->load->view('batalTransaksi/formList', $data, true);
        $this->load->view('overview', $data);
    }
    public function ListbatalTransaksi()
    {
        $list = $this->MBatalTransaksi->listbataltransaksi();

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pendaftaran'         =>  $di->id_pendaftaran,
                'tanggal_pendaftaran'    => $this->MFunction->tgl_indo($di->tanggal_pendaftaran),
                'nama'                   => $di->name,
                'identitas_id'           => $di->identitas_id,
                'id'                     => $di->pasien_id,
                'alamat'                 => $di->alamat,
                'tgl_lahir'              => $di->tempat_lahir . ',' . $this->MFunction->tgl_indo($di->tgl_lahir),
                // 'diagnosa_name'       => $di->diagnosa_name,
                'status'                 => "<span class='badge badge-warning'> " . $this->MFunction->tr_status($di->status) . " </span>",
                // 'btn_action'            => "<a href='" . base_url('Diagnosa/update/' . $di->id_pendaftaran) . "' class='btn btn-sm btn-outline-success'> 
                // 								<i class='fas fa-edit'></i>
                // 							</a>
                // 							<button type='button' id='btn_di_del' vid_pendaftaran=" . $di->id_pendaftaran . " class='btn btn-sm btn-outline-danger'> 
                // 								<i class='fas fa-trash-alt'></i>
                // 							</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
}
