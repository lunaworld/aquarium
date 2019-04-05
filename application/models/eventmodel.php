<?php
    class eventmodel extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        function insert_data($data) {
            // Inserting in Table(album) of Database(webnhac)
            $this->db->insert('events', $data);
        }
        public function truyvanevent() {
            $query = $this->db->get('events');
            return $query->result_array();
        }
        public function truyvanidevent($IDEvent) {
            $this->db->select('*');
            $this->db->from('events');
            $this->db->where('IDEvent', $IDEvent);
            $query = $this->db->get();
            return $query->result();
        }
    }
?>