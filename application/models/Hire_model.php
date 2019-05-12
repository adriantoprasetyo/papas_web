<?php

class Hire_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_last_ten_entries()
        {
                $query = $this->db->get('hire_list', 10);
                return $query->result_array();
        }

        public function insert_entry($data)
        {
                $this->db->insert('hire_list', $data);
        }

        // public function update_entry()
        // {
        //         $this->title    = $_POST['title'];
        //         $this->content  = $_POST['content'];
        //         $this->date     = time();

        //         $this->db->update('entries', $this, array('id' => $_POST['id']));
        // }

}

?>