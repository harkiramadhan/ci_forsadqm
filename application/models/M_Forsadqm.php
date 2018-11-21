<?php
class M_Forsadqm extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function alumni(){
        return $this->db->get('t_alumni');
        return $query->result();
    }
    function konsulat(){
        return $this->db->get('t_konsulat');
        return $query->result();
    }
    function angkatan(){
        return $this->db->get('t_angkatan');
        return $query->result();
    }
}
?>