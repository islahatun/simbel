<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class LaporanPemesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MFunction');
        $this->load->model('MListPesanan');
        $this->load->library('Pdf');
    }

    public function index()
    {
        $data['title'] = 'Laporan Pemesanan';
        $data['subtitle'] = 'Data Laporan Pemesanan';

        $data['content_overview'] = $this->load->view('LaporanPemesanan', $data, true);
        $this->load->view('overview', $data);
    }

    public function datalist()
    {
        $list = $this->MListPesanan->datalist();

        $rtn = array();
        $i = 1;

        foreach ($list as $ao) {

            $rtn[] = array(
                'nomor'               => $i,
                'nama'         => $ao->nama,
                'nama_barang'    => $ao->nama_barang,
                'harga_barang'    => $ao->harga_barang,
                'jumlah_beli'    => $ao->jumlah_beli,
                'total_pembelian'    => $ao->total_pembelian,
                'tanggal_pemesanan'    => $ao->tanggal_pemesanan,
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
        $sheet->setCellValue('A1', "DATA PEMESANAN"); // Set kolom A1 dengan tulisan "DATA BARANG"
        $sheet->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
        $sheet->getStyle('A1')->getFont()->setBold(true); // Set bold kolom A1
        // Buat header tabel nya pada baris ke 3
        $sheet->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
        $sheet->setCellValue('B3', "TANGGAL PEMESANAN"); // Set kolom B3 dengan tulisan "NIS"
        $sheet->setCellValue('C3', "NAMA PELANGGAN"); // Set kolom C3 dengan tulisan "NAMA"
        $sheet->setCellValue('D3', "NAMA BARANG"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
        $sheet->setCellValue('E3', "HARGA BARANG"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('F3', "JUMLAH PEMBELIAN"); // Set kolom E3 dengan tulisan "ALAMAT"
        $sheet->setCellValue('G3', "HARGA TOTAL PEMBELIAN"); // Set kolom E3 dengan tulisan "ALAMAT"
        // $sheet->setCellValue('K3', "SATUAN"); // Set kolom E3 dengan tulisan "ALAMAT"
        // Apply style header yang telah kita buat tadi ke masing-masing kolom header
        $sheet->getStyle('A3')->applyFromArray($style_col);
        $sheet->getStyle('B3')->applyFromArray($style_col);
        $sheet->getStyle('C3')->applyFromArray($style_col);
        $sheet->getStyle('D3')->applyFromArray($style_col);
        $sheet->getStyle('E3')->applyFromArray($style_col);
        $sheet->getStyle('F3')->applyFromArray($style_col);
        $sheet->getStyle('G3')->applyFromArray($style_col);
        // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
        $list = $this->MListPesanan->datalist();
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
        foreach ($list as $data) { // Lakukan looping pada variabel siswa
            $sheet->setCellValue('A' . $numrow, $data->id);
            $sheet->setCellValue('B' . $numrow, $data->tanggal_pemesanan);
            $sheet->setCellValue('C' . $numrow, $data->nama);
            $sheet->setCellValue('D' . $numrow, $data->nama_barang);
            $sheet->setCellValue('E' . $numrow, $data->harga_barang);
            $sheet->setCellValue('F' . $numrow, $data->jumlah_beli);
            $sheet->setCellValue('G' . $numrow, $data->total_pembelian);
            // $sheet->setCellValue('K' . $numrow, $data->alamat);

            // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
            $sheet->getStyle('A' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('B' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('C' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('D' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('E' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('F' . $numrow)->applyFromArray($style_row);
            $sheet->getStyle('G' . $numrow)->applyFromArray($style_row);
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



        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $sheet->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $sheet->setTitle("Laporan Data Pemesanan");
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Pemesanan.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
    // public function pdf()
    // {

    //     // title dari pdf
    //     $sata['title_pdf'] = 'Laporan Data Pelanggan';
    //     // get data
    //     $data['list'] = $this->MListPesanan->datalist();
    //     // filename dari pdf ketika didownload
    //     $file_pdf = 'laporan_data_pelanggan';
    //     // setting paper
    //     $paper = 'A4';
    //     //orientasi paper potrait / landscape
    //     $orientation = "landscape";

    //     $html = $this->load->view('laporan/LaporanPemesanan', $data, true);

    //     // run dompdf
    //     $this->pdf->generate($html, $file_pdf, $paper, $orientation);
    // }
    public function pdf(){

        $data['list'] = $this->MListPesanan->datalist();
        // $this->pdf->setPaper('A4', 'landscape');
    // $this->pdf->filename = "Laporan-Daftar-Pemesanan.pdf";
    $this->load->view('laporan/LaporanPemesanan', $data);
    }
}
