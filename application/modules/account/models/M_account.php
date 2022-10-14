<?php
    class M_account extends CI_Model
    {
        function __construct() {
            // Call the Model constructor
            parent::__construct();
        }

        function daftar($table,$data)
        {
             $this->db->insert($table,$data);
            //  return $this->db->insert_id();
        }

        function checkemail($table, $email){
            $query = $this->db->get_where($table, array('email' => $email));
            return $query->num_rows();
        }

        public function getUserById($table, $id){
            $query = $this->db->get_where($table,array('id'=>$id));
            return $query->row_array();
        }

        public function updateUser($data, $id){
            $this->db->where('user.id', $id);
		    return $this->db->update('user', $data);
        }

        public function masuk($email, $password){
            $query = $this->db->get_where('user',array('email'=>$email,'password' => hash('SHA256',$password)));
            return $query->num_rows();
        }

        public function checkActivate($email){
            $query = $this->db->query('SELECT active FROM user where email = "' . $email . '"');
            return $query->row()->active;
        }

        public function getIdByEmail($email){
            $query = $this->db->query('SELECT id FROM user where email = "' . $email . '"');
            return $query->row()->id;
        }

        public function getNamaByEmail($email){
            $query = $this->db->query('SELECT nama FROM user where email = "' . $email . '"');
            return $query->row()->nama;
        }

        public function masukadmin($username, $password){
            $query = $this->db->get_where('admin',array('username'=>$username,'password' => hash('SHA256',$password)));
            return $query;
        }

        public function get_current_id(){
            $query = $this->db->query('SELECT max(id) as last_id FROM user');
            return $query->row()->last_id;
        }
        //  function Save($data,$table,$param)
        // {
        //     $query=$this->db->update($table,$data,array('gid' => $param["gid"],'tahun'=>$param["tahun"]));
        //     return $query;
        // }
        // function Update($data,$tabel,$where)
        // {
        //     $query=$this->db->update($tabel,$data,$where);
        //     return $query;
        // }
        // function Delete($tabel,$where)
        // {
        //     $query=$this->db->query("delete from $tabel $where");
        //     return $query;
        // }
        // function Cek($table,$where)
        // {
        //     $query=$this->db->query("select *from $table $where");
        //     return $query;
        // }
        
        // public function getUser($id){
        //     $query = $this->db->get_where('form_pendaftaran',array('id_form'=>$id));
        //     return $query->row_array();
        // }

        // function insert($tabel,$data)
        // {
        //     $this->db->insert($tabel, $data);
        //     return $this->db->insert_id();
        // }

        // function activate($data, $id) {
        //     $this->db->where('form_pendaftaran.id_form', $id);
		//     return $this->db->update('form_pendaftaran', $data);
        // }
    }
?>