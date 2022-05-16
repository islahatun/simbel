<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class LaporanBarang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MMasterBarang');
    }

    public function index()
    {
        $data['title'] = 'Laporan Barang';
        $data['subtitle'] = 'Data Laporan Barang';

        $data['content_overview'] = $this->load->view('laporanBarang', $data, true);
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
                'harga_beli'                 => $po->harga_beli,
                'harga_jual'                 => $po->harga_jual,
                'tanggal_datang'                 => $po->tanggal_datang,
                'gambar'                 => $po->gambar,
            );
            $i++;
        }

        echo json_encode($rtn);
    }
    public function export()
    {
        // Load plugin PHPExcel nya
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = [
            'font' => ['bold' => true], // Set font nya jadi bold
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ],
            'borders' => [
                'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
                'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
                'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
                'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
            ]
        ];
        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = [
            'alignment' => [
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ],
            'borders' => [
                'top' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border top dengan garis tipis
                'right' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN],  // Set border right dengan garis tipis
                'bottom' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN], // Set border bottom dengan garis tipis
                'left' => ['borderStyle'  => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN] // Set border left dengan garis tipis
            ]
        ];
        $sheet->setCellValue('A1', "DATA BARANG"); // Set kolom A1 dengan tulisan "DATA BARANG"
        $sheet->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
        $sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1
        // Buat header tabel nya pada baris ke 3
        $sheet->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $sheet->setCellValue('B3', "ID BARANG"); // Set kolom B3 dengan tulisan "NIS"
        $sheet->setCellValue('C3', "NAMA BARANG"); // Set kolom C3 dengan tulisan "NAMA"
        $sheet->setCellValue('D3', "ID KATEGORI"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $sheet->setCellValue('E3', "SATUAN"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('F3', "STOK"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('G3', "HARGA BELI"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('H3', "HARGA JUAL"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('I3', "DESKRIPSI"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('J3', "GAMBAR"); // Set kolom E3 dengan tulisan "ALAMAT"
        // $sheet->setCellValue('K3', "SATUAN"); // Set kolom E3 dengan tulisan "ALAMAT"
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $sheet->getStyle('A3')->applyFromArray($style_col);
        $sheet->getStyle('B3')->applyFromArray($style_col);
        $sheet->getStyle('C3')->applyFromArray($style_col);
        $sheet->getStyle('D3')->applyFromArray($style_col);
        $sheet->getStyle('E3')->applyFromArray($style_col);
        $sheet->getStyle('F3')->applyFromArray($style_col);
        $sheet->getStyle('G3')->applyFromArray($style_col);
        $sheet->getStyle('H3')->applyFromArray($style_col);
        $sheet->getStyle('I3')->applyFromArray($style_col);
        $sheet->getStyle('J3')->applyFromArray($style_col);
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $list = $this->MMasterBarang->datalist();
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach ($list as $data) { // Lakukan looping pada variabel siswa
            $sheet->setCellValue('A' . $numrow, $data->id_po);
            $sheet->setCellValue('B' . $numrow, $data->id_po);
            $sheet->setCellValue('C' . $numrow, $data->nama_barang);
            $sheet->setCellValue('D' . $numrow, $data->id_kategori);
            $sheet->setCellValue('E' . $numrow, $data->satuan);
            $sheet->setCellValue('F' . $numrow, $data->stok);
            $sheet->setCellValue('G' . $numrow, $data->harga_beli);
            $sheet->setCellValue('H' . $numrow, $data->harga_jual);
            $sheet->setCellValue('I' . $numrow, $data->deskripsi);
            $sheet->setCellValue('J' . $numrow, $data->gambar);
            // $sheet->setCellValue('K' . $numrow, $data->alamat);

            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $sheet->getStyle('A' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('B' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('C' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('D' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('E' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('F' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('G' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('H' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('I' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('J' . $numrow)->applyFromArray($style_row);
            // $sheet->getStyle('K' . $numrow)->applyFromArray($style_row);


            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }
        // Set width kolom
        $sheet->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $sheet->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $sheet->getColumnDimension('C')->setWidth(25); // Set width kolom C
        $sheet->getColumnDimension('D')->setWidth(15); // Set width kolom D
        $sheet->getColumnDimension('E')->setWidth(15); // Set width kolom E
        $sheet->getColumnDimension('F')->setWidth(15); // Set width kolom F
        $sheet->getColumnDimension('G')->setWidth(25); // Set width kolom G
        $sheet->getColumnDimension('H')->setWidth(25); // Set width kolom H
        $sheet->getColumnDimension('I')->setWidth(30); // Set width kolom I
        $sheet->getColumnDimension('J')->setWidth(30); // Set width kolom J
        // $sheet->getColumnDimension('K')->setWidth(30); // Set width kolom K


        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $sheet->setTitle("Laporan Data Barang");
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Barang.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
