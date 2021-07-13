<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_superadmin extends CI_Model
{
    public function getAkun()
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->join('tb_level', 'tb_user.level_id = tb_level.id_level');
        $this->db->join('tb_upt', 'tb_user.upt = tb_upt.id_upt');
        return $this->db->get()->result_array();
    }

    public function getLevel()
    {
        return $this->db->get('tb_level')->result_array();
    }

    public function getUpt()
    {
        return $this->db->get('tb_upt')->result_array();
    }

    public function editAkun($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapusAkun($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getKecamatan()
    {
        return $this->db->get('tb_kecamatan')->result_array();
    }

    public function getDesa()
    {
        $this->db->select('*');
        $this->db->from('tb_desa');
        $this->db->join('tb_kecamatan', 'tb_desa.id_desa = tb_kecamatan.desa_id');
        return $this->db->get()->result_array();
    }
    public function getLaporan()
    {
        return $this->db->query("SELECT * FROM tb_laporan l JOIN tb_bencana b ON l.id_bencana = b.id_bencana JOIN  tb_rumah r ON l.`id_laporan` = r.`id_laporan` JOIN tb_fasilitasu f ON l.`id_laporan` = f.id_laporan JOIN tb_korban k ON l.`id_laporan` = k.`id_laporan` JOIN tb_lainya i ON l.`id_laporan` = i.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` JOIN tb_kecamatan n ON l.`id_kecamatan` = n.`id_kecamatan` JOIN tb_desa d ON l.`id_desa` = d.`id_desa`")->result_array();
    }
    public function getRumah($id_laporan)
    {

        return $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam, l.tanggal_kejadian FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` WHERE l.`id_laporan` like '%$id_laporan%'")->result_array();
        //$query = $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` where l.'id_laporan' like '%$lol%'");
        //$hasil = $query->row();

    }
    public function getFasU($id_laporan)
    {

        return $this->db->query("SELECT f.id_lapfa, l.id_laporan, u.nama_user, f.gedung, f.sekolah, f.rumah_makan, f.masjid, f.tanggul_sungai, f.puskesmas, f.jembatan, f.jalan_nas, f.jalan_kab, f.turab_jalan, f.bendungan, f.jalan_des, l.tanggal_kejadian FROM tb_fasilitasu f JOIN tb_laporan l ON f.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` WHERE l.`id_laporan` LIKE '%$id_laporan%'")->result_array();
        //$query = $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` where l.'id_laporan' like '%$lol%'");
        //$hasil = $query->row();

    }
    public function getLainnya($id_laporan)
    {

        return $this->db->query("SELECT a.id_lapla, l.id_laporan, u.nama_user, a.saluran_irigasi, a.tebing, a.sawah, a.perkebunan, a.tambak, a.talud, a.pasar, a.pergerakan_tnh, a.pengungsi_jiwa, a.pengungsi_kk, l.tanggal_kejadian FROM tb_lainya a JOIN tb_laporan l ON a.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` WHERE l.`id_laporan` LIKE '%$id_laporan%'")->result_array();
        //$query = $this->db->query("SELECT r.id_lapru, l.id_laporan, u.nama_user, r.roboh, r.rusak_ber, r.rusak_sed, r.rusak_ring, r.terendam, r.terancam FROM tb_rumah r JOIN tb_laporan l ON r.`id_laporan` = l.`id_laporan` JOIN tb_user u ON l.`id_user` = u.`id_user` where l.'id_laporan' like '%$lol%'");
        //$hasil = $query->row();

    }

    public function getJml_rumah()
    {

        $this->db->select('id_laporan');
        $this->db->from('tb_rumah');
        return $this->db->count_all_results();
    }
    public function getJml_fasilitas()
    {
        $this->db->select('id_laporan');
        $this->db->from('tb_fasilitasu');
        return $this->db->count_all_results();
    }
    public function getJml_lainnya()
    {
        $this->db->select('id_laporan');
        $this->db->from('tb_lainya');
        return $this->db->count_all_results();
    }
    public function getJml_bnc()
    {

        $this->db->select('*');
        $this->db->from('tb_bencana');
        return $this->db->count_all_results();
    }
    public function getJml_laporan()
    {
        $this->db->select('id_laporan');
        $this->db->from('tb_laporan');
        return $this->db->count_all_results();
    }

    public function getRmh_rsk()
    {
        //$this->db->query("SELECT roboh, rusak_ber, rusak_sed, rusak_ring, terendam, terancam FROM tb_rumah");
        //return $this->db->count_all_results();
        $query = $this->db->query("SELECT SUM(rusak_sed + roboh + rusak_ber + rusak_ring + terendam + terancam) as jml FROM tb_rumah")->result();

        $euy = $query[0]->jml;

        return $euy;
    }
    public function getFas_rsk()
    {
        //$this->db->query("SELECT roboh, rusak_ber, rusak_sed, rusak_ring, terendam, terancam FROM tb_rumah");
        //return $this->db->count_all_results();
        $query = $this->db->query("SELECT SUM(gedung + sekolah + rumah_makan + masjid + tanggul_sungai + puskesmas + jembatan + jalan_nas + jalan_kab + turab_jalan + bendungan + jalan_des) AS fas FROM tb_fasilitasu")->result();

        $euy = $query[0]->fas;

        return $euy;
    }
    public function getLan_rsk()
    {
        //$this->db->query("SELECT roboh, rusak_ber, rusak_sed, rusak_ring, terendam, terancam FROM tb_rumah");
        //return $this->db->count_all_results();
        $query = $this->db->query("SELECT SUM(saluran_irigasi + tebing + sawah + perkebunan + tambak + talud + pasar + pergerakan_tnh + pengungsi_jiwa + pengungsi_kk) AS oth FROM tb_lainya")->result();

        $euy = $query[0]->oth;

        return $euy;
    }

    public function getLogbook()
    {
        $this->db->select('*');
        $this->db->from('tb_logbook');

        return $this->db->get();
    }
}

/* End of file M_superadmin.php */
