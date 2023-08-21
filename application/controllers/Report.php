<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Report extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');

        $role = $this->session->userdata('role');

        if ($role != 'admin') {
            redirect(base_url('/'));
            return;
        }
    }

    public function index()
    {
        $data['title']      = 'Admin: Laporan Pendapatan';
        $data['content']    = $this->Report_model->get()->result();
        $data['page']       = 'pages/report/index';

        $this->view($data);
    }
}
