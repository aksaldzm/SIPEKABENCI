<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Petugas extends CI_Model
{

    public function getKecamatan()
    {
        return $this->db->get('tb_kecamatan')->result_array();
    }

    public function getBencana()
    {
        return $this->db->get('tb_bencana')->result_array();
    }

    public function getDesa($id)
    {
        $this->db->where('id_kecamatan', $id);
        return $this->db->get('tb_desa')->result_array();
    }

    public function getDesa_all()
    {
        $this->db->select('*');
        $this->db->from('tb_desa');
        return $this->db->count_all_results();
    }
    public function getKec_all()
    {
        $query = $this->db->get('tb_kecamatan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function getUpt()
    {
        //return $this->db->get('tb_upt');
        $query = $this->db->get('tb_upt');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }



    public function getJml_bnc()
    {

        $this->db->select('*');
        $this->db->from('tb_bencana');
        return $this->db->count_all_results();
    }


    public function getPie()
    {
        return $this->db->get('pie')->result_array();
    }

    public function getLogbook($id_logbook)
    {
        $this->db->where('id_logbook', $id_logbook);
        $this->db->select('*');
        $this->db->from('tb_logbook');
        return $this->db->get();
    }
}

/* End of file Petugas.php */
