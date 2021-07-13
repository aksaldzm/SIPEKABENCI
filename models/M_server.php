<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_server extends CI_Model
{
    var $table = 'potensi';
    var $column_order = ['id_potensi', 'nama_desa', 'nama_kecamatan', 'nama_bencana', 'resiko'];
    var $order = ['id_potensi', 'nama_desa', 'nama_kecamatan', 'nama_bencana', 'resiko'];

    private function _get_data_query()
    {
        $this->db->from($this->table);
        if (isset($_POST['search']['value'])) {
            $this->db->like('id_potensi', $_POST['search']['value']);
            $this->db->or_like('nama_desa', $_POST['search']['value']);
            $this->db->or_like('nama_kecamatan', $_POST['search']['value']);
            $this->db->or_like('nama_bencana', $_POST['search']['value']);
            $this->db->or_like('resiko', $_POST['search']['value']);
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('id_potensi', 'asc');
        }
    }

    public function getDataTable()
    {
        $this->_get_data_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered_data()
    {
        $this->_get_data_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all_data()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
}

/* End of file M_server.php */
