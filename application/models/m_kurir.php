<?php

class M_kurir extends CI_Model
{
    public function get_data_pengiriman()
    {
        return $this->db->get('pengiriman')->result();
    }

    public function tampil_pengiriman($id)
    {
        return $this->db->where('id', $id)->get('pengiriman')->row();
    }

    public function ubah_pengiriman()
    {
        $ubah = array(
            'status' => $this->input->post('status')
        );
        return $this->db->where('id', $this->input->post('id'))->update('pengiriman', $ubah);
    }

    public function cariDataPengiriman()
    {

        $keyword = $this->input->post('keyword', true);
        $this->db->like('resi', $keyword);
        $this->db->or_like('nama_pengirim', $keyword);
        return $this->db->get('pengiriman')->result();
    }
}
