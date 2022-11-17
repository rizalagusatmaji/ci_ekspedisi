<?php

class M_admin extends CI_Model
{
    //kurir
    function get_data_kurir()
    {
        $this->db->where("role_id", "2");
        $this->db->join('user_role', 'user_role.id=user.role_id');
        return $this->db->get('user')->result();
    }

    public function tambah_kurir()
    {
        $tambah = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id'),
        );
        return $this->db->insert('user', $tambah);
    }

    public function tampil_kurir($id)
    {
        return $this->db->where('id', $id)->get('user')->row();
    }

    public function ubah_kurir()
    {
        $ubah = array(
            'name' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id'),
        );
        return $this->db->where('id', $this->input->post('id'))->update('user', $ubah);
    }

    public function hapus_kurir($id)
    {
        return $this->db->where('id', $id)->delete('user');
    }

    //pengiriman
    function get_data_pengiriman()
    {
        return $this->db->get('pengiriman')->result();
    }

    public function tambah_pengiriman()
    {
        $tambah = array(
            'resi' => $this->input->post('resi'),
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat_asal' => $this->input->post('alamat_asal'),
            'alamat_tujuan' => $this->input->post('alamat_tujuan'),
            'tanggal' => $this->input->post('tanggal'),
            'biaya' => $this->input->post('biaya'),
            'status' => $this->input->post('status')
        );
        return $this->db->insert('pengiriman', $tambah);
    }

    public function tampil_pengiriman($id)
    {
        return $this->db->where('id', $id)->get('pengiriman')->row();
    }

    public function ubah_pengiriman()
    {
        $ubah = array(
            'resi' => $this->input->post('resi'),
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat_asal' => $this->input->post('alamat_asal'),
            'alamat_tujuan' => $this->input->post('alamat_tujuan'),
            'tanggal' => $this->input->post('tanggal'),
            'biaya' => $this->input->post('biaya'),
            'status' => $this->input->post('status')
        );
        return $this->db->where('id', $this->input->post('id'))->update('pengiriman', $ubah);
    }

    public function hapus_pengiriman($id)
    {
        return $this->db->where('id', $id)->delete('pengiriman');
    }

    //tarif
    function get_data_tarif()
    {
        return $this->db->get('tarif')->result();
    }

    public function tambah_tarif()
    {
        $tambah = array(
            'kota_awal' => $this->input->post('kota_awal'),
            'kota_tujuan' => $this->input->post('kota_tujuan'),
            'biaya' => $this->input->post('biaya')
        );
        return $this->db->insert('tarif', $tambah);
    }

    public function tampil_tarif($id)
    {
        return $this->db->where('id', $id)->get('tarif')->row();
    }

    public function ubah_tarif()
    {
        $ubah = array(
            'kota_awal' => $this->input->post('kota_awal'),
            'kota_tujuan' => $this->input->post('kota_tujuan'),
            'biaya' => $this->input->post('biaya')
        );
        return $this->db->where('id', $this->input->post('id'))->update('tarif', $ubah);
    }

    public function hapus_tarif($id)
    {
        return $this->db->where('id', $id)->delete('tarif');
    }

    public function cariDataKurir()
    {
        $this->db->where("role_id", "2");
        $this->db->join('user_role', 'user_role.id=user.role_id');
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('username', $keyword);
        return $this->db->get('user')->result();
    }

    public function cariDataPengiriman()
    {

        $keyword = $this->input->post('keyword', true);
        $this->db->where("resi", $keyword);
        //$this->db->like('resi', $keyword);
        //$this->db->or_like('nama_pengirim', $keyword);
        return $this->db->get('pengiriman')->result();
    }

    public function cariDataTarif()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kota_awal', $keyword);
        $this->db->or_like('kota_tujuan', $keyword);
        return $this->db->get('tarif')->result();
    }
}
