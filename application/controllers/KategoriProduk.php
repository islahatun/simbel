<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriProduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MKategoriProduk');
    }

    public function index()
    {
        $data['title'] = 'Satuan Obat';
        $data['subtitle'] = 'Data Satuan Obat';

        $data['content_overview'] = $this->load->view('kategoriproduk', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MKategoriProduk->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $jo) {

            $rtn[] = array(
                'nomor'                 => $i,
                'jenis_obat_id'         => $jo->jenis_obat_id,
                'jenis_obat_name'       => $jo->jenis_obat_name,
                'status'                 => "<span class='badge badge-warning'> " . $this->MFunction->php_status($jo->status) . " </span>",
                'btn_action'            => "<a href='" . base_url('KategoriProduk/update/' . $jo->jenis_obat_id) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_jo_del' vjenis_obat_id=" . $jo->jenis_obat_id . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Satuan Obat';
        $data['subtitle'] = 'Tambah Satuan Obat';

        $data['content_overview'] = $this->load->view('kategoriproduk/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Satuan Obat';
        $data['subtitle'] = 'Ubah Satuan Obat';
        $data["jo"] = $this->MKategoriProduk->getById($id);

        $data['content_overview'] = $this->load->view('kategoriproduk/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'jenis_obat_name' => $this->input->post('jenis_obat_name'),
            'status' => '1'
        );

        $this->db->insert("dm_satuan_obat", $data);
    }

    function updateSave()
    {
        $data = array(
            'jenis_obat_name' => $this->input->post('jenis_obat_name'),
        );

        $this->db->where('jenis_obat_id', $this->input->post('jenis_obat_id'));
        $this->db->update("dm_satuan_obat", $data);
    }

    public function delete()
    {
        $data = array(
            'status' => '0',
        );

        $this->db->where('jenis_obat_id', $this->input->post('jenis_obat_id'));
        $this->db->update("dm_satuan_obat", $data);
    }
}
