<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Note_model extends CI_Model
{

    public function add($data)
    {
        $this->db->insert('notes', $data);
    }
    public function get($id = null)
    {
        if (isset($id)) {
            $this->db->where('id', $id);
        }

        $query = $this->db->get('notes');
        return $query;
    }
    public function del($id)
    {
        $this->db->delete('notes', array('id' => $id));
    }
    public function update($data)
    {
        $this->db->set($data);
        $this->db->where('id', $data['id']);
        $this->db->update('notes'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
    }

    public function select_note_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('notes');
        return $query;
    }
    public function select_note_by_create_by($id)
    {
        $this->db->where('create_by', $id);
        $query = $this->db->get('notes');
        return $query;
    }
    public function select_note_by_date_alert($date_alert,$id)
    {   
        if (isset($id)) {
            $this->db->where('create_by', $id);
        }
        $this->db->where('date_alert', $date_alert);
        $query = $this->db->get('notes');
        return $query;
    }
    public function select_note_by_tag($tag,$id)
    {   
        if (isset($id)) {
            $this->db->where('create_by', $id);
        }
        $this->db->like('tag', $tag);
        $this->db->or_like('description', $tag);
        $query = $this->db->get('notes');
        return $query;
    }
}

/* End of file Note_model.php */
