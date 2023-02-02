<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries\PHPExcel\Classes\PHPExcel.php';

class ImportC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Export_model', 'export');
        $this->load->model('barang_model', 'brg');//model data
    }

    public function index() {
        $this->load->view('import');
    }

    public function import()
    {
        $file = $_FILES['file']['tmp_name'];
        $this->load->library('PHPexcel');
        $objPHPExcel = PHPExcel_IOFactory::load($file);
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $data = array();

        for ($i = 2; $i <= count($sheetData); $i++) {
            $nama_brg = $sheetData[$i]['B'];
            $this->db->select('kode_brg');
            $this->db->from('kode_barang');
            $this->db->where('nama_brg', $nama_brg);
            $query = $this->db->get();
            $kode_brg = $query->row()->kode_brg;

            $qty = $sheetData[$i]['F'];
            $id_status = $sheetData[$i]['E'];
            $tanggal = $sheetData[$i]['G'];

            $hist = array(
                'kode_brg' => $kode_brg,
                'id_status' => $id_status,
                'qty' => $qty,
                'tanggal' => $tanggal,
            );
            array_push($data, $hist);
        }

        $this->Excel_model->import_data($data);
        redirect('/');
    }
}
