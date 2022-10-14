<?php
class M_foto extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    private $_table = "foto_kegiatan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function insert_data($table, $data)
    {
        if (!$this->db->insert($table, $data)) {
            return "failed";
        }
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function update($data, $id){
        return $this->db->update($this->_table, $data, array('id' => $id));
    }

}
