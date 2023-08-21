<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Shop_model extends MY_Model
{
    protected $table    = 'product';
    protected $perPage  = 6;

    public function getbyid($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('product')->result();
    }
}

/* End of file Shop_model.php */
