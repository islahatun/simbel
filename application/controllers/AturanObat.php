<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AturanObat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MAturanObat');
    }

    public function index()
    {
        $data['title'] = 'Jenis Obat';
        $data['subtitle'] = 'Data Jenis Obat';

        $data['content_overview'] = $this->load->view('aturanobat', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MAturanObat->datalist();
        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'aturan_obat'         => $ao->aturan_obat,
                'aturan_obat_name'    => $ao->aturan_obat_name,
                'status'              => "<span class='badge badge-warning'> " . $this->MFunction->php_status($ao->status) . " </span>",
                'btn_action'         => "<a href='" . base_url('AturanObat/update/' . $ao->aturan_obat) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_aturan_obat_del' vaturan_obat=" . $ao->aturan_obat . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Jenis Obat';

        $data['subtitle'] = 'Tambah Data Jenis Obat';

        $data['content_overview'] = $this->load->view('aturanobat/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Jenis Obat';

        $data['subtitle'] = 'Tambah Data Jenis Obat';
        $data["ao"] = $this->MAturanObat->getById($id);

        $data['content_overview'] = $this->load->view('aturanobat/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'aturan_obat_name' => $this->input->post('aturan_obat_name'),
            'status' => '1'
        );

        $this->db->insert("dm_aturan_obat", $data);
    }

    function updateSave()
    {
        $data = array(
            'aturan_obat_name' => $this->input->post('aturan_obat_name')
        );

        $this->db->where('aturan_obat', $this->input->post('aturan_obat'));
        $this->db->update("dm_aturan_obat", $data);
    }

    public function delete()
    {
        $data = array(
            'status' => '0',
        );

        $this->db->where('aturan_obat', $this->input->post('aturan_obat'));
        $this->db->update("dm_aturan_obat", $data);
    }
}
