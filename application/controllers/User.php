<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index() {

        $data['title'] = 'Appkkemas - User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('template/header', $data);
        $this->load->view('User/index', $data);
        $this->load->view('template/footers');

    }

    public function profile() {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('template/header', $data);
        $this->load->view('template/head');
        $this->load->view('User/profile', $data);
        $this->load->view('template/footers');
    }
}