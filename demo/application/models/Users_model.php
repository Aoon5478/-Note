<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public function add($data)
    {
        $this->db->insert('users', $data);
    }
    public function get($username=null)
    {
        if (isset($username)) {
            $this->db->where('username', $username);
        }
        $query = $this->db->get('users');
        return $query;
    }
    public function del($id)
    {
        $this->db->delete('users', array('id' => $id));
    }
    public function update($data)
    {
        $this->db->set($data);
        $this->db->where('id', $data['id']);
        $this->db->update('users'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
    }
    //   check login
    public function authen($data)
    {
        $this->db->where('username', $data['username']);
        $query = $this->db->get('users');
        return $query;
    }
    public function select_profile_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query;
    }
}

/* End of file Users_model.php */
