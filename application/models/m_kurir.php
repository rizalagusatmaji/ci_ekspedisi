<?php

class M_kurir extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
}
