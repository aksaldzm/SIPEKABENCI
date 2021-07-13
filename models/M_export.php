<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_export extends CI_Model
{

    public function getLogbook()
    {
        $this->db->select('*');
        $this->db->from('tb_logbook');

        return $this->db->get();
    }
}

/* End of file ModelName.php */
