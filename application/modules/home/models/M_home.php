<?php
class M_home extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function getAll($table)
    {
        return $this->db->get($table)->result();
    }

}
