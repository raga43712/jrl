<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function check_data($kode){
        $this->db->select('*');
        $this->db->from('tbbarang');
        $this->db->where('kode', $kode);

        $query = $this->db->get();
        return $query->num_rows();
    }
    public function update_data($kode, $qty_pro){
        $this->db->set('qty_pro', 'qty_pro+'.$qty_pro, false);
        $this->db->where('kode', $kode);
        $this->db->update('tbbarang');
    }// tdiak bisa di pakai array . harus langsung di deskripsikan
    //20 januari 2023
    public function insert_data($data){
        $this->db->insert('tbbarang', $data);
    }
    public function insert_his($data){
        $this->db->insert('history', $data);
    }
    public function insert_history($data){
        $this->db->set('ket', 'T');
        $this->db->insert('history', $data);
    }
    function all2(){
        $this->db->from('tbbarang');
        $this->db->where('desc_pro', 'masuk');
        $query = $this->db->get();
        return $query->result();
    }//NON AKTIF
    function all1(){
        // $this->db->where('jenis', 'masuk');
        $this->db->select('*');
        $this->db->from('tbbarang');
        $this->db->order_by('id_pro DESC');
        //$this->db->where('id_periode', $this->session->userdata('active_periode'));
        $query = $this->db->get();
        return $query->result();
    }//NON AKTIF

    function all(){
        $this->db->select('tbbarang.*, tbbrg.*');
        $this->db->from('tbbarang');
        //$this->db->join('tbstatus', 'tbbarang.id_status = tbstatus.id_status');
        $this->db->join('tbbrg', 'tbbarang.kode_brg = tbbrg.kode_brg');
        $this->db->order_by('id ASC');
        $query = $this->db->get();
        return $query->result();
    }
    function hist(){
        $this->db->select('history.*, tbbrg.*');
        $this->db->from('history');
        //$this->db->join('tbstatus', 'history.id_status = tbstatus.id_status');
        $this->db->join('tbbrg', 'history.kode_brg = tbbrg.kode_brg');
        $this->db->order_by('id ASC');
        $query = $this->db->get();
        return $query->result();
    }
    function brg(){
        $this->db->select('tbbarang.*, tbbrg.*');
        $this->db->from('tbbarang');
        $this->db->join('tbbrg', 'tbbarang.id_brg = tbbrg.id_brg');
        //$this->db->where('id_surat', $nomor);
        $this->db->order_by('id ASC');
        $query = $this->db->get();
        return $query->result();
    }//NONAKTIF 
    function brga()
    {
        $this->db->select('*');
        $this->db->from('tbbrg');
        $this->db->order_by('name_brg ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function nom()
	{
		$this->db->select('ket');
    	$this->db->from('history');
		$this->db->order_by('ket DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
    public function tambah($data){
        $id_brg = $this-input-post('id_brg');
        $grid_pro = $this-input-post('grid_pro');
        $width_pro = $this-input-post('width_pro');
        $length_pro = $this-input-post('length_pro');
        $data['id'] = $id_brg.$grid_pro.$width_pro.$length_pro;
        $this->db->insert('tbbarang', $data);
        //return $this->db->insert_id();
    }//NON AKTIF
    public function tambah2($data){
        $id_brg = $this-input-post('id_brg');
        $grid_pro = $this-input-post('grid_pro');
        $width_pro = $this-input-post('width_pro');
        $length_pro = $this-input-post('length_pro');
        $data['id'] = $id_brg.$grid_pro.$width_pro.$length_pro;
        $this->db->insert('history', $data);
        return $this->db->insert_id();
    }//NON AKTIF

    public function insert_product($data) {
        $kode_barang = $this->input->post('kode_barang');
        $grid_barang = $this->input->post('grid_barang');
        $tinggi_barang = $this->input->post('tinggi_barang');
        $panjang_barang = $this->input->post('panjang_barang');
        $data['id'] = $kode_barang.$grid_barang.$tinggi_barang.$panjang_barang;
        $this->db->insert('produk', $data);
        return $this->db->insert_id();
    }//NON AKTIF

    public function add_quantity($id, $qty_pro) {
        $this->db->set('qty_pro', 'qty_pro+'.$qty_pro, FALSE);
        $this->db->where('id', $id);
        $this->db->update('tbbarang');
    }//NON AKTIF
    public function check_duplicate_add($id) {
        $this->db->select('id');
        $this->db->from('tbbarang');
        $this->db->where('id', $id);
        // $this->db->where('grid_pro', $grid_pro);
        // $this->db->where('width_pro', $width_pro);
        // $this->db->where('length_pro', $length_pro);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row()->id;
        } else {
            return false;
        }
    }//NON AKTIF
    

    // function laporan_keluar(){
    //     $this->db->select('data_kas.*, pokja.*');
    //     $this->db->order_by('pokja.id_pokja ASC');
    //     $this->db->where('jenis', 'keluar');
    //     $this->db->where('id_periode', $this->session->userdata('active_periode'));

    //     $this->db->join('pokja', 'data_kas.id_pokja = pokja.id_pokja', 'LEFT');
    //     $this->db->from('data_kas');
    //     $this->db->group_by('data_kas.id_pokja');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}