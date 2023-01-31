<?php defined('BASEPATH') or exit('No direct script access allowed');

class Struktur_model extends CI_Model //ini perintah untuk ngambil data dari database
{
    private $_table = "struktur"; //nama tabel database
    public $struktur_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];
    }

    public function rulesUbah()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $this->db->select("struktur_id,
         nomor,
          name, 
          image,
           (select m_gcm.DESCRIPTION from m_gcm 
           where PARAMETER='GRP_USR' and code = struktur.description ) as description");
        $this->db->order_by("nomor", "asc");
        return $this->db->get($this->_table)->result();
    }

    public function getAllTampil()
    {
        $this->db->limit(4);
        $this->db->order_by("nomor", "asc");
        return $this->db->get($this->_table)->result();
    }

    public function getAllTampil_page()
    {
        $this->db->order_by("nomor", "asc");
        return $this->db->get($this->_table)->result();
    }

    function total_all()
    {
        $this->db->select('nomor');
        $this->db->from('struktur');
        $query = $this->db->get();
        return $query->result();
    }


    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["struktur_id" => $id])->row();
    }

    function nomor()
    {
        $this->db->select('nomor');
        $this->db->order_by('nomor DESC');
        $query = $this->db->get('struktur');
        return $query->result_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $acak = uniqid('PENGURUS', FALSE);
        $data = array(
            'name'            => $post["name"],
            'nomor'            => $post["nomor"],
            'image'            => $this->_uploadImage($acak),
            'description'    => $post["description"]
        );
        return $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $data = array(
            'name'            => $post["name"],
            'nomor'            => $post["nomor"],
            'image'            => $post["image_lama"],
            'description'    => $post["description"]
        );
        //////////////
        return $this->db->update($this->_table, $data, array('struktur_id' => $post['id']));
    }

    public function update_baru()
    {
        $post = $this->input->post();
        $acak = uniqid('PENGURUS', FALSE);
        $this->_deleteImage($post['id']);
        $data = array(
            'name'            => $post["name"],
            'nomor'            => $post["nomor"],
            'image'            => $this->_uploadImage($acak),
            'description'    => $post["description"]
        );
        //////////////
        return $this->db->update($this->_table, $data, array('struktur_id' => $post['id']));
    }

    public function menugcm($param)
    {
        $this->db->select('*');
        $this->db->from('m_gcm');
        $this->db->where('PARAMETER', $param);
        $this->db->where('FLAG_ACTIVE', 'Y');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("struktur_id" => $id));
    }

    private function _uploadImage($acak)
    {
        // $post = $this->input->post();
        $config['upload_path']          = './back_assets/upload/pengurus/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $acak;
        $config['overwrite']            = true;
        $config['max_size']             = 6048; // 2MB saja maksimal

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $slide = $this->getById($id);
        if ($slide->image != "default.jpg") {
            $filename = explode(".", $slide->image)[0];
            return array_map('unlink', glob(FCPATH . "back_assets/upload/pengurus/$filename.*"));
        }
    }

    public function getNamaKetuaRT()
    {
        $this->db->select('name');
        $this->db->from($this->_table);
        $this->db->where('description', 'GM');
        $query = $this->db->get();
        return $query->result();
    }
}
