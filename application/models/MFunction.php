<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MFunction extends CI_Model
{

    function fget_IPAddress()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP']; // share internet
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; // pass from proxy
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    function tgl_indo($tgl)
    {
        $tanggal = substr($tgl, 8, 2);
        $bulan = $this->bulan_indo(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);

        return $tanggal . ' ' . $bulan . ' ' . $tahun;
    }

    function jam_indo($tgl)
    {
        $jam = substr($tgl, 11, 5);
        return $jam . ' WIB';
    }

    function bulan_indo($bln)
    {
        switch ($bln) {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }

    function hari_indo($tgl)
    {
        $day = date('D', strtotime($tgl));
        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );
        return $dayList[$day];
    }

    function idr($angka)
    {
        $rupiah = number_format($angka, 0, ',', '.');
        return $rupiah;
    }

    function php_status($id)
    {
        if ($id == 1) {
            $rtn = "Aktif";
        } else if ($id == 0) {
            $rtn = "Non Active";
        } else {
            $rtn = "";
        }

        return $rtn;
    }

    function php_jk($id)
    {
        if ($id == "L") {
            $rtn = "Laki-laki";
        } else if ($id == 0) {
            $rtn = "Perempuan";
        } else {
            $rtn = "";
        }

        return $rtn;
    }

    function php_umur($tanggal_lahir)
    {
        $birthDate = new DateTime($tanggal_lahir);
        $today = new DateTime("today");
        if ($birthDate > $today) {
            exit("0 tahun 0 bulan 0 hari");
        }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;

        //return $y." Thn ".$m." Bln ".$d." hari";
        return $y . " Tahun ";
    }

    public function jenisrujukan()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('rujukan_jenis_id, rujukan_jenis_name, status');
        $this->db->from("dm_rujukan_jenis");
        $this->db->where("status", 1);
        $this->db->order_by("rujukan_jenis_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function satdos()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('dosis_id, dosis_name, status');
        $this->db->from("dm_dosis");
        $this->db->where("status", 1);
        $this->db->order_by("dosis_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function kategori()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('jenis_obat_id, jenis_obat_name, status');
        $this->db->from("dm_jenis_obat");
        $this->db->where("status", 1);
        $this->db->order_by("jenis_obat_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function poli()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('poliklinik_id, poliklinik_name, poliklinik_ket, status');
        $this->db->from("dm_poliklinik");
        $this->db->where("status", 1);
        $this->db->order_by("poliklinik_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function dokter()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('id_dokter, nama_dokter, status');
        $this->db->from("dm_dokter");
        $this->db->where("status", 1);
        $this->db->order_by("nama_dokter", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function satuan()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('satuan_id, satuan_name, status');
        $this->db->from("dm_satuan");
        $this->db->where("status", 1);
        $this->db->order_by("satuan_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function pekerjaan()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('pekerjaan_id, pekerjaan_name, status');
        $this->db->from("dm_pekerjaan");
        $this->db->where("status", 1);
        $this->db->order_by("pekerjaan_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function agama()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('agama_id, agama_name, status');
        $this->db->from("dm_agama");
        $this->db->where("status", 1);
        $this->db->order_by("agama_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function pendidikan()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('pendidikan_id, pendidikan_name, status');
        $this->db->from("dm_pendidikan");
        $this->db->where("status", 1);
        $this->db->order_by("pendidikan_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function perkawinan()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('perkawinan_id, perkawinan_name, status');
        $this->db->from("dm_perkawinan");
        $this->db->where("status", 1);
        $this->db->order_by("perkawinan_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    function genCode($first, $char)
    { //kode awal, field kode, nama table dan panjang kode
        $query = $this->db->query("SELECT MAX(RIGHT(pasien_id,3)) as maxID FROM dm_pasien 
                                    WHERE date(date_add) = date(NOW()) ");
        $row = $query->row();

        $genKode =  $row->maxID;
        $getCode = (int) $genKode;
        $getCode++;

        $theCode = $first . $char . sprintf("%03s", $getCode);
        return $theCode;
    }

    public function prov()
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('prov_id, prov_name, status');
        $this->db->from("dm_prov");
        $this->db->where("status", 1);
        $this->db->order_by("prov_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function kab($id)
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('kab_id, kab_name, status');
        $this->db->from("dm_kab");
        $this->db->where("status", 1);
        $this->db->where("prov_id", $id);
        $this->db->order_by("kab_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }

    public function kec($id)
    {
        date_default_timezone_set('Asia/Jakarta');

        $this->db->select('kec_id, kec_name, status');
        $this->db->from("dm_kec");
        $this->db->where("status", 1);
        $this->db->where("kab_id", $id);
        $this->db->order_by("kec_name", 'ASC');

        $finalResponse =  $this->db->get_where()->result();
        return $finalResponse;
    }
    public function tr_status($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->select('status');
        $this->db->from('dm_status_transaksi');
        $this->db->where('id_status', $id);
        $finalResponse =  $this->db->get_where()->row()->status;
        return $finalResponse;
    }
}
