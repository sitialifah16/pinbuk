<?php

// TODO
// 1.  ubah semua style query ke satu model
// 2.  ubah semua inline string ke string format << for query handling at unix style
class M_userpage extends CI_Model
{

    function get_workshop()
    {
        $query = $this->db->query("select * from workshop");
        return $query->result();
    }

    function getIdByEmail($email)
    {
        $query = $this->db->query("select id from user where email='$email'");
        return $query->row()->id;
    }

    function check_db_a($table, $column, $value)
    {
        $query = $this->db->get_where($table, array($column => $value));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    } 

    function check_db($table, $column, $value, $column1, $value1)
    {
        $query = $this->db->query("select * from $table where $column ='$value' AND $column1 IN ($value1)");
        // $query = $this->db->get_where($table, array($column => $value, $targetcol => $target));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function insert_data($table, $data)
    {
        if (!$this->db->insert($table, $data)) {
            return "failed";
        }
    }

    function getUserWorkshop($id){
        $query = $this->db->query("select a.nama, DATE_FORMAT(a.date_mulai, '%e %M %Y') AS date_mulai, DATE_FORMAT(a.date_selesai, '%e %M %Y') AS date_selesai, DATE_FORMAT(a.jam_mulai, '%h %p') AS jam_mulai, b.status from workshop a, daftar_workshop b where a.id_workshop = b.id_workshop AND b.id_user = '$id'");
        return $query->result();
    }
}
