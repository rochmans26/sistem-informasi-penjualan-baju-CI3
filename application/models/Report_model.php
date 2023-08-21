<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends MY_Model
{
    public function get()
    {
        $this->db->select('*');
        $this->db->from('order_detail');
        $this->db->join('orders','order_detail.id_orders = orders.id');      
        $this->db->join('product','order_detail.id_product = product.id');
        $query = $this->db->get();
        return $query;
    }
}