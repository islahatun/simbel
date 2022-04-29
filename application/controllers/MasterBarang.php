<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masterBarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MMasterBarang');
    }

    public function index()
    {
        $data['title'] = 'Master Barang';
        $data['subtitle'] = 'Data Master Barang';

        $data['content_overview'] = $this->load->view('masterBarang', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MMasterBarang->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $po) {

            $rtn[] = array(
                'nomor'                 => $i,
                'id_po'         => $po->id_po,
                'nama_barang'       => $po->nama_barang,
                'kategori'                 => $po->kategori,
                'satuan'      => $po->satuan,
                'deskripsi'                 => $po->deskripsi,
                'harga_beli'                 => $po->harga_beli,
                'harga_jual'                 => $po->harga_jual,
                'tanggal_datang'                 => $po->tanggal_datang,
                'gambar'                 => $po->gambar,
                'btn_action'            => "<a href='" . base_url('MasterBarang/update/' . $po->id_po) . "' class='btn btn-sm btn-outline-success'> 
												<i class='fas fa-edit'></i>
											</a>
											<button type='button' id='btn_po_del' vid_po=" . $po->id_po . " class='btn btn-sm btn-outline-danger'> 
												<i class='fas fa-trash-alt'></i>
											</button>"
            );
            $i++;
        }

        echo json_encode($rtn);
    }

    public function add()
    {
        $data['title'] = 'Master Barang';
        $data['subtitle'] = 'Tambah Master Barang';

        $data['content_overview'] = $this->load->view('MasterBarang/formadd', $data, true);
        $this->load->view('overview', $data);
    }

    public function update($id)
    {
        $data['title'] = 'Master Barang';
        $data['subtitle'] = 'Ubah Master Barang';
        $data["MasterBarang"] = $this->MMasterBarang->getById($id);

        $data['content_overview'] = $this->load->view('MasterBarang/formupdate', $data, true);
        $this->load->view('overview', $data);
    }

    public function save()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'kategori' => $this->input->post('kategori'),
            'satuan' => $this->input->post('satuan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'tanggal_datang' => $this->input->post('tanggal_datang'),
            'gambar' => $this->input->post('gambar')
        );

        $this->db->insert("dm_po", $data);
        return ('MasterBarang');
    }

    function updateSave()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'kategori' => $this->input->post('kategori'),
            'satuan' => $this->input->post('satuan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'tanggal_datang' => $this->input->post('tanggal_datang'),
            'gambar' => $this->input->post('gambar')
        );

        $this->db->where('id_po', $this->input->post('id_po'));
        $this->db->update("dm_po", $data);
    }

    public function delete()
    {

        $this->db->where('id_po', $this->input->post('id_po'));
        $this->db->update("dm_po");
    }
}
