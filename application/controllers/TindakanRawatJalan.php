<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TindakanRawatJalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MTindakanRawatJalan');
        $this->load->model('MDiagnosa');
        $this->load->model('MObat');
        $this->load->model('MPelayanan');
    }

    public function index()
    {
        $data['title'] = 'Tindakan Rawat Jalan';
        $data['subtitle'] = 'Data Tindakan Rawat Jalan';

        $data['content_overview'] = $this->load->view('tindakanrawatjalan', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MTindakanRawatJalan->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pendaftaran'         => "<a href='" . base_url('TindakanRawatJalan/add/' . $di->id_pendaftaran . '/' . $di->pasien_id) . "'><span class='badge badge-info'> " . $di->id_pendaftaran . " </span></a>",
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

    public function add($id, $pasien)
    {

        $data['title'] = 'Tindakan Rawat Jalan';
        $data['subtitle'] = 'Tambah Tindakan Rawat Jalan';
        $data["di"] = $this->MTindakanRawatJalan->getById($id);
        $data["dp"] = $this->MTindakanRawatJalan->getDiagnosaId($id);
        $data["ct"] = $this->MTindakanRawatJalan->getCatatanById($id);
        // $data["riwayat_cacatan"] = $this->MTindakanRawatJalan->riwayat($id);
        $data["riwayat_catatan"] = $this->MTindakanRawatJalan->riwayat_catatan($pasien);
        $data["riwayat_resep"] = $this->MTindakanRawatJalan->riwayat_resep($pasien);
        $data["riwayat_pelayanan"] = $this->MTindakanRawatJalan->riwayat_pelayanan($pasien);

        $data['content_overview'] = $this->load->view('TindakanRawatJalan/formadd', $data, true);
        $this->load->view('overview', $data);
    }
    public function datalist_diagnosa()
    {
        $list = $this->MDiagnosa->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                 => $i,
                'diagnosa_id'         => $di->diagnosa_id,
                'diagnosa_code'       => "<button diagnosa_code='"  . $di->diagnosa_code . "' class='btn btn-sm btn-diagnosa' type='submit' > 
                <span class='badge badge-warning' > " . $di->diagnosa_code . " </span>
            </button>",
                'diagnosa_version'       => $di->diagnosa_version,
                'diagnosa_name'       => $di->diagnosa_name,
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function datalist_trdiagnosa($id)
    {

        $list = $this->MTindakanRawatJalan->tr_diagnosa($id);

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(

                'nomor'                 => $i,
                'id_pendaftaran' => $di->id_pendaftaran,
                'id_tr_diagnosa'           => $di->id_tr_diagnosa,
                'diagnosa_code'         => $di->diagnosa_code,
                'diagnosa_version'      => $di->diagnosa_version,
                'diagnosa_name'         => $di->diagnosa_name,
                'keterangan'            => $di->keterangan,
                'btn_action'            => "<button type='button' id='btn_diagnosa_del' vid_tr_diagnosa =" . $di->id_tr_diagnosa . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function save_diagnosa()
    {
        $data = [
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
            'pasien_id' => $this->input->post('pasien_id'),
            'id_dokter' => $this->input->post('id_dokter'),
            'diagnosa_code' => $this->input->post('diagnosa_code'),
            'keterangan' => $this->input->post('keterangan'),
            'create_date' => date('y/m/d')
        ];
        $this->db->insert('tr_diagnosa', $data);
    }
    public function delete_diagnosa()
    {
        $this->db->where('id_tr_diagnosa', $this->input->post('id_tr_diagnosa'));
        $this->db->delete("tr_diagnosa");
    }

    public function datalist_pelayanan()
    {
        $list = $this->MPelayanan->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $pelayanan) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pelayanan'         => "<button type='button' id='btn_pelayanan_del' vid_pelayanan=" . $pelayanan->id_pelayanan . " class='btn btn-sm btn-outline-danger'> 
                $pelayanan->id_pelayanan
            </button>",
                'nama_pelayanan'       => $pelayanan->nama_pelayanan,
                'harga'                 => $pelayanan->harga,
                'btn_action'            => "
											<button type='button' id='btn_pelayanan_save' vi_pelayanan=" . $pelayanan->id_pelayanan . " class='btn btn-sm btn-outline-info'> 
                                            <i class='fas fa-plus'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function save_pelayanan()
    {

        $data = [
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
            'pasien_id' => $this->input->post('pasien_id'),
            'id_dokter' => $this->input->post('id_dokter'),
            'id_pelayanan' => $this->input->post('id_pelayanan'),
            'tgl_pelayanan' => date('y/m/d')
        ];

        $this->db->insert('tr_pelayanan', $data);
    }
    public function tr_pelayanan($id)
    {
        $list = $this->MTindakanRawatJalan->tr_pelayanan($id);

        $rtn = array();
        $i = 1;

        foreach ($list as $pelayanan) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_pelayanan'         =>  $pelayanan->id_pelayanan,
                'nama_pelayanan'       => $pelayanan->nama_pelayanan,
                'harga'                 => $pelayanan->harga,
                'btn_action'            => "
											<button type='button' id='btn_pelayanan_del' vdi_tr_pelayanan=" . $pelayanan->id_tr_pelayanan . " class='btn btn-sm btn-outline-danger'> 
                                            <i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function delete_pelayanan()
    {
        $this->db->where('id_tr_pelayanan', $this->input->post('id_tr_pelayanan'));
        $this->db->delete("tr_pelayanan");
    }
    public function datalist_obat()
    {
        $list = $this->MObat->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $o) {

            $rtn[] = array(
                'nomor'               => $i,
                'id_obat'             =>   $o->id_obat,
                'nama_obat'         =>  $o->nama_obat,
                'kode_obat'          => "<button kode_obat='"  . $o->kode_obat . "' class='btn btn-sm btn-obat' type='submit' > <span class='badge badge-warning' > " . $o->kode_obat . " </span></button>",
                'dosis'               => $o->dosis,
                'dosis_name'       => $o->dosis_name,
                'jenis_obat_name'             => $o->jenis_obat_name,
                'satuan_name'    => $o->satuan_name,
                'stock_minimal'      => $o->stock_minimal,
                'stock'                 => $o->stock,
                'harga_pokok'          => $this->MFunction->idr($o->harga_pokok),
                'harga_resep'          => $this->MFunction->idr($o->harga_resep),
                'harga_nonresep'     => $this->MFunction->idr($o->harga_nonresep),
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function datalist_trresep($id)
    {
        $list = $this->MTindakanRawatJalan->tr_resep($id);

        $rtn = array();
        $i = 1;

        foreach ($list as $o) {

            $rtn[] = array(
                'nomor'               => $i,
                'id_pendaftaran' => $o->id_pendaftaran,
                'kode_obat'             =>   $o->kode_obat,
                'nama_obat'         =>  $o->nama_obat,
                'quantity'               => $o->quantity,
                'satuan_name'       => $o->satuan_name,
                'tuslah'             => $o->tuslah,
                'aturan'    => $o->aturan,
                'btn_action'            => "
											<button type='button' id='btn_resep_del' vdi_tr_resep=" . $o->id_tr_resep . " class='btn btn-sm btn-outline-danger'> 
                                            <i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }


    public function save_resep()
    {
        $data = [
            'id_pendaftaran' => $this->input->post('id_pendaftaran'),
            'pasien_id' => $this->input->post('pasien_id'),
            'kode_obat' => $this->input->post('kode_obat'),
            'id_dokter' => $this->input->post('id_dokter'),
            'tuslah' => $this->input->post('tuslah'),
            'quantity' => $this->input->post('quantity'),
            'aturan' => $this->input->post('aturan'),
            'create_date' => date('y/m/d')
        ];
        $this->db->insert("tr_resep", $data);
    }
    public function delete_resep()
    {
        $this->db->where('id_tr_resep', $this->input->post('id_tr_resep'));
        $this->db->delete("tr_resep");
    }
    public function tindakan_selesai()
    {
        $data = [
            'status' => '3'
        ];
        $this->db->where('id_pendaftaran', $this->input->post('id_pendaftaran'));
        $this->db->update("tr_pendaftaran", $data);
    }
}
