<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
    public function show()
    {
        // var_dump($this->session->userdata('id'));
        $id = $this->session->userdata('id');
        $user = $this->Users_model->select_profile_by_id($id);
        $user = $user->result()[0];
        // var_dump($user);
        // die;
        $this->load->view('templates/header', [
            'navbar' => true,
            'base_url' => base_url()
        ]);
        $this->load->view('v_profile', [
          
            'user' => $user

        ]);
        $this->load->view('templates/footer');
    }
    public function show_edit()
    {
        $id = $this->session->userdata('id');
        $user = $this->Users_model->select_profile_by_id($id);
        $user = $user->result()[0];
        $this->load->view('templates/header', [
            'navbar' => true,
            'base_url' => base_url()
        ]);
        $this->load->view('v_profile_edit', [
          
            'user' => $user

        ]);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $data = $this->input->post();
        $data['id'] = $this->session->userdata('id');
        unset($data['re_password']);
        if ($data['password'] == '') {
            unset($data['password']);
        } else {
            $data['password'] = sha1($data['password']);
        }
        $this->Users_model->update($data);
        redirect('http://localhost/dev/demo/index.php/Profile/show', 'refresh');
    }
}
    
    /* End of file Profile.php */
