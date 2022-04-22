<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MSatuan');
    }

    public function index()
    {
        $data['title'] = 'Satuan Dosis';
        $data['subtitle'] = 'Data Satuan Dosis';

        $data['content_overview'] = $this->load->view('satuan', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MSatuan->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $satuan) {

            $rtn[] = array(
                'nomor'                 => $i,
                'satuan_id'         => $satuan->satuan_id,
                'satuan_name'       => $satuan->satuan_name,
                'status'                 => "<span class='badge badge-warning'> " . $this->MFunction->php_status($satuan->status) . " </span>",
                'btn_action'            => "<a href='" . base_url('Satuan/update/' . $satuan->satuan_id) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_satuan_del' vsatuan_id=" . $satuan->satuan_id . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Satuan Dosis';
        $data['subtitle'] = 'Tambah Satuan Dosis';

        $data['content_overview'] = $this->load->view('Satuan/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Satuan Dosis';
        $data['subtitle'] = 'Ubah Satuan Dosis';
        $data["di"] = $this->MSatuan->getById($id);

        $data['content_overview'] = $this->load->view('Satuan/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'satuan_name' => $this->input->post('satuan_name'),
            'status' => '1'
        );

        $this->db->insert("dm_satuan", $data);
        return ('Satuan');
    }

    function updateSave()
    {
        $data = array(
            'satuan_name' => $this->input->post('satuan_name'),
        );

        $this->db->where('satuan_id', $this->input->post('satuan_id'));
        $this->db->update("dm_satuan", $data);
    }

    public function delete()
    {
        $data = array(
            'status' => '0',
        );

        $this->db->where('satuan_id', $this->input->post('satuan_id'));
        $this->db->update("dm_satuan", $data);
    }
}
