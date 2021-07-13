<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    public function getKecamatan()
    {
        return $this->db->get('tb_kecamatan')->result_array();
    }

    public function tambahKecamatan()
    {
        $data         = [
            'id_kecamatan'      => $this->input->post('id_kecamatan'),
            'nama_kecamatan'    => $this->input->post('kecamatan')
        ];

        $this->db->insert('tb_kecamatan', $data);
    }

    public function editKecamatan()
    {
        $id     = $this->input->post('id');
        $data   = [
            'id_kecamatan'      => $this->input->post('id_kecamatan'),
            'nama_kecamatan'    => $this->input->post('kecamatan')
        ];

        $this->db->where('id_k', $id);
        $this->db->update('tb_kecamatan', $data);
    }

    public function tambahDesa()
    {
        $data         = [
            'id_desa'       => $this->input->post('id_desa'),
            'id_kecamatan'  => $this->input->post('kecamatan'),
            'nama_desa'     => $this->input->post('desa'),
            'latitude'      => $this->input->post('latitude'),
            'longitude'     => $this->input->post('longitude')
        ];

        $this->db->insert('tb_desa', $data);
    }

    public function editDesa()
    {
        $id     = $this->input->post('id');
        $data   = [
            'id_desa'       => $this->input->post('id_desa'),
            'id_kecamatan'  => $this->input->post('kecamatan'),
            'nama_desa'     => $this->input->post('desa'),
            'latitude'      => $this->input->post('latitude'),
            'longitude'     => $this->input->post('longitude')
        ];

        $this->db->where('id_d', $id);
        $this->db->update('tb_desa', $data);
    }

    public function getDesa()
    {
        $this->db->select('*');
        $this->db->from('tb_desa');
        $this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_desa.id_kecamatan');
        return $this->db->get()->result_array();
    }

    public function getTempatevakuasi()
    {
        return $this->db->get('tb_evakuasi')->result();
    }

    public function getTempat()
    {
        return $this->db->get('tb_evakuasi')->result_array();
    }

    public function tambahTempat()
    {
        $data         = [
            'nama_tempat'   => $this->input->post('nama'),
            'alamat'        => $this->input->post('alamat'),
            'latitude'      => $this->input->post('latitude'),
            'longitude'     => $this->input->post('longitude'),
            'no_telp'       => $this->input->post('telp'),
            'luas'          => $this->input->post('luas'),
            'kapasitas'     => $this->input->post('kapasitas'),
            'keterangan'    => $this->input->post('keterangan')
        ];

        $this->db->insert('tb_evakuasi', $data);
    }

    public function editTempat()
    {
        $id     = $this->input->post('id');
        $data   = [
            'nama_tempat'   => $this->input->post('nama'),
            'alamat'        => $this->input->post('alamat'),
            'latitude'      => $this->input->post('latitude'),
            'longitude'     => $this->input->post('longitude'),
            'no_telp'       => $this->input->post('telp'),
            'luas'          => $this->input->post('luas'),
            'kapasitas'     => $this->input->post('kapasitas'),
            'keterangan'    => $this->input->post('keterangan')
        ];

        $this->db->where('id_tempat', $id);
        $this->db->update('tb_evakuasi', $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getGeojson()
    {
        return $this->db->get('tb_geojson')->result_array();
    }

    public function getAllKoorDesa()
    {
        $this->db->select('*');
        $this->db->from('tb_desa');
        $this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_desa.id_kecamatan');
        return $this->db->get()->result();
    }
}

/* End of file M_data.php */
