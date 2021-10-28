<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Form_model extends CI_Model
{

    public function add($data)
    {
        $this->db->insert('forms', $data);
    }
    public function get()
    {
        $query = $this->db->get('forms');
        return $query;
    }
    public function del($id)
    {
        $this->db->delete('forms', array('id' => $id));
    }
    public function update($data)
    {
        $this->db->set($data);
        $this->db->where('id', $data['id']);
        $this->db->update('forms'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
    }
}

/* End of file Form_model.php */
