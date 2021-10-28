<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
     function __construct() {

        parent::__construct();
        $this->load->model('users_model');
        
    }

    public function index()
    {
    }

    public function show()
    {   
        $this->load->view('templates/header');
        
        // var_dump(base_url()); 
        $forms = $this->Form_model->get();
        $forms = $forms->result();
        $this->load->view('v_form',[
           'base_url'=>base_url(),
            'forms' =>$forms

        ] );
        $this->load->view('templates/footer');
    
    }
    public function save ()
    {
        
        $this->Form_model->add($this->input->post());
        redirect('http://localhost/dev/demo/index.php/form/show', 'refresh');
    }
    public function delete()
    {
        // var_dump($this->input->post('id'));
        $this->Form_model->del($this->input->post('id'));
        redirect('http://localhost/dev/demo/index.php/form/show', 'refresh');
    }
    public function show_Edit()
    {
        $this->load->view('show_Edit',[
            'id'=>$this->input->post('id')
        ]);  
    }
    public function edit()
    {
        $this->Form_model->update($this->input->post());
        redirect('http://localhost/dev/demo/index.php/form/show', 'refresh');
    }
}

/* End of file Form.php */
