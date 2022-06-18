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
                'id_kategori'                 => $po->id_kategori,
                'satuan'      => $po->satuan,
                'stok'      => $po->stok,
                'deskripsi'                 => $po->deskripsi,
                'harga_beli'                 => $this->MFunction->idr($po->harga_beli),
                'harga_jual'                 => $this->MFunction->idr($po->harga_jual),
                'tanggal_datang'                 => $po->tanggal_datang,
                'gambar'                 => "<img src='" . base_url('assets/img/barang/' . $po->gambar) . " class='card-img-top' alt='...'>",
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

        $foto = $_FILES['foto']['name'];
        if ($foto) {
            $config['upload_path']          = './assets/img/barang/';
            $config['allowed_types']        = 'jpg|png|jpeg';
            $config['max_size']             = 2048;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('upload_form', $error);
            } else {

                $new_foto = $this->upload->data('file_name');
                $data = array(
                    'nama_barang' => $this->input->post('nama_barang'),
                    'id_kategori' => $this->input->post('id_kategori'),
                    'satuan' => $this->input->post('satuan'),
                    'stok' => $this->input->post('stok'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga_beli' => $this->input->post('harga_beli'),
                    'harga_jual' => $this->input->post('harga_jual'),
                    'tanggal_datang' => $this->input->post('tanggal_datang'),
                    'gambar' =>  $new_foto
                );

                $this->db->insert("dm_po", $data);

                $this->session->set_flashdata('message', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Data Barang berhasil di tambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
                redirect('MasterBarang/add');
            }
        }
    }

    function updateSave()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'id_kategori' => $this->input->post('id_kategori'),
            'satuan' => $this->input->post('satuan'),
            'stok' => $this->input->post('stok'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_beli' => $this->input->post('harga_beli'),
            'harga_jual' => $this->input->post('harga_jual'),
            'tanggal_datang' => $this->input->post('tanggal_datang'),
            'gambar' => $this->input->post('foto')
        );

        $this->db->where('id_po', $this->input->post('id_po'));
        $this->db->update("dm_po", $data);
    }

    public function delete()
    {

        $this->db->where('id_po', $this->input->post('id_po'));
        $this->db->delete("dm_po");
    }
}
