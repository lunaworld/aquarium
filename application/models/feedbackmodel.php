<?php
    class feedbackmodel extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        function insert_data($data) {
            // Inserting in Table(album) of Database(webnhac)
            $this->db->insert('feedback', $data);
        }
        public function truyvanfeedback() {
            $query = $this->db->get('feedback');
            return $query->result_array();
        }
        public function truyvanidfeedback($IDFeedback) {
            $this->db->select('*');
            $this->db->from('feedback');
            $this->db->where('IDFeedback', $IDFeedback);
            $query = $this->db->get();
            return $query->result();
        }
    }
?>