<?php

class M_admin extends CI_Model
{
    function get_data()
    {
        $this->db->where("role_id", "2");
        $this->db->join('user_role', 'user_role.id=user.role_id');
        return $this->db->get('user')->result();
    }
}
