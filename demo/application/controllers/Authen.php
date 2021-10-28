<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Authen extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
    }
    public function show()
    {
        $check_session = $this->session->userdata('login');
        if (isset($check_session)) {
            redirect('http://localhost/dev/demo/index.php/Profile/show', 'refresh');
        } else {
            $this->load->view('templates/header');
            $this->load->view('v_authen', [
                'base_url' => base_url()
            ]);
            $this->load->view('templates/footer');
        }
    }
    public function login()
    {
        $data = $this->input->post();
        $data['password'] = sha1($data['password']);
        $this->Users_model->authen($data);
        $result = $this->Users_model->authen($data)->result();

        if (COUNT($result) > 0) {
            $this->session->set_userdata('login', true);
            $this->session->set_userdata('id', $result[0]->id);
            redirect('http://localhost/dev/demo/index.php/profile/show', 'refresh');
        } else {
            echo "
                <script>
                    alert('ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง')
                </script>
            ";

            redirect('http://localhost/dev/demo/index.php/Authen/show', 'refresh');
        }
    }

    public function reset_password($id)
    {   
        $this->session->set_userdata('login', true);
        $this->session->set_userdata('id',$id);
        redirect('http://localhost/dev/demo/index.php/Profile/show_edit', 'refresh');
    }

    // session เก็บข้อมูลไว้ที่server
    public function logout()
    {

        $this->session->unset_userdata('login');
        $this->session->unset_userdata('id');
        redirect('http://localhost/dev/demo/index.php/Authen/show', 'refresh');
    }
}
    
    /* End of file Authen.php */
