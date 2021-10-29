<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
    public function show()
    {
        $this->load->view('templates/header');
        $this->load->view('v_register', [
            'base_url' => base_url()
        ]);
        $this->load->view('templates/footer');
    }


    public function save()
    {
        $data = $this->input->post();
        unset($data['re_password']);
        $user = $this->Users_model->get($data['username']);
        if (COUNT($user->result()) == 0) {
            $data['password'] =  $this->bcrypt->hash_password($data['password']);
            $this->Users_model->add($data);
            redirect('http://localhost/dev/demo/index.php/Authen/show', 'refresh');
        } else {
            echo "
                <script>
                    alert('ชื่อผู้ใช้งานถูกใช้ไปแล้ว')
                </script>
            ";
            redirect('http://localhost/dev/demo/index.php/Register/show', 'refresh');
        }
    }
}
    
    /* End of file Register.php */
