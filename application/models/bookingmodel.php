<?php
    class bookingmodel extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        function insert_data($data) {
            // Inserting in Table(album) of Database(webnhac)
            $this->db->insert('booking', $data);
        }
        public function truyvanbooking() {
            $query = $this->db->get('booking');
            return $query->result_array();
        }
        public function truyvanidbooking($IDBooking) {
            $this->db->select('*');
            $this->db->from('booking');
            $this->db->where('IDCustomer', $IDBooking);
            $query = $this->db->get();
            return $query->result();
        }
        public function truyvanidevent($IDEvent) {
            $this->db->select('*');
            $this->db->from('booking');
            $this->db->where('IDEvent', $IDEvent);
            $query = $this->db->get();
            return $query->result();
        }
    }
?>