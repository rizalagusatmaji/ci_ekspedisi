<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data['title'] = 'Customer Page';
        if ($this->input->post('keyword')) {
            $data['pengiriman'] = $this->m_admin->cariDataPengiriman();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_customer', $data);
        $this->load->view('templates/topbar_customer', $data);
        $this->load->view('customer/resi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function resi()
    {
        $data['title'] = 'Customer Page';
        if ($this->input->post('keyword')) {
            $data['pengiriman'] = $this->m_admin->cariDataPengiriman();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_customer', $data);
        $this->load->view('templates/topbar_customer', $data);
        $this->load->view('customer/resi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tarif()
    {
        $data['title'] = 'Customer Page';
        $data['tarif'] = $this->m_admin->get_data_tarif();
        if ($this->input->post('keyword')) {
            $data['pengiriman'] = $this->m_admin->cariDataTarif();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_customer', $data);
        $this->load->view('templates/topbar_customer', $data);
        $this->load->view('customer/tarif', $data);
        $this->load->view('templates/footer', $data);
    }
}
