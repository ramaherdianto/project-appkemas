<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {

        $data['title'] = 'Dashboard - Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('Admin/index', $data);
        $this->load->view('template/footers');

    }

    public function profile() {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/head');
        $this->load->view('admin/profile', $data);
        $this->load->view('template/footers');
    }
}