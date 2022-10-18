<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Customer Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_customer', $data);
        $this->load->view('templates/topbar_customer', $data);
        $this->load->view('customer/resi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function resi()
    {
        $data['title'] = 'Customer Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_customer', $data);
        $this->load->view('templates/topbar_customer', $data);
        $this->load->view('customer/resi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tarif()
    {
        $data['title'] = 'Customer Page';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_customer', $data);
        $this->load->view('templates/topbar_customer', $data);
        $this->load->view('customer/tarif', $data);
        $this->load->view('templates/footer', $data);
    }
}
