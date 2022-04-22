<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriWaste extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MKategoriWaste');
    }

    public function index()
    {
        $data['title'] = 'Kategori Waste';
        $data['subtitle'] = 'Data Kategori Waste';

        $data['content_overview'] = $this->load->view('kategoriwaste', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MKategoriWaste->datalist();
        // var_dump($list);
        // die;
        $rtn = array();
        $i = 1;

        foreach ($list as $kw) {

            $rtn[] = array(
                'nomor'                 => $i,
                'limbah_id'         => $kw->limbah_id,
                'limbah_name'       => $kw->limbah_name,
                'status'                 => "<span class='badge badge-warning'> " . $this->MFunction->php_status($kw->status) . " </span>",
                'btn_action'            => "<a href='" . base_url('KategoriWaste/update/' . $kw->limbah_id) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_limbah_del' vlimbah_id=" . $kw->limbah_id . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Kategori Waste';
        $data['subtitle'] = 'Tambah Kategori Waste';

        $data['content_overview'] = $this->load->view('kategoriwaste/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Kategori Waste';
        $data['subtitle'] = 'Ubah Kategori Waste';
        $data["kw"] = $this->MKategoriWaste->getById($id);

        $data['content_overview'] = $this->load->view('kategoriwaste/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'limbah_name' => $this->input->post('limbah_name'),
            'status' => '1'
        );

        $this->db->insert("dm_limbah", $data);
        return ('KategoriWaste');
    }

    function updateSave()
    {
        $data = array(
            'limbah_name' => $this->input->post('limbah_name'),
        );

        $this->db->where('limbah_id', $this->input->post('limbah_id'));
        $this->db->update("dm_limbah", $data);
    }

    public function delete()
    {
        $data = array(
            'status' => '0',
        );

        $this->db->where('limbah_id', $this->input->post('limbah_id'));
        $this->db->update("dm_limbah", $data);
    }
}
