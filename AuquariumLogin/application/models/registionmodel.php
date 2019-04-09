<?php
    class registionmodel extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        function insert_data($data) {
            // Inserting in Table(album) of Database(webnhac)
            $this->db->insert('registion', $data);
        }
        public function truyvanregistion() {
            $query = $this->db->get('registion');
            return $query->result_array();
        }
        public function truyvanusername($username) {
            $this->db->select('*');
            $this->db->from('registion');
            $this->db->where('username', $username);
            $query = $this->db->get();
            return $query->result();
        }
    }
?>