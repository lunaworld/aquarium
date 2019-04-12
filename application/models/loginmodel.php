<?php
    class loginmodel extends CI_Model {
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        function insert_data($data) {
            // Inserting in Table(album) of Database(webnhac)
            $this->db->insert('registion', $data);
        }

        function login($name, $password) {
            $password = $password;
            $this->db->where('username',$name);
            $this->db->where('password',$password);
            $query = $this->db->get('registion');
            if($query->num_rows()>0) {
                // foreach ($query->result() as $row) {
                //     $data = array(
                //         'username'=> $row->username,
                //         'logged_in'=>TRUE
                //     );
                // }
                // $this->session->set_userdata($data);
                return TRUE;
            } else {
                return FALSE;
            }
        }

        function isLoggedIn() {
            $is_logged_in = $this->session->userdata('logged_in');
            if(isset($is_logged_in)) {
                return TRUE;
            }
            redirect('login');
            return False;
        }
    }
?>