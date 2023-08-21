<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends MY_Model
{
    public function laporan()
    {
        $gr = $this->db->query("
    
        select
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=01)AND (YEAR(date)=2023))),0) AS `Januari`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=02)AND (YEAR(date)=2023))),0) AS `Februari`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=03)AND (YEAR(date)=2023))),0) AS `Maret`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=04)AND (YEAR(date)=2023))),0) AS `April`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=05)AND (YEAR(date)=2023))),0) AS `Mei`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=06)AND (YEAR(date)=2023))),0) AS `Juni`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=07)AND (YEAR(date)=2023))),0) AS `Juli`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=08)AND (YEAR(date)=2023))),0) AS `Agustus`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=09)AND (YEAR(date)=2023))),0) AS `September`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=10)AND (YEAR(date)=2023))),0) AS `Oktober`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=11)AND (YEAR(date)=2023))),0) AS `November`,
        ifnull((SELECT sum(total) FROM (orders)WHERE((Month(date)=12)AND (YEAR(date)=2023))),0) AS `Desember`
        from orders GROUP BY YEAR(date) ");

        return $gr;
    }
}
