<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Chart_model');
    }

    public function index($page = null)
    {
        foreach ($this->Home_model->laporan()->result_array() as $row) {
            $data['grafik'][] = (float)$row['Januari'];
            $data['grafik'][] = (float)$row['Februari'];
            $data['grafik'][] = (float)$row['Maret'];
            $data['grafik'][] = (float)$row['April'];
            $data['grafik'][] = (float)$row['Mei'];
            $data['grafik'][] = (float)$row['Juni'];
            $data['grafik'][] = (float)$row['Juli'];
            $data['grafik'][] = (float)$row['Agustus'];
            $data['grafik'][] = (float)$row['September'];
            $data['grafik'][] = (float)$row['Oktober'];
            $data['grafik'][] = (float)$row['November'];
            $data['grafik'][] = (float)$row['Desember'];
        }
        $data['title']      = 'Homepage';
        $data['page'] = 'pages/home/index';  // Mengarahkan halaman

        $this->view($data);
    }
}
/* End of file Home.php */
