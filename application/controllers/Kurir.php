<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MKurir');
    }

    public function index()
    {
        $data['title'] = 'Kurir';
        $data['subtitle'] = 'Data Kurir';

        $data['content_overview'] = $this->load->view('Kurir', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MKurir->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $po) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_kurir'         => $po->id_kurir,
                'nama_kurir'       => $po->nama_kurir,
                'jenis_kelamin'       => $po->jenis_kelamin,
                'wilayah_pengiriman'       => $po->wilayah_pengiriman,
                'foto'                 => $po->foto,
                'btn_action'            => "<a href='" . base_url('Kurir/update/' . $po->id_kurir) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_kurir_del' vid_kurir=" . $po->id_kurir . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Kurir';
        $data['subtitle'] = 'Tambah Kurir';

        $data['content_overview'] = $this->load->view('Kurir/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Kurir';
        $data['subtitle'] = 'Ubah Kurir';
        $data["kurir"] = $this->MKurir->getById($id);

        $data['content_overview'] = $this->load->view('Kurir/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nama_kurir' => $this->input->post('nama_kurir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'wilayah_pengiriman' => $this->input->post('wilayah_pengiriman'),
            'foto' => $this->input->post('foto')
        );

        $this->db->insert("dm_kurir", $data);
        return ('Kurir');
    }

    function updateSave()
    {
        $data = array(
            'nama_kurir' => $this->input->post('nama_kurir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'wilayah_pengiriman' => $this->input->post('wilayah_pengiriman'),
            'foto' => $this->input->post('foto')
        );

        $this->db->where('id_kurir', $this->input->post('id_kurir'));
        $this->db->update("dm_kurir", $data);
    }

    public function delete()
    {

        $this->db->where('id_kurir', $this->input->post('id_kurir'));
        $this->db->delete("dm_kurir");
    }
}
