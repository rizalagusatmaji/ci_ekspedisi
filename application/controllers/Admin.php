<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function kurir()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kurir'] = $this->m_admin->get_data_kurir();
        if ($this->input->post('keyword')) {
            $data['kurir'] = $this->m_admin->cariDataKurir();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/kurir', $data);
        $this->load->view('templates/footer', $data);
    }

    public function pengiriman()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengiriman'] = $this->m_admin->get_data_pengiriman();
        if ($this->input->post('keyword')) {
            $data['pengiriman'] = $this->m_admin->cariDataPengiriman();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pengiriman', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tarif()
    {
        $data['title'] = 'Admin Page';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['tarif'] = $this->m_admin->get_data_tarif();
        if ($this->input->post('keyword')) {
            $data['tarif'] = $this->m_admin->cariDataTarif();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tarif', $data);
        $this->load->view('templates/footer', $data);
    }

    //kurir
    public function tambah_kurir()
    {
        $this->m_admin->tambah_kurir();
        redirect('admin/kurir');
    }

    public function tampil_kurir($id = '')
    {
        $data_tampil = $this->m_admin->tampil_kurir($id);
        echo json_encode($data_tampil);
    }

    public function ubah_kurir()
    {
        $this->m_admin->ubah_kurir();
        redirect('admin/kurir');
    }

    public function hapus_kurir($id)
    {
        $this->m_admin->hapus_kurir($id);
        redirect('admin/kurir');
    }

    //pengiriman
    public function tambah_pengiriman()
    {
        $this->m_admin->tambah_pengiriman();
        redirect('admin/pengiriman');
    }

    public function tampil_pengiriman($id = '')
    {
        $data_tampil = $this->m_admin->tampil_pengiriman($id);
        echo json_encode($data_tampil);
    }

    public function ubah_pengiriman()
    {
        $this->m_admin->ubah_pengiriman();
        redirect('admin/pengiriman');
    }

    public function hapus_pengiriman($id)
    {
        $this->m_admin->hapus_pengiriman($id);
        redirect('admin/pengiriman');
    }

    //tarif
    public function tambah_tarif()
    {
        $this->m_admin->tambah_tarif();
        redirect('admin/tarif');
    }

    public function tampil_tarif($id = '')
    {
        $data_tampil = $this->m_admin->tampil_tarif($id);
        echo json_encode($data_tampil);
    }

    public function ubah_tarif()
    {
        $this->m_admin->ubah_tarif();
        redirect('admin/tarif');
    }

    public function hapus_tarif($id)
    {
        $this->m_admin->hapus_tarif($id);
        redirect('admin/tarif');
    }
}
