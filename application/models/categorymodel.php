<?php
    class categorymodel extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        function insert_data($data) {
            // Inserting in Table(album) of Database(webnhac)
            $this->db->insert('category', $data);
        }
        public function truyvancategory() {
            $query = $this->db->get('category');
            return $query->result_array();
        }
        public function truyvanidcategory($IDCategory) {
            $this->db->select('*');
            $this->db->from('category');
            $this->db->where('IDCategory', $IDCategory);
            $query = $this->db->get();
            return $query->result();
        }
    }
?>