<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index($page = null)
    {
        $data['title'] = 'Homepage';
        $data['content']    = $this->home->select(
            [
                'product.id', 'product.title AS product_title', 'product.description', 'product.image', 'product.price', 'product.stock',
                'category.title AS category_title', 'category.slug AS category_slug'
            ]
        )
            ->join('category')                  // Query untuk mencari suatu data produk beserta kategorinya
            ->where('product.stock !=', NULL)            // Pilih yang stok tersedia
            ->paginate($page)
            ->get();
        $data['total_rows'] = $this->home->where('product.stock !=', NULL)->count();
        $data['pagination'] = $this->home->makePagination(base_url('home'), 2, $data['total_rows']);


        // $query = $this->db->query("SELECT SUM(qty) as count FROM order_detail GROUP BY YEAR(created_at) ORDER BY created_at");  
        $query = $this->db->query("SELECT orders_confirm.id_orders, SUM(order_detail.qty) as count FROM order_detail RIGHT JOIN orders_confirm ON order_detail.id_orders=orders_confirm.id_orders GROUP BY YEAR(order_detail.created_at) ORDER BY order_detail.created_at");
        $data['baju'] = json_encode(array_column($query->result(), 'count'), JSON_NUMERIC_CHECK);

        $data['page'] = 'pages/home/index';     // Mengarahkan halaman
        $this->view($data);
    }

    public function getbyid($id)
    {
        $data['title'] = 'Detail produk';
        $data['content'] = $this->Home_model->getbyid($id);
        $data['page'] = 'pages/product/detail';

        return $this->view($data);
    }
}

/* End of file Home.php */
