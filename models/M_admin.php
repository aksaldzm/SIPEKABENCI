<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
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




    public function kodeOtomatismj($kode)
    {
        $lol = $kode['kode'];
        $query = $this->db->query("SELECT MAX(id_laporan) as id_lap from tb_laporan where id_laporan like '%$lol%' ");
        $hasil = $query->row();
        return $hasil->id_lap;
    }
    public function getRumah($kode)
    {
        $lol = $kode['kode'];
        return $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam, l.tanggal_kejadian FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` WHERE l.`id_laporan` LIKE '%$lol%'")->result_array();
        //$query = $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` where l.'id_laporan' like '%$lol%'");
        //$hasil = $query->row();

    }
    public function getFasilitasU($kode)
    {
        $lol = $kode['kode'];
        return $this->db->query("SELECT f.id_lapfa, l.id_laporan, u.nama_user, f.gedung, f.sekolah, f.rumah_makan, f.masjid, f.tanggul_sungai, f.puskesmas, f.jembatan, f.jalan_nas, f.jalan_kab, f.turab_jalan, f.bendungan, f.jalan_des, l.tanggal_kejadian FROM tb_fasilitasu f JOIN tb_laporan l ON f.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` WHERE l.`id_laporan` LIKE '%$lol%'")->result_array();
        //$query = $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` where l.'id_laporan' like '%$lol%'");
        //$hasil = $query->row();

    }
    public function getLainnya($kode)
    {
        $lol = $kode['kode'];
        return $this->db->query("SELECT a.id_lapla, l.id_laporan, u.nama_user, a.saluran_irigasi, a.tebing, a.sawah, a.perkebunan, a.tambak, a.talud, a.pasar, a.pergerakan_tnh, a.pengungsi_jiwa, a.pengungsi_kk, l.tanggal_kejadian FROM tb_lainya a JOIN tb_laporan l ON a.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` WHERE l.`id_laporan` LIKE '%$lol%'")->result_array();
        //$query = $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` where l.'id_laporan' like '%$lol%'");
        //$hasil = $query->row();

    }

    public function getAll($kode)
    {
        $lol = $kode['kode'];
        return $this->db->query("SELECT * FROM tb_laporan l JOIN tb_bencana b ON l.id_bencana = b.id_bencana JOIN  tb_rumah r ON l.`id_laporan` = r.`id_laporan` JOIN tb_fasilitasu f ON l.`id_laporan` = f.id_laporan JOIN tb_korban k ON l.`id_laporan` = k.`id_laporan` JOIN tb_lainya i ON l.`id_laporan` = i.`id_laporan` WHERE l.`id_laporan` LIKE '%$lol%'")->result_array();
    }

    public function editRmh($rumah)
    {

        $this->db->where('id_lapru', $this->input->post('id_lapru'));
        $this->db->update('tb_rumah', $rumah);
    }

    public function getPie()
    {
        return $this->db->get('pie')->result_array();
    }

    public function getJml_rumah($kode)
    {
        $id = $kode['kode'];
        $this->db->like('id_laporan', $id);
        $this->db->from('tb_rumah');
        return $this->db->count_all_results();
    }
    public function getJml_fasilitas($kode)
    {
        $id = $kode['kode'];
        $this->db->like('id_laporan', $id);
        $this->db->from('tb_fasilitasu');
        return $this->db->count_all_results();
    }
    public function getJml_lainnya($kode)
    {
        $id = $kode['kode'];
        $this->db->like('id_laporan', $id);
        $this->db->from('tb_lainya');
        return $this->db->count_all_results();
    }
    public function getJml_bnc()
    {

        $this->db->select('*');
        $this->db->from('tb_bencana');
        return $this->db->count_all_results();
    }
}

/* End of file M_admin.php */
