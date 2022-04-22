<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MDiagnosa');
    }

    public function index()
    {
        $data['title'] = 'Diagnosa';
        $data['subtitle'] = 'Data Diagnosa';

        $data['content_overview'] = $this->load->view('diagnosa', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MDiagnosa->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $di) {

            $rtn[] = array(
                'nomor'                 => $i,
                'diagnosa_id'         => $di->diagnosa_id,
                'diagnosa_code'       => $di->diagnosa_code,
                'diagnosa_version'       => $di->diagnosa_version,
                'diagnosa_name'       => $di->diagnosa_name,
                'status'                 => "<span class='badge badge-warning'> " . $this->MFunction->php_status($di->status) . " </span>",
                'btn_action'            => "<a href='" . base_url('Diagnosa/update/' . $di->diagnosa_id) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_di_del' vdiagnosa_id=" . $di->diagnosa_id . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Diagnosa';
        $data['subtitle'] = 'Tambah Diagnosa';

        $data['content_overview'] = $this->load->view('diagnosa/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Diagnosa';
        $data['subtitle'] = 'Ubah Diagnosa';
        $data["di"] = $this->MDiagnosa->getById($id);

        $data['content_overview'] = $this->load->view('diagnosa/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'diagnosa_name' => $this->input->post('diagnosa_name'),
            'diagnosa_code' => $this->input->post('diagnosa_code'),
            'diagnosa_version' => $this->input->post('diagnosa_version'),
            'status' => '1'
        );

        $this->db->insert("dm_diagnosa", $data);
        return ('Diagnosa');
    }

    function updateSave()
    {
        $data = array(
            'diagnosa_name' => $this->input->post('diagnosa_name'),
            'diagnosa_code' => $this->input->post('diagnosa_code'),
            'diagnosa_version' => $this->input->post('diagnosa_version'),
        );

        $this->db->where('diagnosa_id', $this->input->post('diagnosa_id'));
        $this->db->update("dm_diagnosa", $data);
    }

    public function delete()
    {
        $data = array(
            'status' => '0',
        );

        $this->db->where('diagnosa_id', $this->input->post('diagnosa_id'));
        $this->db->update("dm_diagnosa", $data);
    }
}
