<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends MY_Model
{
    protected $table    = 'product';
    protected $perPage  = 6;

    public function getbyid($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('product')->result();
    }

    public function updt_stock($id, $stock)
    {
        $this->db->set('stock', $stock);
        $this->db->where('id', $id);
        return $this->db->update('product');
    }
}

/* End of file Home_model.php */
