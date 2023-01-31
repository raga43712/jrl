<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries\PHPExcel\Classes\PHPExcel.php';

class Export extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Export_model', 'export');
        $this->load->model('barang_model', 'brg');//model data
    }

    public function index() {
        //$data 	= $this->brg->hist();
        $data['title'] = 'Export Data to Excel';
        $data   = $this->export->get_data();
        $this->load->view('export_excel', $data);
    }

    public function export_data() {
        $this->load->library('PHPexcel');

        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);

        $table_columns = array("No", "Tanggal", "Nama Barang", "Grid", "Tinggi", "Panjang","Qty","Keterangan");

        $column = 0;

        foreach($table_columns as $field) {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
            $column++;
        }

        $data = $this->export->get_data();

        $excel_row = 2;

        foreach($data as $row) {
            $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->id);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->tgl_pro);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->name_brg);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->grid_pro);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->width_pro);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->length_pro);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->qty_pro);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->desc_pro);
            $excel_row++;
        }

        $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Data.xls"');
        $object_writer->save('php://output');
    }

}
