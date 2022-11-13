<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kurir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kurir');
    }

    public function index()
    {
        $data['title'] = 'Kurir Page';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengiriman'] = $this->m_kurir->get_data_pengiriman();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kurir/pengiriman', $data);
        $this->load->view('templates/footer', $data);
    }

    public function pengiriman()
    {
        $data['title'] = 'Kurir Page';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengiriman'] = $this->m_kurir->get_data_pengiriman();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kurir/pengiriman', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tampil_pengiriman($id = '')
    {
        $data_tampil = $this->m_kurir->tampil_pengiriman($id);
        echo json_encode($data_tampil);
    }

    public function ubah_pengiriman()
    {
        $this->m_kurir->ubah_pengiriman();
        redirect('kurir/pengiriman');
    }
}
