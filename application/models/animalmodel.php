<?php
    class animalmodel extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        function insert_data($data) {
            // Inserting in Table(album) of Database(webnhac)
            $this->db->insert('animal', $data);
        }
        public function truyvananimal() {
            $query = $this->db->get('animal');
            return $query->result_array();
        }
        public function truyvanidanimal($IDAnimal) {
            $this->db->select('*');
            $this->db->from('animal');
            $this->db->where('IDAnimal', $IDAnimal);
            $query = $this->db->get();
            return $query->result();
        }
        public function truyvanidcategory($IDCategory) {
            $this->db->select('*');
            $this->db->from('animal');
            $this->db->where('IDCategory', $IDCategory);
            $query = $this->db->get();
            return $query->result();
        }
    }

?>