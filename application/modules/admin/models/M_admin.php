<?php
class M_admin extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getregistereduser($id)
    {
        $query = $this->db->query("select id_workshop from daftar_workshop where id_workshop ='$id' AND status = 1");
        return $query->num_rows();
    }

    function getallregistereduser($where)
    {
        $query = $this->db->query("select * from daftar_workshop $where");
        return $query;
    }

    function gettodayregister($date)
    {
        $query = $this->db->query("select  DATE_FORMAT(time_register, '%Y-%m-%d') AS time_register from daftar_workshop where DATE_FORMAT(time_register, '%Y-%m-%d') ='$date'");
        return $query;
    }

    function getAllUserWorkshop()
    {
        $query = $this->db->query("select a.nama as namauser, a.email, b.nama as namaworkshop, c.id_daftar, c.no_hp, c.alamat, c.bukti_pembayaran, DATE_FORMAT(c.time_register, '%e/%m/%Y') AS tanggal_daftar, TIME_FORMAT(c.time_register, '%H.%i') AS jam_daftar, c.status from user a, workshop b, daftar_workshop c where a.id = c.id_user AND b.id_workshop = c.id_workshop ORDER BY c.status, c.time_register DESC");
        return $query->result();
    }

    function getAcceptedUserWorkshop()
    {
        $query = $this->db->query("select a.nama as namauser, a.email, b.nama as namaworkshop, c.id_daftar, c.no_hp, c.alamat, c.bukti_pembayaran, DATE_FORMAT(c.time_register, '%e/%m/%Y') AS tanggal_daftar, TIME_FORMAT(c.time_register, '%H.%i') AS jam_daftar, c.status from user a, workshop b, daftar_workshop c where a.id = c.id_user AND b.id_workshop = c.id_workshop AND c.status = '1' ORDER BY c.time_register");
        return $query->result();
    }

    function update_status($table, $id, $data)
    {
        $this->db->where('id_daftar', $id);
        $this->db->update($table, $data);
    }
}
